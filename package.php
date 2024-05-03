<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "package");
if (!$con) {
    die("connection error");
}

$query = "SELECT * FROM `packuser`";
$result=mysqli_query($con,$query);

$query1="SELECT * FROM  `packuserind`";
$result1=mysqli_query($con,$query1);


?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
    <title>Package</title>
    <style type="text/css">

        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,200&display=swap');

        body{
            font-family: 'Poppins', sans-serif;

        }

        header {
            width: 100%;
            height: 85vh;

        }

        header nav {
            width: 100%;
            height: :7%;

            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: black;
            border: 0.2rem solid #000;
            color:white;
        }

        header nav ul {
            list-style: none;
            display: flex;


        }

        header nav ul li {
            padding: 0.3rem 1.5rem;
        }

        header nav ul li a {
            text-decoration: none;
            color:white;
            font-size: 1.3rem;
            font-weight: 20rem;
            transition: .3s linear;

        }

        header nav ul li a:hover {
            color: orangered;
        }

        header .content::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url("https://images.unsplash.com/photo-1503756234508-e32369269deb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1935&q=80");
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.8;

            z-index: -1;
        }

        header .content {
            content: "";
            position: relative;
            width: 100%;
            height: 93.4%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
            text-align: center;

        }


        .card-text {
            text-align: justify;
            font-family: 'Kanit', sans-serif;
            color: black;
            font-size: 0.7rem;
            padding: .2 rem;
            line-height: .4rem;
        }
        .card-title{
            font-family: 'Poppins', sans-serif;
            color: black;
            font-size: 1vw;
            font-style:bold;
            
      
        }
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }


 
        



        .text {

            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 3vw;
            font-weight: bolder;
            width: 50%;
            height: 8%;
            background-color: black;
            color: white;
            margin-top: 5.0rem;
            margin-bottom: 5.0rem;
            margin-left: 25%;
          


         }
         

.card
{
    margin-top:2%;
    margin-bottom:2%;
    margin-right:2%;
    margin-left:2%;
    border:solid 1px;

}
.card-img-top
{
    width:100%;
    height:300px;
    object-fit:cover;
    border:solid 1px;
}



h6 {
            /* text-align: justify */;
            font-family: 'Roboto', sans-serif;
            color: white;
            font-size: 1.2vw;
     
            padding: 2.0rem;
            line-height: 1.5rem;
        }
     
    </style>
</head>

<body>
    <header>
        <nav>
            <h4>Book My Trip </h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About Us</a></li>
            </ul>
        </nav class="nav">
        <div class="content">
            <h1>
            Life is short, and the world is wide.
            </h1>
            <h2>
            The goal is to die with memories not dreams.
            </h2>
        </div>
    </header>
    <div class="text ">
       <div class="container-fluid text-center">
        <h1> Wonders of the world</h1>
    </div>
    <div class="container-fluid text-center">
       <h6>Explore the World</h6>
    </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-start g-3 p-3">
    <?php

    while($row= mysqli_fetch_assoc($result))
    {
        $pack_id=$row['pack_id'];
        $pack_name=$row['pack_name'];
        $price=$row['price'];
        $staytime=$row['staytime'];
       
    ?>
    <div class="col justify-items-center">
    <div class="card justify-self-center p-0">
    <div class="position-relative">
        <img src="<?php echo $row['img']; ?>"
            class="card-img-top img-fluid ratio ratio-16x9 " alt="...">
    </div>  
        <div class="card-body h-auto">
        <?php echo $row['pack_name'];?>
            <p class="card-text"><?php echo $price;?><br><br>
                                   <?php    echo $staytime;?></p>

            <?php echo '<button type="button" class="btn btn-dark"><a href="packbook.php?id=' . $pack_id . '" class="btn text-light">Book Now</a></button>'?>
        </div>
    </div>
    </div>

   
    <?php
    }
    ?>
    </div>
    <div class="text ">
       <div class="container-fluid text-center">
        <h1> Heritages of India</h1>
    </div>
    <div class="container-fluid text-center">
       <h6>Incredible India</h6>
    </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-start g-3 p-3">
    <?php

    while($row= mysqli_fetch_assoc($result1))
    {
        $pack_id=$row['pack_id'];
     
       
        $pack_name=$row['pack_name'];
        $price=$row['price'];
        $staytime=$row['staytime'];
       
    ?>
    <div class="col justify-items-center">
    <div class="card justify-self-center p-0">
    <div class="position-relative">
        <img src="<?php echo $row['img']; ?>"
            class="card-img-top img-fluid ratio ratio-16x9 " alt="...">
    </div>  
        <div class="card-body h-auto">
        <?php echo $row['pack_name'];?>
            <p class="card-text"><?php echo $price;?><br><br>
                                   <?php    echo $staytime;?></p>

            <?php echo '<button type="button" class="btn btn-dark"><a href="packbook.php?id=' . $pack_id . '" class="btn text-light">Book Now</a></button>'?>
        </div>
    </div>
    </div>

   
    <?php
    }
    ?>
    </div>
   

    
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>

  
