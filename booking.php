<?php
session_start();
$con=mysqli_connect("localhost","root","","flights");
if(!$con)
{
   die("connection error");
}
$price= $_SESSION['price']*$_SESSION['traveller'];


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Days+One&family=Domine:wght@400;500;600;700&family=Fasthand&family=Kanit:ital,wght@0,600;1,600&family=Lilita+One&family=Pacifico&family=Poppins:ital,wght@0,300;1,200&family=Satisfy&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>booking page</title>
    <style>
h4
{
  font-family: 'Kanit', sans-serif;
}
h6
{ font-family: 'Kanit', sans-serif;
  font-size:1rem;
}
.card
{
  border:2px double;
 
}
body
{
  background-color: black;
}
*
{
    margin:0px;
    padding:0px;
}

    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Book My Trip</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">LogOut</a>
        </li>
    
    </div>
  </div>
</nav>
   <div class="container m-5 p-5">
   <div class="card">
   <div class="card-header">
    <h1>E-TICKET</h1>
  </div>
  <div class="card-body row row-cols-2">
  <?php 

  echo"<div class='col '><h4> FLIGHT NUMBER</h4><h6>$_SESSION[flno]</h6></div>";
  echo"<div class='col '><h4> FLIGHT NAME</h4><h6>$_SESSION[flight_name]</h6></div>";
  echo"<div class='col '><h4> DEPARTURE</h4><h6>$_SESSION[fromloc]</h6></div>";
  echo"<div class='col '><h4>  DESTINATION</h4><h6>$_SESSION[toloc]</h6></div>";
  echo"<div class='col '><h4> DEPARTURE DATE</h4><h6>$_SESSION[ddate]</h6></div>";
  echo"<div class='col '><h4> DEPARTURE TIME</h4><h6>$_SESSION[dtime]</h6></div>";
  echo"<div class='col '><h4> CLASS</h4><h6>$_SESSION[class]</h6></div>";
  echo"<div class='col '><h4> TOTAL FAIR</h4><h6>$price</h6></div>";


  ?>
  </div>
</div>
<div class="but">
<button type="button" class="btn btn-warning"><a href="destroy.php" class="text-light">OK</button>
</div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>