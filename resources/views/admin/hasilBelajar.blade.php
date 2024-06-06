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

            @foreach ($progress->sortBy('id') as $item)
            <tr>
                 <td>{{ $loop->iteration }}</td>
                 <td>{{ $item->name }}</td>
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