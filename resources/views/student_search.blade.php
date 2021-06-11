@extends ('layouts.master')
@section('title')
Students
@endsection
@section('content')
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<h3>Оюутны кодоор хайх <small></small></h3>
<form action="search" method="post">
{{csrf_field()}}
    Оюутны код оруулах<br>
    <div class="row">
        <div class="col-sm-6">
            <input type="text" name="id" class="form-control">
        </div>
        <div class="col-sm-6">
            <button type="submit" class="btn btn-info">Хайх</button>
        </div>
    </div>    
</form>
<ul>
@if($errors->any())
 @foreach($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
@endif
</ul>
@if(isset($result))
    @foreach($result as $student)
    <label>{{ $student }}</label>
    @endforeach
@endif
@endsection