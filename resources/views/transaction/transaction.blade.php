@extends ('layouts.master')
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style>
        #form{width:500px}
    </style>
</head>
@section('title')
Transaction
@endsection
@section('content')
<h3>Create transaction</h3>
<form method="post" action="transaction" id="form">
{{ csrf_field() }}
    <div class="form-group">
        <label for="formGroupExampleInput">Шилжүүлэгчийн данс</label>
        <input type="text" name="transaction_from" class="form-control">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Хүлээн авагчийн данс</label>
        <input type="text" name="transaction_to" class="form-control">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Гүйлгээний дүн</label>
        <input type="text" name="transaction_amount" class="form-control">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Гүйлгээний утга</label>
        <input type="text" name="transaction_description" class="form-control">
    </div>
    <input type="submit" value="Гүйлгээ хийх"class="btn btn-primary btn-lg btn-block">

</form>
@if(session('success'))
    <h3>{{ session('success')}}</h3>
@endif
@endsection
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>