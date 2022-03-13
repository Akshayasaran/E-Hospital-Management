<?php

include "config.php";

$username = mysqli_real_escape_string($conn, $_POST['username']);
$emailid = mysqli_real_escape_string($conn, $_POST['emailid']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$password1 = mysqli_real_escape_string($conn, $_POST['password1']);
$password2 = mysqli_real_escape_string($conn, $_POST['password2']);

$sql_query = "select count(*) as cntUser from userdetails where emailid='".$emailid."' and password='".$password1."'";
$result = mysqli_query($conn,$sql_query) or die( mysqli_error($conn));
$row = mysqli_fetch_array($result);
$count = $row['cntUser'];

if($count > 0)
{
    alertmsg("User already Exists");
}
else
{
    $sql_query = "insert into userdetails(username,emailid,gender,password) values('$username','$emailid','$gender','$password1')";
    if (mysqli_query($conn, $sql_query))
    {
        alertmsg("User Record inserted Successfully");
    }
    else
    {
        alertmsg("Error: ".mysqli_error($conn));
    }
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