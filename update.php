<?php
require_once 'connection.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $name = 'hesham';
    $selectquery= "select * from customers where customerNumber = $id";
    $result = mysqli_query($conn,$selectquery);
    if(mysqli_num_rows ($result)>0){

    $query = "update customers set customerName ='$name'where customerNmber=$id";
    $runquery = mysqli_query($conn,$query);
    if ($runquery){
        echo"data updated";
    }else {
        echo"not updata";
    }
    }
}else {
        echo "no data found";
    }
    