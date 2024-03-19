@extends('layout.materi')

@section('page title')
<h2 style="font-size: 32px">{{ $material->title }}</h2>
@endsection

@section('materi')
{!! $material->content !!}


<form action="/course-2">
    <p>klik tombol <b>Next</b> untuk lanjut ke bagian berikutnya</p>
    <div class="d-grid gap-2 d-md-flex">
        <button class="btn btn-primary me-md-2 bg-danger" id="nextSection" type="submit">NEXT</button>
    </div>
</form>

@endsection