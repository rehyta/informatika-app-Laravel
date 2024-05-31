@extends('layout.main')

@section('content')

<div class="row">
  @foreach ($materials as $material)
    <div class="col-md-4">
      <article>
        <div class="card">
          <img src="https://img.freepik.com/free-vector/tiny-developers-programming-website-internet-platform-flat-vector-illustration-cartoon-programmers-near-screen-with-open-code-script-software-development-digital-technology-concept_74855-10168.jpg?w=1060" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="height: 50px">{{ $material->title }}</h5>
            <p class="card-text" style="height: 100px">{{  $material->prompt }}</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn me-md-2" type="button"><a href="/materi/{{ $material->slug }}" style="color: white">Pelajari</a></button>
              <button class="btn me-md-2" type="button"><a href="/livecode/{{ $material->slug }}" style="color: white">Live Code</a></button>
            </div>
          </div>
        </div>
      </article>
    </div>
  @endforeach
</div>



@endsection