@extends('layout.admin')

@section('content')

<header class="head">
    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
    </svg>
    <h2 class="text-center">Selamat Datang {{ auth()->user()->username }} </h2>
</header>
<div class="list-button">
  <div class="btn-group" role="group" aria-label="Basic mixed styles example">
    <a href="/data-siswa" class="btn1" id="dataSiswa">Data Siswa</a> <!--CRUD data siswa-->
    <a href="/data-course" class="btn1" id="dataCourse">Data Course</a> <!--nanti bisa buat bikin materi dan excercise-->
    <a href="/hasil-belajar" class="btn1" id="hasilBelajar">Hasil Belajar</a> <!--isinya raport hasil belajar siswa-->
  </div>
</div>
<div class="info">
  
</div>



@endsection