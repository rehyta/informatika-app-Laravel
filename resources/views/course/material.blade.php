@extends('layout.materi')

@section('page title')
<h2 style="font-size: 32px">{{ $title }}</h2>
@endsection

@section('materi')
{!! $content !!}

<form action="{{ route('material.update-status', $material->id) }}">
    <p>klik tombol <b>Selesai</b> jika sudah mengerti</p>
    <div class="d-grid gap-2 d-md-flex">
        <button class="btn btn-primary me-md-2 bg-danger" type="submit">Selesai</button>
    </div>
</form>
@endsection
