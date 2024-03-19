@extends('layout.main')

@section ('container')
<h2 class="text-center m-3">Daftar Isi</h2>

<div class="d-flex justify-content-center align-items-center">
    <ul class="daftarIsi list-group list-group-flush">
        @foreach ($coursesData as $item)
            @if(is_array($item))
                @foreach ($item as $subItem)
                    <li>{{ $subItem }}</li>
                @endforeach
            @else
                <li class="parent-heading list-group-item" data-index="{{ $loop->index}}">
                    <a href="{{ url($item->slug) }}">{{ $item->title }}</a>
                </li>
            @endif
        @endforeach
    </ul>
   

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