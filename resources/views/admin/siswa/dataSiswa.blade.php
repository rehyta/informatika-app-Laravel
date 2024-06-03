@extends('layout.admin')

@section ('content')
<h1 class="text-center mb-4">Data Siswa</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $siswa)
                    <tr>
                        <td>{{ $siswa->name }}</td>
                        <td>{{ $siswa->username }}</td>
                        <td>{{ $siswa->email }}</td>
                        <td>
                            <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection