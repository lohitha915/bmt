<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "bus");

if (!$con) {
    die("connection error");
}




$query = "SELECT * FROM `admbus` WHERE `departure`= '$_SESSION[fromloc]' and `destination`= '$_SESSION[toloc]' and `ddate`='$_SESSION[ddate]'";

$result = mysqli_query($con, $query);

if (mysqli_affected_rows($con) == 0) {
    echo "<div class='alert alert-danger m-0' role='alert'>
     Sorry!! No bus Found
  </div>";
    $insert = false;
} else {
    $result = mysqli_query($con, $query);
    $insert = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: white;
        }
        
        .card
        {
         border:1px solid;
        }
         
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Book My Trip</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admaftlgn.php">Login Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">LogOut</a>
        </li>
    
    </div>
  </div>
</nav>
    <?php
    if ($insert == true) {
        ?>
        <div class="card m-5">
        <div class="card-header text-center">
            <h1>BUS</h1>
        </div>

        <div class="card-body m-lg-2 m-md-1 m-sm-1 p-lg-2">
            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">BUSNo</th>
                        <th scope="col">BUS NAME</th>
                        <th scope="col">DEPARTURE</th>
                        <th scope="col">DESTINATION</th>
                        <th scope="col">DEPARTURE DATE</th>
                        <th scope="col">DEPARTURE TIME</th>
                        <th scope="col">SEATS</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">OPERATIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php


                    while ($row = mysqli_fetch_assoc($result)) {
                        $busno = $row['busno'];
                        $bus_name = $row['bus_name'];
                        $departure = $row['departure'];
                        $destination = $row['destination'];
                        $ddate = $row['ddate'];
                        $dtime = $row['dtime'];
                        $seats = $row['seats'];
                        $price = $row['price'];

                        ?>


                        <td>
                            <?php echo $busno ?>
                        </td>
                        <td>
                            <?php echo $bus_name ?>
                        </td>
                        <td>
                            <?php echo $departure ?>
                        </td>
                        <td>
                            <?php echo $destination ?>
                        </td>
                        <td>
                            <?php echo $ddate ?>
                        </td>
                        <td>
                            <?php echo $dtime ?>
                        </td>
                        <td>
                            <?php echo $seats ?>
                        </td>
                        <td>
                            <?php echo $price ?>
                        </td>


                        <?php
                        echo '<td><button type="submit" name="booknow"class="btn btn-primary"><a href="detailsbus.php" class="text-light">Book Now</a></button></tr>';
                    }
                    $_SESSION['busno'] = $busno;
                    $_SESSION['bus_name'] = $bus_name;
                    $_SESSION['dtime'] = $dtime;
                    $_SESSION['price'] = $price;

                    ?>





                </tbody>

            </table>
                </div>
                </div>


            <?php





    }
    ?>





</body>

</html>