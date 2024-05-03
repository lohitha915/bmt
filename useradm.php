<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Days+One&family=Domine:wght@400;500;600;700&family=Kanit:ital,wght@0,600;1,600&family=Lilita+One&family=Pacifico&family=Poppins:ital,wght@0,300;1,200&family=Satisfy&display=swap"
    rel="stylesheet">
  <title>useradmin</title>
</head>
<style type="text/css">
  .icons {

    align-items: center;
    justify-content: center;
    text-align: center;

  }

  .icon {
    background-color: white;
    border: 1px solid white;
    border-radius: 5%;


  }
  *
  {
    margin:0;
    padding:0;
    box-sizing: border-box;
    
  }
  body{
    background-image: url("https://images.unsplash.com/photo-1499678329028-101435549a4e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80");
    background-size: cover;
    background-repeat: no-repeat;
 
  }

  i:hover {
    color: #146C94;

  }

 

.box
  {
    background-color: black;
    opacity:0.6;

  }

  .text1 {
    font-family: 'Kanit', sans-serif;
    color: white;
  }
</style>

<body>


  <div class="icons row  row-cols">


 
    <div class="box col m-3 m-md-5 p-5">
      <div class="text1"> USER</div>
      <div class="icon m-2 m-lg-5"><i class="bi bi-people-fill fa-6x"></i> </div>
      <button type="button" class="btn btn-primary m-md-3 p-1"><a href="loginp.php" class="text-light">Login</a></button>
      <div class="text1">
        Already have an account?
        <a href="signup.php">Sign Up</a>
      </div>
      </div>
 
   
    <div class="box col m-2 m-md-5 p-5 ">
      <div class="text1"> ADMIN</div>
      <div class="icon m-2 m-lg-5"><i class="bi bi-person-fill-lock fa-6x"></i> </div>
      <button type="button " class="btn btn-primary m-md-3 p-1"><a href="admloginp.php" class="text-light"> Login</a></button>
      <div class="text1">
        Already have an account?
        <a href="admsignup.php">Sign Up</a>
      </div>
    </div>
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

</html>