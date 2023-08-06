<?php

include'connect.php';
if(isset($_GET['deleteweb'])){
    $order_no=$_GET['deleteweb'];

    $sql="delete from `product` where order_no='$order_no'";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "deleted successfully";
        header('Location:history.php');
    }else{
        die(mysqli_error($con));
    }
}

?>
