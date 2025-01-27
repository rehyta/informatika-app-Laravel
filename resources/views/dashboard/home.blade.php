@extends('layout.main')

@section('content')

<header class="head">
    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
    </svg>
    <h2 class="text-center">Selamat Datang {{ auth()->user()->username }} </h2>
    <a class="btn-link" href="/pre-test">
        <button class="btn2">Ambil pre-test</button>
    </a>
</header>


<div class="info">
    <p>
        <b class="center" style="font-size: 28px">Proses Belajar</b>
        <table class="table table-bordered">
          <thead>
              <tr class="text-center">
                  <th></th>
                  <th>Course</th>
                  <th>Material</th>
                  <th>Live Code</th>
              </tr>
          </thead>

          <tbody>

                @foreach ($courses->sortBy('id') as $key => $item)
               <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->title }}</td>
                    @if(is_null($item->material_status) && is_null($item->livecode_status))
                        <td class="text-center"><i class="bi bi-clock-fill" style="color: red;"></i></td>
                        <td class="text-center"><i class="bi bi-clock-fill" style="color: red;"></i></td>
                    @else 
                    <td class="text-center">
                        @if($item->material_status)
                        <i class="bi bi-check-circle-fill" style="color: green;"></i>
                        @else
                        <i class="bi bi-clock-fill" style="color: red;"></i>
                        @endif
                    </td>
                    <td class="text-center">
                        @if($item->livecode_status)
                        <i class="bi bi-check-circle-fill" style="color: green;"></i>
                        @else
                            <i class="bi bi-clock-fill" style="color: red;"></i>
                        @endif
                    </td>
                        {{-- <td>{{ $item->material_status ? "Sudah Terisi" : "Belum Terisi" }}</td>
                        <td>{{ $item->livecode_status ? "Sudah Terisi" : "Belum Terisi" }}</td> --}}
                    @endif
               </tr>
            @endforeach
        
          </tbody>
      </table>
      
    </p>
</div>



@endsection