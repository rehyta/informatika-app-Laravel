@extends('layout.main')

@section ('container')
<h2 class="text-center m-3">Daftar Isi</h2>

@php
    $daftarIsi = [
    'Perkenalan bahasa pemrograman' => [
        'Materi' => '/course-1/materi',
    ],
    'struktur dasar C++' => [
        'Materi' => '/course-2/materi',
        'Live Code' => '/course-2/livecode',
    ],
    'Variable dan Tipe Data' => [
        'Materi' => '/course-3/materi',
        'Live Code' => '/course-3/livecode',
    ],
    'Operator dan Aritmatika' => [
        'Materi' => '/course-4/materi',
        'Live Code' => '/course-4/livecode',
    ],
    'Kondisi dan Percabangan' => [
        'Materi' => '/course-5/materi',
        'Live Code' => '/course-5/livecode',
    ],
    'mid test live code'=> '/mid-test',
];
@endphp

<div class="d-flex justify-content-center align-items-center">
    <ul class="daftarIsi list-group list-group-flush">
        @foreach ($daftarIsi as $judul=>$alamat)
        <li class="parent-heading list-group-item" data-index="{{ $loop->index}}">
            @if(is_array($alamat))
                <strong>{{ $judul }}</strong>
                <ul class="subDaftarIsi list-group list-group-flush" style="display: none;">
                    @foreach($alamat as $subJudul => $subAlamat)
                    <li class="sub-judul list-group-item">
                        <a id="sub-judul-{{ $loop->index }}" href="{{ url( $subAlamat ) }}">{{ $subJudul }}</a>
                    </li>
                @endforeach
                </ul>
            @else
                <a href="{{ url($alamat) }}">{{ $judul }}</a>
            @endif
        </li>
        @endforeach
    </ul>
</div>

<script>
    $(document).ready(function() {
  $(".parent-heading").click(function(e) {
    var index = $(this).data("index");
    $(".subDaftarIsi").hide();
    $(".subDaftarIsi:eq(" + (index) + ")").show();
  });
});
</script>

@endsection