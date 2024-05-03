<?php 
$con=mysqli_connect("localhost","root","","train");

if(isset($_GET['deleteid']))
{
    $deleteid=$_GET['deleteid'];
    $sql="delete from `admtrain` where sl_no=$deleteid";
    $result=mysqli_query($con,$sql);
    if($result)
    {
       header('location:admtrain1.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>