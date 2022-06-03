<?php
require_once'connection.php';
$name ='hesham';
$country = 'egypt';
$query = "insert into customers(`customerName`,`country`)
values('$name', '$country')"; 
$runquery = mysqli_query($conn,$query);
if($runquery){
    echo "data insert";
}else{
    echo"not insrt";
}
