<?php

include "config.php";

$emailid = mysqli_real_escape_string($conn, $_POST['emailid1']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


$sql_query = "select count(*) as cntUser from userdetails where emailid='".$emailid."' and password='".$password."'";
$result = mysqli_query($conn,$sql_query) or die( mysqli_error($conn));
$row = mysqli_fetch_array($result);
$count = $row['cntUser'];

if($count > 0){
    alertmsg("Login Success");
}else{
    alertmsg("User doesn't Exist");
}


?>

<html>
    <body>
        <a href="../HTML/MainPage.html"><input type="button" id="button1" value=""></a>
    </body>
    <script>
        document.getElementById('button1').click();
    </script>
</html>