<?php 
$con=mysqli_connect("localhost","root","","bus");

if(isset($_GET['deleteid']))
{
    $deleteid=$_GET['deleteid'];
    $sql="delete from `admbus` where sl_no=$deleteid";
    $result=mysqli_query($con,$sql);
    if($result)
    {
       header('location:admbus1.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>