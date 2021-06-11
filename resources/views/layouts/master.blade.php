<html>
    <head>
        <title>Laravel Lab @yield('Student')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('/css/sidebar.css') }}">     
<style>
#wrapper {
    overflow-x: hidden;
 }
#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}
#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}
#sidebar-wrapper .list-group {
  width: 15rem;
}
#page-content-wrapper {
  min-width: 100vw;
}
@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }
  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }
  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
  #lab{color:white;}
  p{margin-left:1250px;color:white;}
  .content{
      background-color:#EEEEEE;
      margin-top: 2rem;
      margin-left: -2.5rem;
      width : 1200px;
      height:auto;
      padding : 10px;
      -webkit-transition: margin .25s ease-out;
    }
    #masterLbl1{
        font-family:Tahoma, sans-serif;
        font-size:23px;
        margin-left:-30px;
        color:gray;
        padding-right:54rem;
    }
    h3{font-family:Tahoma, sans-serif;}
}
</style>
    </head>
    <body>
    <nav class="navbar navbar-dark bg-dark">
        <img src="/menu2.png" alt=" Icon" width="30" height="30">
        <p>Сайн байна уу</p>
        <img src="/icon-user2.png" alt=" Icon" width="30" height="30">
    </nav>
  <div class="d-flex" id="wrapper">
<!-- Sidebar -->
<div class="bg-dark border-right" id="sidebar-wrapper">
  <div class="sidebar-heading" id="lab">Lab 5 </div>
  <div class="list-group list-group-flush">
                <a href="/student" id="btn" class="list-group-item list-group-item-action bg-light">Students</a>
                <a href="/search" id="btn" class="list-group-item list-group-item-action bg-light">Search</a>
  </div>
  <div class="sidebar-heading" id="lab">Lab 6 </div>
  <div class="list-group list-group-flush">
                <a href="/account" id="btn" class="list-group-item list-group-item-action bg-light">Accounts</a>
                <a href="/transaction" id="btn" class="list-group-item list-group-item-action bg-light">Transaction</a>
  </div>
  <div class="sidebar-heading" id="lab">Lab 7 </div>
  <div class="list-group list-group-flush">
                <a href="/flight/search" id="btn" class="list-group-item list-group-item-action bg-light">Search flight</a>
  </div>
</div>

        <div class="container">
            <label id="masterLbl1">@yield('title')</label>
            Өнөөдөр 
            <?php
            echo(date("Y-m-d",time()));
            ?>
            <div class="content">
                 @yield('content')
            </div>
        </div>
        
    </body>
</html>