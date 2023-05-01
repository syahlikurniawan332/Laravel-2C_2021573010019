{{-- UNTUK LAPORAN KE 3 (07/03/2023) --}}

{{-- tanpa menggunakan blade --}}
{{-- <div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        <?php echo $nama ?>
    </h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        <?php echo $nilai ?>
    </h1>
</div> --}}

{{-- menggunakan blade --}}
{{-- <div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-while d-inline-block">
        {{$nama}}
    </h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{$nilai}}
    </h1>
</div> --}}

{{-- <div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-while d-inline-block">
        {!!$nama!!}
    </h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {!!$nilai!!}
    </h1>
</div> --}}

{{-- kondisi if else  --}}
{{-- <div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{$nama}}
    </h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{$nilai}}
    </h1>
    <br>
    @if (($nilai >=0)and($nilai <50))
    <div class="alert alert-denger d-inline-block">
        maaf, anda tidak lulus
    </div>
    @elseif (($nilai >=50)and($nilai <=100))
    <div class="alert alert-success d-inline-block">
        Selamat, anda lulus
    </div>
    @else
    <div class="alert alert-dark d-inline-block">
        Nilai tidak valid
    </div>
    @endif
</div> --}}


{{-- kondisi switch  --}}
    {{-- <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nilai}}
        </h1>
        <br>
        @switch($nilai)
        @case(0)
        <div class="alert alert-danger d-inline-block">
            tidak ikut ujian
        </div>
        @break
        @case(75)
        <div class="alert alert-danger d-inline-block">
            Lumayan
        </div>
        @break
        @case(100)
        <div class="alert alert-danger d-inline-block">
            Sempurna
        </div>
        @break
        @default
        <div class="alert alert-danger d-inline-block">
            nilai tidak valid
        </div>
        @endswitch
    </div> --}}


{{-- perulangan for  --}}
{{-- <div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{$nama}}
    </h1>
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{$nilai}}
    </h1>
    <br>
    <div class="container text-center mt-3 pt-3 bg-white">
        @for ($i=0;$i<5;$i++)
        <div class="alert alert-into d-inline-block">
            {{$i}}
        </div>
        @endfor
    </div>
</div> --}}

{{-- perulangan while  --}}
{{-- <div class="container text-center mt-3 pt-3 bg-white">
    <?php $i=0; ?>
    @while ($i<5)
    <div class="alert alert-info d-inline-block">
        {{$i}}
    </div>
    <?php $i++ ?>
    @endwhile
</div> --}}

{{-- perulangan foreach  --}}
{{-- @foreach($nilai as $vall)
        @if (($vall>=0)and($vall<50))
        <div class="alert alert-info d-inline-block">
            {{$vall}}
        </div>
        @elseif(($vall>=50)and($vall<=100))
        <div class="alert alert-success d-inline-block">
            {{$vall}}
        </div>
        @endif
        @endforeach --}}


{{-- perulangan forelse  --}}
{{-- @forelse ($nilai as $val)
    @if (($val>=0)and($val<50))
        <div class="alert alert-denger d-inline-block">
            {{$val}}
        </div>
    @elseif(($val>=50)and($val<=100))
        <div class="alert alert-success d-inline-block">
             {{$val}}
        </div>
    @endif
    @empty
        <div class="alert alert-dark d-inline-block">
            Tidak ada data...
        </div>
@endforelse --}}

{{-- perintah continue dan break --}}
{{-- <div class="container text-center mt-3 pt-3 bg-white">
    <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{$nama}}
    </h1>
    <br>
    @foreach($nilai as $vall)
    @if ($vall<50)
    @continue
    @endif
    <div class="alert alert-success d-inline-block">
        {{$vall}}
    </div>
    @endforeach
</div> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nama}}
        </h1>
        <br>
        @foreach($nilai as $vall)
    @if ($vall<50)
    @break
    @endif
    <div class="alert alert-success d-inline-block">
        {{$vall}}
    </div>
    @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>