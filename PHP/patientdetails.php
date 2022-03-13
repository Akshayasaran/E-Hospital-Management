<html>
    <head>
        <title>Patient Details</title>
        <link rel="stylesheet" type="text/css" href="../CSS/MainPageStyle.css">
    </head>
    <body>
        <div class="container" style="text-align: left;">
            <b><font size = 6 face = "calibri">Patient Details</font></b><br><br>
            <?php
                include "config.php";

                $patientid = mysqli_real_escape_string($conn, $_POST['patientid']);
                $sql_query = "select * from appointments where emailid = '$patientid' limit 1";
                $result = mysqli_query($conn,$sql_query) or die("Failed");

                if(mysqli_num_rows($result)>0)
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "FirstName: ".$row['firstname']."<br>";
                        echo "MiddleName: ".$row['middlename']."<br>";
                        echo "LastName: ".$row['lastname']."<br>";
                        echo "Gender: ".$row['gender']."<br>";
                        echo "Address: ".$row['address']."<br>";
                        echo "City: ".$row['city']."<br>";
                        echo "State: ".$row['state']."<br>";
                        echo "Country: ".$row['country']."<br>";
                        echo "pincode: ".$row['pincode']."<br>";
                        echo "MobileNumber: ".$row['mobilenumber']."<br>";
                        echo "Phonenumber: ".$row['phonenumber']."<br>";
                        echo "Email ID: ".$row['emailid']."<br>";
                        echo "D.O.B: ".$row['dob']."<br>";
                        echo "Insurance Policy: ".$row['insur_policy']."<br>";
                        echo "Diagnosis: ".$row['diagnosis']."<br>";
                    }
                }
                else
                {
                    echo "0 result";
                }
            ?>
            <br><br>
            <a href="../HTML/MainPage.html"><input type="button" value="Go Back" ></a>
        </div>
    </body>
</html>