@extends('layout.materi')

@section('page title')
<h2 style="font-size: 32px">{{ $material->title }}</h2>
@endsection

@section('materi')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            
            <h1 class="mb-3">{{ $material->title }}</h1>
            
        
            <article class="my-3 fs-5">
                {!! $post->content !!}
            </article>
            
            <a href="/posts" class="d-block mt-3">Back To Post</a>

        </div>
    </div>
</div>


<form action="/course-2">
    <p>klik tombol <b>Next</b> untuk lanjut ke bagian berikutnya</p>
    <div class="d-grid gap-2 d-md-flex">
        <button class="btn btn-primary me-md-2 bg-danger" id="nextSection" type="submit">NEXT</button>
    </div>
</form>

@endsection
