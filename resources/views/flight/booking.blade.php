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
Booking
@endsection
@section('content')
<h3>Booking</h3>
<form method="post" action="booking" id="form">
{{ csrf_field() }}
    <div class="form-group">
        <label for="formGroupExampleInput2">Нислэгийн дугаар</label>
        <input type="text" name="flightNumber" class="form-control"  value={{$id}}>

        <label for="formGroupExampleInput2">Төрсөн огноо</label>
        <input  class="form-control" type="text" placeholder="Төрсөн огноо оруулах"  id="example1"  name="passengerBirth">
        
    </div>
    <input name="flight_number" type="hidden" value={{$id}}>
    <div class="form-group">
        <label for="formGroupExampleInput2">Зорчигчийн овог нэр</label>
        <input type="text" name="passengerName" class="form-control">
    </div>
    <input type="submit" value="Нислэг хайх"class="btn btn-primary btn-lg btn-block">

</form>
@if(isset($success))
                <h3 class="text-success">{{$success}}</h3>
                @endif
                @if(isset($numbers))
                <h3 class="text-success"> Захиалгын дугаар {{$numbers}}</h3>
                @endif
<script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
        </script>

@endsection
