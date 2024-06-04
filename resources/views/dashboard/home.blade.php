@extends('layout.main')

@section('content')

<header class="head">
    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
    </svg>
    <h2 class="text-center">Selamat Datang {{ auth()->user()->username }} </h2>
</header>
<div class="list-info">
    <div class="px-4 text-center">
        <div class="row gx-5">
          <div class="awa col">
           <div class="p-3">jumlah course</div>
          </div>
          <div class="awa col">
            <div class="p-3">asasa</div>
          </div>
          <div class="awa col">
            <div class="p-3">hasil belajar</div>
          </div>
        </div>
      </div>
</div>
<div class="info">
    <p>
        <b class="center">Proses Belajar</b>
        <table class="table table-bordered">
          <thead>
              <tr>
                  <th></th>
                  <th>Course</th>
                  <th>Material</th>
                  <th>Live Code</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($courses as $key => $course)
                @foreach ($course->processes as $process)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $course->title }}</td>
                        <td>{{ $process->material_status }}</td>
                        <td>{{ $process->livecode_status }}</td>
                    </tr>
                @endforeach
            @endforeach
          </tbody>
      </table>
      
    </p>
</div>



@endsection