<?php

 
$con=mysqli_connect("localhost","root","","bus");
$updateid=$_GET['id'];
$sql1="SELECT * FROM `admbus` WHERE sl_no=$updateid";
$search=mysqli_query($con,$sql1);
$row=mysqli_fetch_assoc($search);
$busno=$row['busno'];
$bus_name=$row['bus_name'];
$departure=$row['departure'];
$destination=$row['destination'];
$ddate=$row['ddate'];
$dtime=$row['dtime'];
$seats=$row['seats'];
$price=$row['price'];

if(isset($_POST['updatebus']))
{
$flno=$_POST['busno'];
$flight_name=$_POST['bus_name'];
$departure=$_POST['departure'];
$destination=$_POST['destination'];
$ddate=$_POST['ddate'];
$dtime=$_POST['dtime'];
$seats=$_POST['seats'];
$price=$_POST['price'];
$sql="UPDATE `admbus` set `busno`='$busno', `bus_name`='$bus_name', `departure`='$departure' ,`destination`='$destination',`ddate`='$ddate',`dtime`='$dtime',`seats`='$seats',`price`='$price'  where `sl_no`='$updateid'";
$result=mysqli_query($con,$sql);
echo $result;

if($result)
{
  header('location:admbus1.php');
}
else{
  die(mysqli_error($con));
}
}


?>


  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Days+One&family=Domine:wght@400;500;600;700&family=Fasthand&family=Kanit:ital,wght@0,600;1,600&family=Lilita+One&family=Pacifico&family=Poppins:ital,wght@0,300;1,200&family=Satisfy&display=swap" rel="stylesheet">
</head><!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <style>
    
  @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Days+One&family=Domine:wght@400;500;600;700&family=Lilita+One&family=Poppins:ital,wght@0,300;1,200&family=Satisfy&display=swap');


    #form {
      opacity: 0.7;
      border: 2px solid #E4D0D0;
      border-radius: 2%;

    }

    body {
      width:100%;
      background-repeat: no-repeat;
      background-size:cover;
      background-image:url("https://images.unsplash.com/photo-1586348943529-beaae6c28db9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1915&q=80");
    }

    .text1 {
      font-family: 'Domine', serif;
   
    font-size: smaller;
    }

    .text2 {
      font-family: 'Domine', serif;
      
    }
    
    h1
    {
      font-size:4rem;
      font-family: 'Kanit', sans-serif;
      color:black;
    }
    p
    {
     font-size:1.7rem;
     font-family: 'Fasthand', cursive;
     text-align:justify;
     color:black;
    }
  </style>
<div class="row  row-cols-md-1 row-cols-lg-2">
 
  <div class="box2 mt-5 text-center" >
  <h1>Adventures are the best way to learn</h1>
  <p class="pt-2 px-2 pt-md-5 px-md-5">Planning a trip is an exciting part of your new upcoming travel adventure.It’s not for everyone as some swear by only booking a flight ticket. Nevertheless, when planning a trip, there’s a lot to think about, like getting a visa, your vaccinations, and figuring out an itinerary. It can be stressful and time-consuming; however, by following these 7 tips on how to plan a trip, you’ll be on your stress-free holiday before you know it!.Budgeting

  </p>
</div>
  <form method="post">
    <div id="form" class="form m-auto m-md-5 p-md-5 bg-dark">
      <h1 class="display-6 text-center text-white">
        <div class="text2">Bus</div>
      </h1>
      <div class="row mb-3 text-white">
        <label for="flno" class="col-sm-2 col-form-label" placeholder="busno" >
          <div class="text1">Bus No</div>
        </label>
        <div class="col-sm-10">
          <input type="number" name='busno' class="form-control" id="flno" value="<?php echo $busno?>" required>
        </div>
      </div>
      <div class="row mb-3 text-white">
        <label for="flname" class="col-sm-2 col-form-label"  required>
          <div class="text1">Bus Name</div>
        </label>
        <div class="col-sm-10">
          <input type="text" name='bus_name' class="form-control" value="<?php echo $bus_name?>"required>
        </div>
      </div>
      <div class="row  row-cols-md-2 row-cols-1 ml-md-3 pl-md-3">
        <div class="row mb-3 text col">
          <div class=" col-1 col-xs-3 col-sm-4 col-md-6 col-lg-8">
            <select name='departure' class="form-select" value="<?php echo $departure ?>" aria-label="Default select example">
            
              <option selected>From</option>
              <option value="BENGALURU">BENGALURU</option>
              <option value="DELHI">DELHI</option>
              <option value="KOLKOTA">KOLKOTA</option>
              <option value="BHUBANESHWAR">BHUBANESHWAR</option>
              <option value="SRINAGAR">SRINAGAR</option>
              <option value="GANDINAGAR">GANDINAGAR</option>
              <option value="CHENNAI">CHENNAI</option>
              <option value="THIRUVANTHAPURAM">THIRUVANTHAPURAM</option>
              <option value="HYDERBAD">HYDERBAD</option>
            </select>
          
          </div>
        </div>

        
          <div class="row mb-3 text-white  col">
            <div class="col-1 col-xs-3 col-sm-4 col-md-6 col-lg-8">
              <select name='destination' class="form-select" value="<?php echo $destination?>" aria-label="Default select example">
                <option selected>To</option>
                <option required value="DELHI">DELHI</option>
                <option required value="BENGALURU">BENGALURU</option>
                <option value="KOLKOTA">KOLKOTA</option>
                <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                <option value="SHIMLA">SHIMLA</option>
                <option value="DARGLING">DARGLING</option>
                <option value="KANYAKUMARI">KANYAKUMARI</option>
                <option value="KERALA">KERALA</option>
                <option value="HYDERBAD">HYDERBAD</option>
              </select>
            </div>
          </div>
        </div>
      <div class="row mb-3 text-white">
        <label for="ddate" class="col-sm-2 col-form-label">
          <div class="text1">Departure Date</div>
        </label>
        <div class="col-sm-10">
          <input type="date" name='ddate' class="form-control " id="date" placeholder="date" value="<?php echo $ddate?>" required>
        </div>
      </div>

      <div class="row mb-3 text-white">
        <label for="dtime" class="col-sm-2 col-form-label">
          <div class="text1">Departure Time</div>
        </label>
        <div class="col-sm-10">
          <input type="time" name='dtime' class="form-control" id="dtime" value="<?php echo $dtime?>" required>
        </div>
      </div>



      <div class="row mb-3 text-white">
        <label for="seats" class="col-sm-2 col-form-label">
          <div class="text1">Seats</div>
        </label>
        <div class="col-sm-10">
          <input type="number" name='seats' class="form-control" id="seats" value="<?php echo $seats ?>" required>
        </div>
      </div>

      <div class="row mb-3 text-white">
        <label for="price" class="col-sm-2 col-form-label">
          <div class="text1">Price</div>
        </label>
        <div class="col-sm-10">
          <input type="text" name='price' class="form-control" id="price" value="<?php echo $price?>" required>
        </div>
      </div>
   
      

      <button type="submit" class="btn btn-primary" name='updatebus'>Update Bus</button>




  </form>
</div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
