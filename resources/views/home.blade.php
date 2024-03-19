@extends('layout.clear')

@section('container')

<div class="content mt-5">

    <h1 class="text-center">SELAMAT DATANG DI MEDIA PEMBELAJARAN INFORMATIKA</h1>

    <div class="text-center mt-3">
      <img src="{{ URL('img\welcome-page.png') }}" class="rounded">
    </div>

    <div class="d-grid gap-4 d-md-flex justify-content-center">
      <a class="btn-link {{ ($title === "Login") ? 'active' : '' }}" href="/login">
        <button class="btn btn-primary w-100 py-2 px-5 bg-danger" type="submit">Login</button>
      </a>
      <a class="btn-link {{ ($title === "Register") ? 'active' : '' }}" href="/register">
        <button class="btn btn-primary w-100 py-2 px-5 bg-danger" type="submit">Register</button>
      </a>
    </div>
</div>

<div class="about"></div>

@endsection