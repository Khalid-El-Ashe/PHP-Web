<?php
// i need to select the data from my database 
// $select = "select * from users";

// $select = "select * from users limit 1"; // i need to get just one limit 
$select = "select * from users order by rand() limit 1"; // i need to select one data اريد ان اجلب واحد من البيانات بشكل عشوائي

$data = mysqli_query($connection, $select);
$users = mysqli_fetch_all($data, MYSQLI_ASSOC);
?>
