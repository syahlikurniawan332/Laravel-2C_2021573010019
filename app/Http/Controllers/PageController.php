<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return "Halaman Home";
    }

    public function tampil()
    {
        $arrMahasiswa = ["Luhut Panjaitan","Jokowi","Vladimir Putin","Lisa Permata"];
        return view('jobshet5.mahasiswa')->with('mahasiswa',$arrMahasiswa);
    }
}