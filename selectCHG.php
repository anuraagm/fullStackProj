<!DOCTYPE html>
<html>
<head>
  <title>Retrieval 1</title>
</head>
<body>
<?php
      $dbhost = 'localhost';
      $user = 'root';
      $pass = '';
      $db = 'dbmsmini';

      $cfn = $_POST["cfn"];
      $csrc = $_POST["csrc"];
      $cdest = $_POST["cdest"];
      $cfn = $_POST["cfn"];
      $cst = $_POST["cst"];
      $car = $_POST["car"];
      $nam = $_POST["nam"];
      //echo "Lname: $name email: $email pnr: $pnr" .  "<br />";
      $con = mysqli_connect($dbhost, $user, $pass, $db);
      $sql = "INSERT into flight (SOURCE,DESTINATION,FLIGHT_NAME,FLIGHT_NUMBER,START_DATE,ARRIVAL_DATE) VALUES('$csrc', '$cdest','$nam','$cfn','$cst','$car')";
      $result = mysqli_query($con, $sql);
      if($result){
        echo "Succesfully added new flight";
      }
      else{
        echo "Flight not added: " . mysqli_error($con);
      }
 ?>

 </body>
</html>
