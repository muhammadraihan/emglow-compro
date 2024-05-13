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
        $produk = Produk::where('label', '=', '2')->get();
        $treatment = Treatment::where('label', '=', '2')->get();
        $reseller = Reseller::all();
        $promo = Promo::all();
        $sosmed = SocialMedia::all();
        $youtube = Youtube::all();
        $newtreatment = Treatment::where('label', '=', '1')->get();
        $kategori = Produk_kategori::all();

        return view('pages.landing',
        compact('about', 'cabang', 'dokter', 'edukasi', 'karir', 'logo', 'award', 'kategori',
        'treatment', 'reseller', 'promo', 'sosmed', 'youtube', 'newtreatment', 'produk'));
    }

    public function about()
    {
        $about = About::all();
        $kategori = Produk_kategori::all();

        return view('pages.about', compact('about','kategori'));
    }

    public function cabang()
    {
        $cabang = Cabang::all();
        $kategori = Produk_kategori::all();

        return view('pages.cabang-klinik', compact('cabang','kategori'));
    }

    public function treatment()
    {
        $treatment = Treatment::all();
        $kategori = Produk_kategori::all();

        return view('pages.treatment', compact('treatment','kategori'));
    }

    public function produk($id)
    {
        // dd($id);
        $produkKategori = Produk_kategori::where('slug',$id)->get();
        $produk = Produk::where('kategori', $produkKategori[0]->uuid)->get();
        $kategori = Produk_kategori::all();

        return view('pages.store', compact('produk','kategori'));
    }

    public function produkAll()
    {
        $produk = Produk::all();
        $kategori = Produk_kategori::all();

        return view('pages.store', compact('produk', 'kategori'));
    }

    public function dokter()
    {
        $dokter = Dokter::all();
        $kategori = Produk_kategori::all();

        return view('pages.dokter', compact('dokter','kategori'));
    }

    public function treatmentDetail($id)
    {
        // $treatmentDetail = Treatment::uuid($id);
        $result = Treatment::all()->where('slug', 'like', $id);
        $kategori = Produk_kategori::all();
        $about = About::all();

        return view('pages.treatment-detail', compact('result', 'kategori', 'about'));
    }

    public function treatmentDetailByName($name) {
        $data = Treatment::where('name', $name)->first();
    
        // Periksa apakah data ditemukan
        if (!$data) {
            abort(404); // Atau tindakan lain jika data tidak ditemukan
        }
    
        // Kembalikan view dengan data
        return view('pages.treatment-detail', compact('data'));
    }
    

    public function reseller()
    {
        $reseller = Reseller::all();
        $kategori = Produk_kategori::all();

        return view('pages.reseller', compact('reseller','kategori'));
    }

    public function karir()
    {
        $karir = Karir::all();
        $kategori = Produk_kategori::all();

        return view('pages.karir', compact('karir','kategori'));
    }
    
}
