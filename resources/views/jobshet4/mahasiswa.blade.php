{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/jobshet4/mahasiswa">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/jobshet4/dosen">Data Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/jobshet4/gallery">Gallery</a>
                </li>
            </ul>
        </div>
    </nav> --}}

{{-- @include('jobshet4.layout.header',['title'=>'Data Mahasiswa'])) --}}

@extends('jobshet4.layout.master')
@section('title','Data Mahasiswa')
@section('menuMahasiswa','active')
    
    @section('content')
    @parent
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Mahasiswa</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse($mahasiswa as $val)
                    <li class="list-group-item">{{$val}}</li>
                    @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                    @endforelse 
                </ol>
            </div>
        </div>
    </div>
@endsection

{{-- @include('jobshet4.layout.footer') --}}

    {{-- <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi Mahasiswa | Copyright (c) {{date("Y")}} Teknik Informatika
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html> --}}