@extends ('layouts.master')
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
@section('title')
Accounts
@endsection
@section('content')
<h3>Бүх гүйлгээ</h3>
<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Хэнээс</th>
      <th scope="col">Хэнд</th>
      <th scope="col">Гүйлгээний дүн</th>
      <th scope="col">Гүйлгээний утга</th>
    </tr>
</thread>
<tbody>
@foreach($transactions as $transaction)
    <tr>
        <td>{{ $transaction-> id}}</td>
        <td>{{ $transaction-> transaction_from}}</a></td>
        <td>{{ $transaction-> transaction_to}}</td>
        <td>{{ $transaction-> transaction_amount}}</td>
        <td>{{ $transaction-> transaction_description}}</td>
    </tr>
</tbody>
@endforeach
</table>
@endsection