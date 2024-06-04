@extends('layout.main')

@section('content')
<div class="info">
    <p>
        <b class="center">Proses Belajar</b>
        <table class="table table-bordered">
          <thead>
              <tr>
                  <th></th>
                  <th>Nama Siswa</th>
                  <th>Course</th>
                  <th>Material</th>
                  <th>Live Code</th>
              </tr>
          </thead>
          <tbody>

                @foreach ($progress as $item)
               <tr>
                    <td>{{ $loop -> iteration }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->course->title }}</td>
                    <td>{{ $item->material_status ? "Sudah Terisi" : "Belum Terisi" }}</td>
                    <td>{{ $item->livecode_status ? "Sudah Terisi" : "Belum Terisi" }}</td>
               </tr>
            @endforeach
        
          </tbody>
      </table>
      
    </p>
</div>
@endsection