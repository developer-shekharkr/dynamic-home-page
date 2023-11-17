<?php
include "connection.php";

if(isset($_POST['signup'])){
    $name=trim($_POST['fullname']);
    $email=trim($_POST['email']);
    $contact=trim($_POST['contact']);
    $pass=trim($_POST['pass']);

    $q="insert into users(fname, email, contact, pass)
    values('".$name."', '".$email."', '".$contact."', '".$pass."')";
    $sql=mysqli_query($con, $q);


    if($sql){
        echo "<script>alert('Registeration successfull.')</script>";
        // header("location:./login.php");
    }


    else{
        echo "Registration failed..!";
        echo "<br>".mysqli_error($con);
    }
}
?>