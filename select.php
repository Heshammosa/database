<?php
require_once 'connection.php';
if($_SERVER['REQUEST_METHOD']=='GET'){
    $query = "select * from customers";
    $result = mysqli_query($conn,$query);
    if (mysqli_num_rows($result)>0){
        $customers= mysqli_fetch_all($result,MYSQLI_ASSOC);
         $customersjson=json_encode ($customers);
         print_r($customersjson);
    
    }
}else{
    echo"not allowed";
    http_response_code(404);
}

