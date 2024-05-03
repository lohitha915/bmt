<?php
session_start();
$con=mysqli_connect("localhost","root","","account");
$search=true;

if(!$con)
{
   die("connection error");
}
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password1=$_POST['password1'];
$sql="SELECT * FROM `signup` WHERE username='$username' and  password1='$password1'";
$result=mysqli_query($con,$sql);
$total=mysqli_num_rows($result);
if($total==1)
{
    $_SESSION['username']=$username;
    header('location:aftlgn.php');
    $search=true;
}
else{
  $search=false;
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>

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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--Custom styles-->
<link rel="stylesheet" type="text/css" href="csslogin.css">
<style type="text/css">
    h6
    {
        color:red;
    }
    </style>
</head>
<body>
<div class="container">
<div class="d-flex justify-content-center h-100">
<div class="card">
<div class="card-header">
<h3>Sign In</h3>
<?php
if($search==false)
{
    echo'<h6>Invalid UserName or Password</h6>';
}
?>
<div class="card-body">
<form  action="loginp.php" method="post">
<div class="input-group form-group">
<div class="input-group-prepend">

<span class="input-group-text"><i class="fas fa-
user"></i></span>

</div>
<input type="text" class="form-control"

placeholder="username" name="username" required>
</div>
<div class="input-group form-group">
<div class="input-group-prepend">

<span class="input-group-text"><i class="fas fa-
key"></i></span>

</div>
<input type="password" class="form-control"

placeholder="password" name="password1" required>
</div>
<div class="row align-items-center remember">
<input type="checkbox">save
</div>
<div class="form-group">
<input type="submit" value="login" name ="login" class="btn float-right login_btn">

</div>
</form>
</div>
<div class="card-footer">
<div class="d-flex justify-content-center links">
Don't have an account?<a href="signup.php">Sign Up</a>
</div>
<div class="d-flex justify-content-center">

</div>
</div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>