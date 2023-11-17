<?php
$server="localhost";
$user="root";
$password="";
$database="technnology";
$con=mysqli_connect($server, $user, $password, $database);
if(!$con){
    echo "connection failed";
echo "<br>".mysqli_connect_error();
}
?>