<?php

$dbServer = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "ehospital";

$conn = mysqli_connect($dbServer, $dbUserName, $dbPassword, $dbName);

if(!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

function alertmsg($msg){
    echo "<script>alert('$msg')</script>";
}

?>