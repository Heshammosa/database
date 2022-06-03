<?php
require_once 'connection.php';
$query ="select*from customers ";
$result= mysqli_query($conn,$query);
while ($customers = mysqli_fetch_assoc($result)){
echo "<pre>";
print_r($customers);
echo "<pre>";

}




