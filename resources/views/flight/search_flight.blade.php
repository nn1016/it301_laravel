@extends ('layouts.master')
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> </head>
    
    <style>
        #form{width:500px}
    </style>
    
</head>
@section('title')
Flight
@endsection
@section('content')
<h3>Search flight</h3>
<form method="post" action="search" id="form">
@csrf
{{ csrf_field() }}
    <div class="form-group">
        <label for="formGroupExampleInput">Хаанаас :</label>
        <select class="form-control" name="departureAirport" value="UB">
                        <option value="ULN">ULN</option>
                        <option value="NY">NY</option>
                        <option value="KOR">KOR</option>
        </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Хаашаа :</label>
        <!--<input type="text" name="flight_where" class="form-control">-->
        <select class="form-control" name="arrivelAirport" value="UB">
                        <option value="NY">NY</option>
                        <option value="ULN">ULN</option>
                        <option value="MSW">MSW</option>
        </select>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Нисэх өдөр :</label>
        <input  class="form-control" type="text" placeholder="Нисэх өдрөө сонгоно уу"  id="example1"  name="departureDate">
        
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Хүний тоо</label>
        <input type="text" name="availableSeat" class="form-control">
    </div>
    <input type="submit" value="Нислэг хайх"class="btn btn-primary btn-lg btn-block">

</form>
    <script type="text/javascript">
            $(document).ready(function () {
                $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                });  
            });
        </script>

    @if(Session::get('flights')) 
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Хаанаас </th>
            <th scope="col">Хаашаа </th>
            <th scope="col">Нисэх өдөр</th>
            <th scope="col"></th>
        </tr>
        </thead>
        @foreach(Session::get('flights') as $flight)
        <tbody>
            <tr>
            <td>{{$flight['flightNumber']}}</td>
            <td>{{$flight['departureAirport']}}</td>
            <td>{{$flight['arrivelAirport']}}</td>
            <td>{{$flight['departureDate']}}</td>
            <td><a href="booking/{{$flight['flightNumber']}}">Захиалах </td>
            </tr>
        </tbody>
    @endforeach
    @endif
    </table>
    @if(Session::get('error'))
                <h3 class="text-danger">{{Session::get('error')}} JJJJJJJJ</h3>
                @endif
@endsection
