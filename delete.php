<?php
require_once'connection.php';
if (isset($_GET['id'])){
    $orderNumber = $_GET['id'];
    $selectquery = "select*from orderDetails where orderNumber =$orderNumber";
    $result = mysqli_query ($conn,$selectquery);
    if(mysqli_num_rows($result)>0){
        $query = "delete from orderDetails where orderNumber = $orderNumber";
        $result2= mysqli_query($conn,$query);
        if($result2){
            echo "data deleted";
        }else{
            echo"error";
        }
    }else{
        echo"no data";
    }
}else{
    echo "try again";
}