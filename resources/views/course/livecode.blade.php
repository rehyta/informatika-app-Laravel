@extends('layout.course')

@section('instruction')
<h5 class="center m-2"> Tugas {{ $title }}</h5>
{!! $soal !!}



@endsection


@section('code box')

@include('partials.compiler')



@endsection