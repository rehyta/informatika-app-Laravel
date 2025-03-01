@extends('layout.clear')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">

      @if(session()->has('success'))
      <div class="alert alert-succes alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif 

        <main class="form-signin w-100 m-auto mt-5">
            <h1 class="h3 mb-3 fw-normal text-center">Login Form</h1>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating mb-1">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"    id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
              </div>

              @error ('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror

              <div class="form-floating mb-1">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>

             
          
              <button class="btn w-100" type="submit">Login</button>
            </form>
            <div class="text-center mt-3">
              <a href="{{ route('password.request') }}" class="text-decoration-none" style="color: #ee4872; font-size: 14px;">Lupa Password?</a>
            </div>
            <small class="d-block text-center mt-3" >Not Registered? <a href="/register" style="color: #ee4872; font-size: 14px;">Register Now</a></small>
            <p class="mt-5 mb-3 text-body-secondary">&copy; Rehyta</p>
        </main>
    </div>
    
</div>

@endsection