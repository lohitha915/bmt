<?php
session_start();
$con=mysqli_connect("localhost","root","","flights");

if(!$con)
{
    die("connection error");
}
if(isset($_POST['submit']))
{
    $fromloc=$_POST['fromloc'];
    $toloc=$_POST['toloc'];
    $ddate=$_POST['ddate'];
    $traveller=$_POST['traveller'];
    $class=$_POST['class'];


$sql="INSERT INTO `user` (`fromloc`, `toloc`, `ddate`, `traveller`, `class`) VALUES ('$fromloc', '$toloc', '$ddate', '$traveller', '$class')";
$insert=mysqli_query($con,$sql);
if($insert)
{
    $_SESSION['class']=$class;
    $_SESSION['traveller']=$traveller;
    $_SESSION['fromloc']=$fromloc;
    $_SESSION['toloc']=$toloc;
    $_SESSION['ddate']=$ddate;
    header('location:user2.php');
    
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Booking Form</title>
    <link rel="stylesheet" href="style.css">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body class="body">
    <div class="container"><!--container-->

        <form class="form-group mr-sm-20 p-sm-20" action="user1.php" method="post"><!--form-->
            <h1 class="display-6  text-center">Airline Booking Form</h1>

            <div id="form"><!--form-->
                <h3 class="text-white">Booking Details</h3>

            <div id="input"><!--input-->
           
                    <label for="inputEmail3" class="col-sm-2 col-form-label" required > </label>
                    <div class="col-sm-10">
                     <select name="fromloc" id="input-group"  style="background:black;">
                     <option value="" >From</option>
                      <option value="BENGALURU" >BENGALURU</option>
                      <option value ="DELHI">DELHI</option>
                      <option value  ="KOLKOTA">KOLKOTA</option>
                      <option value ="BHUBANESHWAR">BHUBANESHWAR</option>
                      <option value ="SRINAGAR">SRINAGAR</option>
                      <option value ="GANDINAGAR">GANDINAGAR</option>
                      <option value="CHENNAI">CHENNAI</option>
                      <option value ="THIRUVANTHAPURAM">THIRUVANTHAPURAM</option>
                      <option value="HYDERBAD">HYDERBAD</option>
                     </select>
                
                  </div>
                  
                    <label for="ToLoc" class="col-sm-2 col-form-label"  required></label>
                    <div class="col-sm-10">
                      <select name="toloc" id="input-group" style="background:black;">
                        <option required>To</option>
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
                <div class="col-sm-10">
                <input type="date" name="ddate" id="input-group" placeholder="Departure Date">
                </div>

               <div class="col-sm-10">
                <select  id="input-group" name="class" style="background: black;">
                    <option required>Preffered Seating</option>
                    <option value="Economy Class">Economy Class</option>
                    <option value="Business Class">Business Class</option>
                    <option value="First Class">First Class</option>
                </select>
            </div>
                </div><!--input-->
        <div class="col-sm-10">
                <div id="input2"><!--input2-->
                    <input type="number" name="traveller" id="input-group" placeholder="Traveller">  </div>
                </div><!--input2-->
                <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-warning text-white">Search flights</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div><!--form-->
        </div>

        </form><!--form-->

    </div><!--container-->

</body>
</html>