<?php

 
$con=mysqli_connect("localhost","root","","account");
$insert=true;


if(!$con)
{
   die("connection error");
}


if(isset($_POST['signup']))
{
$insert=true;
$username=$_POST['username'];
$email=$_POST['email'];
$password1=$_POST['password1'];


$sql="INSERT INTO `admsignup` (`sl_no`,`username`, `email`, `password1`) VALUES ('','$username','$email','$password1')";
echo $sql;
$result1=mysqli_query($con,$sql);
if($result1)
{
header('location:admaftlgn.php');
 
}
else{
  echo mysqli_error($con);
}

}

else{
  $insert=false;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Sign Up Page</title>

<!--Bootsrap 4 CDN-->
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css
" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
crossorigin="anonymous">
<!--Fontawesome CDN-->
<link rel="stylesheet"
href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
integrity="sha384-
mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
crossorigin="anonymous">
<!--Custom styles-->
<link rel="stylesheet" type="text/css" href="csssign.css">
</head>
<body>
<div class="container">
<div class="d-flex justify-content-center h-100">
<div class="card">
<div class="card-header">
<h3>Sign Up</h3>
<div class="card-body">
<form method="post" action="admsignup.php">
<div class="input-group form-group">
<div class="input-group-prepend">

<span class="input-group-text"><i class="fas fa-
user"></i></span>

</div>
<input type="text" class="form-control"

placeholder="username" name="username">
</div>
<div class="input-group form-group">
<div class="input-group-prepend">

<span class="input-group-text"><i class="fas fa-
key"></i></span>
</div>
<input type="text" class="form-control"

placeholder="gmail/phone" name="email">
</div>
<div class="input-group form-group">
<div class="input-group-prepend">

<span class="input-group-text"><i class="fas fa-
key"></i></span>

</div>
<input type="password" class="form-control"

placeholder="password" name="password1">
</div>
<div class="row align-items-center remember">
<input type="checkbox">save
</div>
<div class="form-group">
<input type="submit" value="Sign Up" name="signup" class="btn float-right

login_btn">

</div>
</form>
</div>
<div class="card-footer">
<div class="d-flex justify-content-center links">
Have an account?<a href="admloginp.php">Login</a>
</div>
<div class="d-flex justify-content-center">

</div>
</div>
</div>
</div>
</div>
</body>
</html>