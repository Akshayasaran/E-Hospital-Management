<?php

include "config.php";

$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$gender = mysqli_real_escape_string($conn, $_POST['gender1']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$country = mysqli_real_escape_string($conn, $_POST['country']);
$pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
$mobilenumber = mysqli_real_escape_string($conn, $_POST['mobilenumber']);
$phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
$emailid = mysqli_real_escape_string($conn, $_POST['emailid2']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$insur_policy = mysqli_real_escape_string($conn, $_POST['insur_policy']);
$diagnosis = mysqli_real_escape_string($conn, $_POST['textarea1']);
$pre1 = mysqli_real_escape_string($conn, $_POST['pre1']);
$pre2 = mysqli_real_escape_string($conn, $_POST['pre2']);

$sql_query = "select count(*) as cntUser from appointments where emailid='".$emailid."'";
$result = mysqli_query($conn,$sql_query) or die( mysqli_error($conn));
$row = mysqli_fetch_array($result);
$count = $row['cntUser'];

if($count > 0)
{
    alertmsg("Patient already Exists");
}
else
{
    $sql_query = "INSERT INTO `appointments` (`ID`, `firstname`, `middlename`, `lastname`, `gender`, `address`, `city`, `state`, `country`, `pincode`, `mobilenumber`, `phonenumber`, `emailid`, `dob`, `insur_policy`, `diagnosis`, `preference1`, `preference2`) VALUES (NULL, '$firstname', '$middlename', '$lastname', '$gender', '$address', '$city', '$state', '$country', '$pincode', '$mobilenumber', '$phonenumber', '$emailid', '$dob', '$insur_policy', '$diagnosis', '$pre1', '$pre2')";
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