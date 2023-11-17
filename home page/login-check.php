<?php
if(isset($_POST['login'])){
    $uname=trim($_POST['username']);
    $ps=trim($_POST['pass']);
 include "connection.php";
    $q="select * from users where email ='". $uname."'";
    $sql=mysqli_query($con,$q);

    if($sql){

if(mysqli_fetch_array($sql) > 0){
$sql=mysqli_query($con, $q);

while($r=mysqli_fetch_array($sql)){
    $user=$r['email'];
    $p=$r['pass'];
}
if($uname==$user && $ps==$p)
{
    
    echo "<script>
    alert('SUCCESS');
    </script>";
    
}
else{
    echo "<script>
    alert('Invalid Password');
    </script>";
}
    }
    else{
        echo "<script>
    alert('Invalid UserName');
    </script>";
    }
}
}
else{
    echo "wrong button";
}
?>