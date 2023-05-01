{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Data Dosen</title>
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

{{-- @include('jobshet4.layout.header',['title'=>'Gallery']) --}}

@extends('jobshet4.layout.master')
@section('title','Gallery')
@section('menuGallery','active')

    @section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Gallery</h1>
        <div class="row">
            <div class="col-4">
                <img src="https://source.unsplash.com/8CqDvPuo_kI/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/8CqDvPuo_kI/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/8CqDvPuo_kI/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/8CqDvPuo_kI/350x250" class="img-thumbnail img-fluid">
            </div>
            <div class="col-4 mt-4">
                <img src="https://source.unsplash.com/8CqDvPuo_kI/350x250" class="img-thumbnail img-fluid">
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