@extends('layout.admin')

@section('content')
<h1 class="text-center mb-4">Edit Siswa</h1>
<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $siswa->name }}" required>
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="{{ $siswa->username }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $siswa->email }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection