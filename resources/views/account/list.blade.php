@extends ('layouts.master')
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
@section('title')
Accounts
@endsection
@section('content')
<h3>Бүх дансны мэдээлэл</h3>
<table class="table">
<thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Дансны дугаар</th>
      <th scope="col">Дансны нэр</th>
      <th scope="col">Дансны үлдэгдэл</th>
    </tr>
</thread>
<tbody>
@foreach($accounts as $account)
    <tr>
        <td>{{ $account-> id}}</td>
        <td><a href="{{url('account')}}/{{$account-> account_number}}">{{ $account-> account_number}}</a></td>
        <td>{{ $account-> account_name}}</td>
        <td>{{ $account-> account_balance}}</td>
    </tr>
</tbody>
@endforeach
</table>
@endsection