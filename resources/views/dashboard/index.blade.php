@extends('layout.main')

@section('container')

<div class="container  text-center">    
    <div class="row justify-content-md-center">

        <div class="col-left border col-lg-2">
            <div class="img-profile m-3">
                <img src="{{ URL('img/user_1144760.png') }}">
            </div>
            <h2 style="font-size: 18px">{{ auth()->user()->username }}</h2>
        </div>

        <div class="col-right border col-lg-10">
            <div class="px-4 text-center">
                <div class="row">
                  <div class="box m-3 bg-info" style="width: 200px">
                   <div class="p-3">50%</div>
                  </div>
                  <div class="box m-3 bg-danger" style="width: 200px">
                    <div class="p-3">Algoritma</div>
                  </div>
                  <div class="box m-3 bg-primary" style="width: 200px">
                    <div class="p-3">Course 4</div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class="course">
        <h1>
            Halo! mau belajar apa hari ini?
        </h1>
        <div class="course">

          
            <ul>
                <div class="card mb-3">
                  <div class="row g-0 m-2">
                    <div class="col-md-4 mt-3">                          
                      <img src="https://picsum.photos/id/180/200/120" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                       <div class="card-body">
                          <h5 class="card-title">Apa yang kalian ketahui tentang bahasa pemrograman?</h5>
                          <p class="card-text">Quiz ini bertujuan untuk memperkirakan sejauh apa kalian mengenal bahasa pemrograman</p>
                           <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <form action="/kuesioner">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end p-2">
                          <button class="btn btn-primary me-md-2 bg-danger" type="submit">Mulai Quiz</button>
                      </div>
                  </form>
                  </div>
                </div>
<!--mungkin bakal diganti dengan quiz awal dan masukan -->
                <div class="card mb-3">
                  <div class="row g-0 m-2">
                    <div class="col-md-4 mt-3">                          
                      <img src="https://picsum.photos/id/1/200/120" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                       <div class="card-body">
                          <h5 class="card-title">Tanggapan anda</h5>
                          <p class="card-text">Halaman ini berisi tanggapan dan respon siswa terhadap web</p>
                           <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <form action="/course-2">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end p-2">
                          <button class="btn btn-primary me-md-2 bg-danger" type="submit">Mulai kuesioner</button>
                      </div>
                  </form>
                  </div>
                </div>

            </ul>
        </div>
    </div>
</div>

@endsection