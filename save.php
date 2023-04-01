<!DOCTYPE html>
<html>
    <head>
        <title>Save Me</title>
        <style>
            body{background-color:black;
                background-image:url("https://stimg.cardekho.com/images/carexteriorimages/930x620/Lamborghini/Aventador/6721/Lamborghini-Aventador-SVJ/1621849426405/front-left-side-47.jpg?tr=w-375");
                background-repeat:no-repeat;
                background-size: cover;}
        </style>
    </head>
    <body>
        <h1>WELCOME TO THE SERVER</h1>
        <?php
            $Name=$_POST["name"];
            $Vehicleid=$_POST["vecid"];
            $Address=$_POST["add"];
            $Email_Id=$_POST["email"];
            $Contactno=$_POST["contact"];
            $Age=(int)$_POST["age"];
            $Date_of_buying=$_POST["date"];
            $Aadhar_card_no=$_POST["aadhno"];
            $conn=mysqli_connect("localhost","root","","vehicledatabase");
            if($conn==false){
                die("Couldn't Connect to the database<br><br>");
            }
            else{
                echo "Connected to Database<br><br>";
            }
            $quer="INSERT INTO detail values('$Name','$Vehicleid','$Address','$Email_Id',
            '$Contactno','$Age','$Date_of_buying','$Aadhar_card_no')";
            if(mysqli_query($conn,$quer)){
                echo"inserted succesfully|||";
            }
            else{
                echo"unable to insert|||".mysqli_error($conn);
            }
            mysqli_close($conn);
        ?>
    </body>
</html>