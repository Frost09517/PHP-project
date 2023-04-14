<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "licence_data";
$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection){
    echo "Failure";
}else{
    echo"Success";
    $query= "insert into info(name,address,ctzno,gender,email) values('".$_POST['name']."','".$_POST['address']."','".$_POST['ctzno']."','".$_POST['gender']."','".$_POST['email']."')";
    if($connection->query($query)){
        echo "inserted";
    }else{
        echo "failed";
    }
}
?>