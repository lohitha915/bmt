<?php
$con = mysqli_connect("localhost", "root", "", "bus");
$query = "select * from `admbus`";
$result = mysqli_query($con, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="options.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        
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
                $sl_no = $row['sl_no'];
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
                <?php echo '
                                     <td><button class="btn btn-primary"><a href="updatebus.php?id=' . $sl_no . '" class="text-light">Update</a></button>
                                     <button class="btn btn-danger"><a href="deletebus.php?deleteid=' . $sl_no . '" class="text-light">Delete</a></button></td>
                                     </tr>';
                ?>


                <?php
            }
            ?>


        </tbody>
       
    </table>
    <div class="col-sm-10">
        <button type="submit" name="addbus" class="btn btn-primary" required><a href="admbus.php"
                class="text-light">Add Bus</button>
        </div>

        </div>

        </div>
       
</body>
</html>