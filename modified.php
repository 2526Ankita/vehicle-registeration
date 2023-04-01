<!DOCTYPE html>
<html>
    <head>
        <title>UPDATING</title>
        <style>
    body{background-image:url("https://www.adorama.com/alc/wp-content/uploads/2017/11/shutterstock_114802408.jpg");
    background-repeat:no-repeat;
    background-size:cover;
  }
  </style>
    </head>
    <body>
        <h1>MODIFYING DETAILS</h1>
        <?php
            $Name=$_POST["name"];
            $Address=$_POST["add"];
            $Email_Id=$_POST["email"];
            $Contactno1=$_POST["Contact1"];
            $Age1=(int)$_POST["Age1"];
            $vec=$_POST['vehic1'];
            $conn=mysqli_connect("localhost","root","","vehicledatabase");
            if($conn==false){
                die("Couldn't Connect to the database<br><br>");
            }
            else{
                echo "Connected to Database<br><br>";
            }
            $quer="update detail set Name='$Name',Address='$Address',Email_Id='$Email_Id',
            Contactno='$Contactno1',Age='$Age1'  where Vehicleid='$vec'";
         
            if (mysqli_query($conn, $quer)){
                echo "Record updated successfully";
            }else{
                echo "Error updating record: " . mysqli_error($conn);
            }
            mysqli_close($conn);

        ?>
    </body>
</html>