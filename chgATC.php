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

      $nt = $_POST["nt"];
      $flno = $_POST["flno"];

      //echo "Lname: $name email: $email pnr: $pnr" .  "<br />";
      $con = mysqli_connect($dbhost, $user, $pass, $db);
      $sql = "UPDATE atc SET SCHEDULED_TIME='$nt', ACTUAL_TIME='$nt' WHERE FLIGHT_NUMBER='$flno'";
      $result = mysqli_query($con, $sql);
      if($result){
        echo "Succesfully changed";
      }
      else{
        echo "Not changed: " . mysqli_error($con);
      }
 ?>
 <form action="http://localhost/miniprojHome.php"><input type="SUBMIT" placeholder="HOME"></form>
</body>
</html>
