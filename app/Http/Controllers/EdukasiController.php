<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edukasi;

use Auth;
use DataTables;
use DB;
use File;
use Hash;
use Image;
use Response;
use URL;

class EdukasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edukasi = Edukasi::get();
        if (request()->ajax()) {
            $data = Edukasi::get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('link', function($row){
                    if($row->link == null){
                        return '-';
                    }else{
                        return '<a href= https://www.youtube.com/watch?v='  .$row->link. '> Cek Link disini !';
                    }
                })
                ->editColumn('photo', function ($row){
                    $url = asset('photo');
                    return '<image style="width: 150px; height: 150px;"  src="'.$url.'/'.$row->photo.'" alt="">';
                })
                ->addColumn('action', function ($row) {
                    return '
                            <a class="btn btn-success btn-sm btn-icon waves-effect waves-themed" href="' . route('edukasi.edit', $row->uuid) . '"><i class="fal fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm btn-icon waves-effect waves-themed delete-btn" data-url="' . URL::route('edukasi.destroy', $row->uuid) . '" data-id="' . $row->uuid . '" data-token="' . csrf_token() . '" data-toggle="modal" data-target="#modal-delete"><i class="fal fa-trash-alt"></i></a>';
                })
                ->removeColumn('id')
                ->removeColumn('uuid')
                ->rawColumns(['action', 'photo','link'])
                ->make(true);
        }

        return view('edukasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('edukasi.create');
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

        $edukasi = new Edukasi();
        $edukasi->name = $request->name;
        $edukasi->deskripsi = $request->deskripsi;
        $link = $request->link;
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $link, $match);
        if($request->link == ''){
            $edukasi->photo = $request->photo;

            if ($image = $request->file('photo')) {
                $destinationPath = 'photo/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $edukasi->photo = "$profileImage";
            }
            $edukasi->save();
        }else{
            $edukasi->link = $match[1];
            $edukasi->photo = $request->photo;

            if ($image = $request->file('photo')) {
                $destinationPath = 'photo/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $edukasi->photo = "$profileImage";
            }
            $edukasi->save();
        }
        

        toastr()->success('New Edukasi Added', 'Success');
        return redirect()->route('edukasi.index');
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
        $edukasi = Edukasi::uuid($id);
        return view('edukasi.edit', compact('edukasi'));
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
            'deskripsi' => 'required'
        ];

        $messages = [
            '*.required' => 'Field :attribute tidak boleh kosong !',
            '*.min' => 'Nama tidak boleh kurang dari 2 karakter !',
            '*.image' => 'Field Harus Berupa Foto !',
            '*.mimes' => 'Foto Harus Berformat JPEG/PNG/JPG'
        ];

        $this->validate($request, $rules, $messages);
        // dd($request->photo);

        $edukasi = Edukasi::uuid($id);
        $edukasi->name = $request->name;
        $edukasi->deskripsi = $request->deskripsi;
        $link = $request->link;
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $link, $match);
        if($request->link == ''){
            $edukasi->link = '';
            if($request->hasFile('photo')){

                // user intends to replace the current image for the category.  
                // delete existing (if set)
            
                if($oldImage = $edukasi->photo) {
            
                    unlink(public_path('photo/') . $oldImage);
                }
            
                // save the new image
                $image = $request->file('photo');
                $destinationPath = 'photo/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $edukasi->photo = "$profileImage";
            }
            $edukasi->save();
        }else{
            $edukasi->link = $match[1];
            if($request->hasFile('photo')){

                // user intends to replace the current image for the category.  
                // delete existing (if set)
            
                if($oldImage = $edukasi->photo) {
            
                    unlink(public_path('photo/') . $oldImage);
                }
            
                // save the new image
                $image = $request->file('photo');
                $destinationPath = 'photo/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $edukasi->photo = "$profileImage";
            }
            $edukasi->save();
        }

        toastr()->success('Edukasi Edited', 'Success');
        return redirect()->route('edukasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edukasi = Edukasi::uuid($id);
        $file = public_path('photo/').$edukasi->photo;
        if(file_exists($file)){
            unlink($file);
        }
        $edukasi->delete();

        toastr()->success('Edukasi Deleted', 'Success');
        return redirect()->route('edukasi.index');
    }
}
