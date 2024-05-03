<?php
$insert=false;
if (isset($_POST['create']))
{

  $server = "localhost";
  $username = "root";
  $password = "";
  $con = mysqli_connect($server, $username, $password);

  if (!$con) {
    die("connection to this database failed due to db" . mysqli_connect_error());
  }

  @$firstname = $_POST['firstname'];
  @$lastname = $_POST['lastname'];
  @$email = $_POST['email'];
  @$password1 = $_POST['password1'];
  @$address1 = $_POST['address1'];
  @$address2 = $_POST['address2'];
  @$city = $_POST['city'];

  $sql = "INSERT INTO `trip`.`createacc` (`first name`, `last name`, `email`, `password1`, `address1`, `address2`, `city`,`dt`) VALUES ( '$firstname', '$lastname', '$email', '$password1', '$address1', '$address2', '$city', current_timestamp());";

  if ($con->query($sql) == true) {
    echo "successfully inserted";
    $insert = true;
  } else {
    echo "ERROR : $sql <br> $con->error";
  }
  $con->close();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">
  </head>
  <body class="bg">
  <div class=bgimg>
    <h1>CREATE ACCOUNT</h1> 
   
   <form class="row g-3" action="createacc.php" method="post">
   <div class="row g-3">
  <div class="col">
    <input type="text" name="firstname "class="form-control" id="firstname" placeholder="First name" aria-label="First name" required>
  </div>
  <div class="col">
    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last name" aria-label="Last name" required>
  </div>
</div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="password1" class="form-control" id="password1" required>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" name="address1" class="form-control" id="address1" placeholder="1234 Main St" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" name="address2" class="form-control" id="address2" placeholder="Apartment, studio, or floor" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="city" required>
  </div>
  <div class="col-12">
    <button type="submit" id="register" name="create" class="btn btn-primary">sign in</button>
  </div>
</form>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
 <script type="text/javascript" >  
    $(function(){
      $('#register').click(function(e){
        var valid=this.form.checkValidity();
        if(valid){
          var firstname= $('#firstname').val();
          var lastname= $('#lastname').val();
          var email= $('#email').val();
          var password1= $('#password1').val();
          var address1= $('#address1').val();
          var address2= $('#address2').val();
          var city= $('#city').val();
          e.preventDefault();
          $.ajax({
            type:'POST',
            url:'process.php',
            data:{firstname:firstname,lastname:lastname,email:mail,password1:password1,address1:address1,address2:address2,city:city},

            success:function(data)
          {
            Swal.fire(
      {
        'title':'Account created',
        'text':'thank you',
        'type':'success'
      }
            )
          },


        error:function(data)
        {
          Swal.fire(
      {
        'title':'unable to create',
        'text':'thank you',
        'type':'error'
      }
    )
        }

      });[;]
  </script>
  </body>

  
</html>