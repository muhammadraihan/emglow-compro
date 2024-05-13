<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment;
use App\Models\Treatment_kategori;
use Carbon\Carbon;
use Illuminate\Support\Str;

use Auth;
use DataTables;
use DB;
use File;
use Hash;
use Image;
use Response;
use URL;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatment = Treatment::all();
        if (request()->ajax()) {
            $data = Treatment::get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('label', function ($row){
                    switch ($row->label) {
                        case '1':
                            return '<span class="badge badge-success">New Treatment</span>';
                            break;
                        case '2':
                            return '<span class="badge badge-danger">Best Treatment</span>';
                            break;
                    }
                })
                ->editColumn('kategori', function ($row){
                    return $row->Categories->name;
                })
                ->editColumn('photo', function ($row){
                    $url = asset('photo');
                    return '<image style="width: 150px; height: 150px;"  src="'.$url.'/'.$row->photo.'" alt="">';
                })
                ->addColumn('action', function ($row) {
                    return '
                            <a class="btn btn-success btn-sm btn-icon waves-effect waves-themed" href="' . route('treatment.edit', $row->uuid) . '"><i class="fal fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm btn-icon waves-effect waves-themed delete-btn" data-url="' . URL::route('treatment.destroy', $row->uuid) . '" data-id="' . $row->uuid . '" data-token="' . csrf_token() . '" data-toggle="modal" data-target="#modal-delete"><i class="fal fa-trash-alt"></i></a>';
                })
                ->removeColumn('id')
                ->removeColumn('uuid')
                ->rawColumns(['action','photo','label'])
                ->make(true);
        }

        return view('treatment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $treatment_kategori = Treatment_kategori::all()->pluck('name', 'uuid');
        return view('treatment.create', compact('treatment_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'label' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];

        $messages = [
            '*.required' => 'Field :attribute tidak boleh kosong !',
            '*.min' => 'Nama tidak boleh kurang dari 2 karakter !',
            '*.image' => 'Field Harus Berupa Foto !',
            '*.mimes' => 'Foto Harus Berformat JPEG/PNG/JPG'
        ];

        $this->validate($request, $rules, $messages);
        // dd($request->photo);

        $treatment = new Treatment();
        $treatment->slug = Str::slug($request->name);
        $treatment->label = $request->label;
        $treatment->name = $request->name;
        $treatment->deskripsi = $request->deskripsi;
        $treatment->kategori = $request->kategori;
        $treatment->photo = $request->photo;

        if ($image = $request->file('photo')) {
            $destinationPath = 'photo/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $treatment->photo = "$profileImage";
        }
        $treatment->save();

        toastr()->success('New Treatment Added', 'Success');
        return redirect()->route('treatment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $treatment = Treatment::uuid($id);
        $treatment_kategori = Treatment_kategori::all()->pluck('name', 'uuid');

        return view('treatment.edit', compact('treatment', 'treatment_kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'label' => 'required'
        ];

        $messages = [
            '*.required' => 'Field :attribute tidak boleh kosong !',
            '*.min' => 'Nama tidak boleh kurang dari 2 karakter !',
            '*.image' => 'Field Harus Berupa Foto !',
            '*.mimes' => 'Foto Harus Berformat JPEG/PNG/JPG'
        ];

        $this->validate($request, $rules, $messages);
        // dd($request->photo);

        $treatment = Treatment::uuid($id);
        $treatment->slug = Str::slug($request->name);
        $treatment->label = $request->label;
        $treatment->name = $request->name;
        $treatment->deskripsi = $request->deskripsi;
        $treatment->kategori = $request->kategori;

        if($request->hasFile('photo')){

            // user intends to replace the current image for the category.  
            // delete existing (if set)
        
            if($oldImage = $treatment->photo) {
        
                unlink(public_path('photo/') . $oldImage);
            }
        
            // save the new image
            $image = $request->file('photo');
            $destinationPath = 'photo/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $treatment->photo = "$profileImage";
        }
        $treatment->save();

        toastr()->success('Treatment Edited', 'Success');
        return redirect()->route('treatment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $treatment = Treatment::uuid($id);
        $file = public_path('photo/').$treatment->photo;
        if(file_exists($file)){
            unlink($file);
        }
        $treatment->delete();

        toastr()->success('Treatment Deleted', 'Success');
        return redirect()->route('treatment.index');
    }
}
