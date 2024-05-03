<?php 
$con=mysqli_connect("localhost","root","","flights");

if(isset($_GET['deleteid']))
{
    $deleteid=$_GET['deleteid'];
    $sql="delete from `admin` where sl_no=$deleteid";
    $result=mysqli_query($con,$sql);
    if($result)
    {
       header('location:admin1.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>