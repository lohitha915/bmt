<?php 
$_SESSION
$con = mysqli_connect("localhost", "root", "", "package")
if (!$con) {
    die("connection error");
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>package booking</title>
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
    color:white;
}


</style>
   
  </head>
  <body>
   

  <div class=" main col m-2 p-2 m-lg-5 p-lg-5">
  <div class="con ">
          BOOKING DETAILS
        </div>
    <div class="box1 ">
        
            <form method="post" action="packbook.php">

                <div class="mb-3 row">
                <div class="col-sm-10">
                    <label for="traveller" class="col-sm-2 col-form-label" ><p class="p-0 m-0">Name</p></label>
                   
                        <input type="text" class="form-control" name="traveller_name">
                        </div>   
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <label for="exampleFormControlInput1" class="form-label"><p class="p-0 m-0">Email address</p></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                            placeholder="name@example.com">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <label for="age" class="form-label"><p class="p-0 m-0">Age</p></label>
                        <input class="form-control" type="number" placeholder="21" name="age" required>
                    </div>
                    </div>
                    <div class="mb-3 row">
                    <div class="col-sm-10">
                        <label for="phone" class="form-label"><p class="p-0 m-0">Phone No</p></label>
                        <input class="form-control" type="number" placeholder="8988766787" name="phone" required>
                    </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-10">
                       
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                           
                        </div>
                    </div>
           
           

            </form>
    
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
<?php

$con = mysqli_connect("localhost", "root", "", "package");
if (!$con) {
    die("connection error");
}

    if (isset($_POST['submit'])) 
    {
        $traveller_name = $_POST['traveller_name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $phone=$_POST['phone'];
        $pack_id=$_GET['id'];
      

        $query2="INSERT INTO `traveller`(`traveller_id`,`traveller_name`,`email`,`age`,`phone`,`pack_id`, `pack_name`, `price`, `stay_time`) VALUES ('','$traveller_name','$email','$age','$phone','$pack_id', '$pack_name', '$price', '$stay_time')";
        $result2=mysqli_query($con,$query2);
       
        if($result2)
        { 
          ?>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
         <script>
          swal({
  title: "Booking Confirmed",
  text: "Thank You!!Happy Holiday",
  icon: "success",
});
        </script>

          <?php
         
        }
          
}



?>