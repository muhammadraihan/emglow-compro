<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabang;
use Carbon\Carbon;

use Auth;
use DataTables;
use DB;
use File;
use Hash;
use Image;
use Response;
use URL;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabang = Cabang::all();
        if (request()->ajax()) {
            $data = Cabang::get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('photo', function ($row){
                    $url = asset('photo');
                    return '<image style="width: 150px; height: 150px;"  src="'.$url.'/'.$row->photo.'" alt="">';
                })
                ->addColumn('action', function ($row) {
                    return '
                            <a class="btn btn-success btn-sm btn-icon waves-effect waves-themed" href="' . route('cabang.edit', $row->uuid) . '"><i class="fal fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm btn-icon waves-effect waves-themed delete-btn" data-url="' . URL::route('cabang.destroy', $row->uuid) . '" data-id="' . $row->uuid . '" data-token="' . csrf_token() . '" data-toggle="modal" data-target="#modal-delete"><i class="fal fa-trash-alt"></i></a>';
                })
                ->removeColumn('id')
                ->removeColumn('uuid')
                ->rawColumns(['action','photo'])
                ->make(true);
        }

        return view('cabang.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cabang.create');
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
            'alamat' => 'required',
            'no_tlp' => 'required',
            'detail' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];

        $messages = [
            '*.required' => 'Field tidak boleh kosong !',
            '*.min' => 'Nama tidak boleh kurang dari 2 karakter !',
            '*.image' => 'Field Harus Berupa Foto !',
            '*.mimes' => 'Foto Harus Berformat JPEG/PNG/JPG'
        ];

        $this->validate($request, $rules, $messages);
        // dd($request->photo);

        $cabang = new Cabang();
        $cabang->name = $request->name;
        $cabang->alamat = $request->alamat;
        $no_tlp = $request->no_tlp;
        if (substr($no_tlp, 0, 1) === "0") {
            $no_tlp = "62" . substr($no_tlp, 1);
        }

        $cabang->no_tlp = $no_tlp;
        $cabang->detail = $request->detail;
        $cabang->photo = $request->photo;

        if ($image = $request->file('photo')) {
            $destinationPath = 'photo/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $cabang->photo = "$profileImage";
        }
        $cabang->save();

        toastr()->success('New Cabang Added', 'Success');
        return redirect()->route('cabang.index');
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
        $cabang = Cabang::uuid($id);
        return view('cabang.edit', compact('cabang'));
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
            'alamat' => 'required',
            'no_tlp' => 'required',
            'detail' => 'required',
        ];

        $messages = [
            '*.required' => 'Field tidak boleh kosong !',
            '*.min' => 'Nama tidak boleh kurang dari 2 karakter !',
            '*.image' => 'Field Harus Berupa Foto !',
            '*.mimes' => 'Foto Harus Berformat JPEG/PNG/JPG'
        ];

        $this->validate($request, $rules, $messages);
        // dd($request->photo);

        $cabang = Cabang::uuid($id);
        $cabang->name = $request->name;
        $cabang->alamat = $request->alamat;
        $no_tlp = $request->no_tlp;
        if (substr($no_tlp, 0, 1) === "0") {
            $no_tlp = "62" . substr($no_tlp, 1);
        }

        $cabang->no_tlp = $no_tlp;
        $cabang->detail = $request->detail;

        if($request->hasFile('photo')){

            // user intends to replace the current image for the category.  
            // delete existing (if set)
        
            if($oldImage = $cabang->photo) {
        
                unlink(public_path('photo/') . $oldImage);
            }
        
            // save the new image
            $image = $request->file('photo');
            $destinationPath = 'photo/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $cabang->photo = "$profileImage";
        }
        $cabang->save();

        toastr()->success('Cabang Edited', 'Success');
        return redirect()->route('cabang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cabang = Cabang::uuid($id);
        $file = public_path('photo/').$cabang->photo;
        if(file_exists($file)){
            unlink($file);
        }
        $cabang->delete();

        toastr()->success('Cabang Deleted', 'Success');
        return redirect()->route('cabang.index');
    }
}
