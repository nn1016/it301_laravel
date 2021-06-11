@extends ('layouts.master')
@section('title')
Students
@endsection
@section('content')

<h1>Бүх оюутан</h1>

<ul>

@foreach($a as $student)
    <li><a href="student/{{ $student[0]}}">
    {{ $student[0]}}
    </li>
@endforeach
</ul>
@stop