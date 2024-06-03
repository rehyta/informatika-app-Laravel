@extends('layout.admin')

@section ('content')

<form action="{{ url('/user-progress') }}" method="POST">
    @csrf
    <input type="hidden" name="course_id" value="{{ $course->id }}">
    <label for="progress">Progress:</label>
    <input type="number" name="progress" id="progress" min="0" max="100" required>
    <button type="submit">Save Progress</button>
</form>


@endsection