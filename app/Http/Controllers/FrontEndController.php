<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Cabang;
use App\Models\Dokter;
use App\Models\Edukasi;
use App\Models\Karir;
use App\Models\Logo;
use App\Models\Penghargaan;
use App\Models\Produk;
use App\Models\Produk_kategori;
use App\Models\Promo;
use App\Models\Reseller;
use App\Models\SocialMedia;
use App\Models\Treatment;
use App\Models\Treatment_kategori;
use App\Models\Youtube;

class FrontEndController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        $cabang = Cabang::all();
        $dokter = Dokter::all();
        $edukasi = Edukasi::all();
        $karir = Karir::all();
        $logo = Logo::all();
        $award = Penghargaan::all();
        $produk = Produk::all();
        $treatment = Treatment::where('label', '=', '2')->get();
        $reseller = Reseller::all();
        $promo = Promo::all();
        $sosmed = SocialMedia::all();
        $youtube = Youtube::all();
        $newtreatment = Treatment::where('label', '=', '1')->get();

        return view('pages.landing',
        compact('about', 'cabang', 'dokter', 'edukasi', 'karir', 'logo', 'award', 'produk',
        'treatment', 'reseller', 'promo', 'sosmed', 'youtube', 'newtreatment'));
    }

    public function about()
    {
        $about = About::all();

        return view('pages.about', compact('about'));
    }
}
