<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;
use Carbon\Carbon;

use Auth;
use DataTables;
use DB;
use File;
use Hash;
use Image;
use Response;
use URL;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialMedia = SocialMedia::all();
        if (request()->ajax()) {
            $data = SocialMedia::get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('sosmed', function ($row){
                    switch ($row->sosmed) {
                        case 'instagram':
                            return 'Instagram';
                            break;
                        case 'facebook':
                            return 'Facebook';
                            break;
                        case 'tiktok':
                            return 'Tik Tok';
                            break;
                        case 'youtube':
                            return 'Youtube';
                            break;
                        case 'wa':
                            return 'WhatsApp';
                            break;
                    }
                })
                ->addColumn('action', function ($row) {
                    return '
                            <a class="btn btn-success btn-sm btn-icon waves-effect waves-themed" href="' . route('socialMedia.edit', $row->uuid) . '"><i class="fal fa-edit"></i></a>
                            <a class="btn btn-danger btn-sm btn-icon waves-effect waves-themed delete-btn" data-url="' . URL::route('socialMedia.destroy', $row->uuid) . '" data-id="' . $row->uuid . '" data-token="' . csrf_token() . '" data-toggle="modal" data-target="#modal-delete"><i class="fal fa-trash-alt"></i></a>';
                })
                ->removeColumn('id')
                ->removeColumn('uuid')
                ->rawColumns(['action','sosmed'])
                ->make(true);
        }

        return view('socialMedia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('socialMedia.create');
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
            'sosmed' => 'required',
            'link' => 'required',
        ];

        $messages = [
            '*.required' => 'Field :attribute tidak boleh kosong !',
            '*.min' => 'Nama tidak boleh kurang dari 2 karakter !',
            '*.image' => 'Field Harus Berupa Foto !',
            '*.mimes' => 'Foto Harus Berformat JPEG/PNG/JPG'
        ];

        $this->validate($request, $rules, $messages);
        // dd($request->photo);

        $socialMedia = new SocialMedia();
        $socialMedia->sosmed = $request->sosmed;
        $socialMedia->link = $request->link;
        $socialMedia->save();

        toastr()->success('New Social Media Added', 'Success');
        return redirect()->route('socialMedia.index');
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
        $socialMedia = SocialMedia::uuid($id);
        return view('socialMedia.edit',compact('socialMedia'));
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
            'sosmed' => 'required',
            'link' => 'required',
        ];

        $messages = [
            '*.required' => 'Field :attribute tidak boleh kosong !',
            '*.min' => 'Nama tidak boleh kurang dari 2 karakter !',
            '*.image' => 'Field Harus Berupa Foto !',
            '*.mimes' => 'Foto Harus Berformat JPEG/PNG/JPG'
        ];

        $this->validate($request, $rules, $messages);
        // dd($request->photo);

        $socialMedia = SocialMedia::uuid($id);
        $socialMedia->sosmed = $request->sosmed;
        $socialMedia->link = $request->link;
        $socialMedia->save();

        toastr()->success('Social Media Added', 'Success');
        return redirect()->route('socialMedia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socialMedia = SocialMedia::uuid($id);
        $socialMedia->delete();

        toastr()->success('Social Media Deleted', 'Success');
        return redirect()->route('socialMedia.index');
    }
}
