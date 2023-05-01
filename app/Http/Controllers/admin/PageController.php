<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Controllers\coba\Foo;
use PhpParser\Node\Stmt\Echo_;

class PageController extends Controller
{
    public function index()
    {
        return "Halaman Home Admin";
    }

    public function tampil()
    {
        return "Data Mahasiswa Admin";
        // $arrMahasiswa = ["Luhut Panjaitan","Jokowi","Vladimir Putin","Lisa Permata"];
        // return view('jobshet5.mahasiswa')->with('mahasiswa',$arrMahasiswa);
    }

    public function cobaFacade()
    {
        // kode program ditulis disini
        echo Str::snake('SedangBeljarLaravelUncover');
        echo "<br>";
        echo Str::kebab('sedangBeljarLaravelUncover');
    }

    public function cobaClass()
    {
        // kode program ditulis disini
        $foo = new Foo();
        echo $foo->bar();
    }
}