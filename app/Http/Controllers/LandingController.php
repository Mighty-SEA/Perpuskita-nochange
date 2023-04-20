<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $buku = Buku::with('kategori')->get();
        $pendidikan = Buku::WHERE('id_kategori', '1')->get();
        $novel = Buku::WHERE('id_kategori', '2')->get();
        $komik = Buku::WHERE('id_kategori', '3')->get();
        $popular = Buku::orderBy('viewed', 'desc')->get();
        return view('landing', [
            'buku' => $buku,
            'novel' => $novel,
            'pendidikan' => $pendidikan,
            'komik' => $komik,
            'popular' => $popular
        ]);
    }
}
