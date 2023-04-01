<!DOCTYPE html>
<html>
    <title>CUSTOMER DETAIL</title>
    <head>
      <h1 style="color:black;text-align:center">YOUR DETAIL</h1>
       <style>
         img{height:100px;width:100px}
         p{text-align:center;}
         div{text-align:center;}
         body{background-color:darkcyan;background-image:url(https://c.ndtvimg.com/2022-06/9pd4f51o_car_120x90_17_June_22.jpg);
        background-repeat:no-repeat;
        background-size:cover;
        }
       </style>
    </head>
    <body>
          <p>
            <div>
            <?php
              $num=$_POST['number'];
              $conn=mysqli_connect("localhost","root","","vehicledatabase");
              if($conn==false)
              {
                die("Couldn't fetch the data !!!!<br><br>");
              }
              else
              {
                echo "<b>DATABASE CONNECTED  </b><br><br><br>";
              }
              $quer="SELECT * FROM detail where Vehicleid='$num'";
              $result=mysqli_query($conn,$quer);
             
              if(mysqli_num_rows($result)>0)
              {
                echo "<b>DETAIL IS AS FOLLOWS:</b><br><br><br><br><br> ";
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<b>Name:</b> ".$row["Name"]."<br><br>";
                    echo "<b>Vehicle Id:</b> ".$row["Vehicleid"]."<br><br>";
                    echo "<b> Address:</b> ".$row["Address"]."<br><br>";
                    echo "<b> Email id:</b> ".$row["Email_Id"]."<br><br>";
                    echo "<b> Age:</b> ".$row["Age"]."<br><br>";
                    echo "<b> Date of buying:</b> ".$row["Date_of_buying"]."<br><br>";
                    echo "<b> Aadhar card no:</b> ".$row["Aadhar_card_no"]."<br><br>";
                    echo "<b> Contact no:</b> ".$row["Contactno"]."<br><br><br><br><br>";
                    
                }
              }
              else
              {
                 echo "<b>SORRY NO DATA FOUND.</b>";
              }
            ?>
            </div>
            </p>
    </body>
</html>