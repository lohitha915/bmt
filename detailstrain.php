<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "train");

if (!$con) {
    die("connection error");
}

if (isset($_POST['submit'])) 
{
    $traveller_name = $_POST['traveller_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone=$_POST['phone'];
     
    $sql = "INSERT INTO `traveller`(`traveller_id`,`traveller_name`,`email`,`age`,`phone`,`trainno`, `train_name`, `departure`, `destination`, `ddate`,`dtime`,`class`,`price`) VALUES ('','$traveller_name','$email','$age','$phone','$_SESSION[trainno]', '$_SESSION[train_name]', '$_SESSION[fromloc]', '$_SESSION[toloc]', '$_SESSION[ddate]','$_SESSION[dtime]','$_SESSION[class]','$_SESSION[price]')";
    $result = mysqli_query($con, $sql);
    $_SESSION['traveller_name']=$email;
  
   
    
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Days+One&family=Domine:wght@400;500;600;700&family=Fasthand&family=Kanit:ital,wght@0,600;1,600&family=Lilita+One&family=Pacifico&family=Poppins:ital,wght@0,300;1,200&family=Satisfy&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Traveller details</title>
<style>
.main
{
    background-color:black;
    opacity:0.7;
    width:50%;
  
}
.con
{ font-family: 'Kanit', sans-serif;
    font-size:3rem;
    color:white;  
}
body
{
    background-size:cover;
    background-repeat:no-repeat;
    display:flex;
    align-items:center;
    justify-content:center;
    background-image:url("https://images.unsplash.com/photo-1516738901171-8eb4fc13bd20?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80")
}
p
{
  
    font-family: 'Kanit', sans-serif;
}


</style>
   

</head>

<body>
  
    <div class="main m-2 p-2 m-lg-5 p-lg-5">
        <div class="con">
          BOOKING DETAILS
        </div>
    <div class="box1 ">
        
            <form method="post" action="detailstrain.php">

                <div class="mb-3 row">
                <div class="col-sm-10">
                    <label for="traveller" class="form-label text-light" ><p class="p-0 m-0">Name</p></label>
                   
                        <input type="text" class="form-control" name="traveller_name">
                        </div>   
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <label for="exampleFormControlInput1" class="form-label text-light"><p class="p-0 m-0">Email address<p></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                            placeholder="name@example.com">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <label for="age" class="form-label text-light"><p class="p-0 m-0">Age</p></label>
                        <input class="form-control" type="number" placeholder="21" name="age" required>
                    </div>
                    </div>
                    <div class="mb-3 row">
                    <div class="col-sm-10">
                        <label for="phone" class="form-label text-light"><p class="p-0 m-0">Phone No</p></label>
                        <input class="form-control" type="number" placeholder="9986678654" name="phone" required>
                    </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-10">
                       
                       <?php
                      echo'<button type="submit" class="btn btn-primary" name="submit"><a href="bookingtrain.php" class="text-light">Submit</a></button>';
                        ?>
                        </div>
                    </div>
           
           

            </form>
    
         </div>  

</body>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</html>