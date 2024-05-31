@extends('layout.course')

@section('instruction')
<h2 class="center m-2">{{ $title }}</h2>
{!! $soal !!}



@endsection


@section('code box')

@include('partials.compiler')



@endsection