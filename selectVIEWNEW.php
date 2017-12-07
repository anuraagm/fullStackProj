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

      $pnr = $_POST["pnr"];
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $age = $_POST["age"];
      $gender = $_POST["gender"];
      $flno = $_POST["flno"];

      //echo "Lname: $name email: $email pnr: $pnr" .  "<br />";
      $con = mysqli_connect($dbhost, $user, $pass, $db);
      $sql = "INSERT INTO passenger (PNR,FIRST_NAME,LAST_NAME,AGE,GENDER,FLIGHT_NUMBER) VALUES('$pnr','$fname','$lname','$age','$gender','$flno')";
      $result = mysqli_query($con, $sql);
      if($result){
        echo "Succesfully added new booking";
      }
      else{
        echo "Booking not added: " . mysqli_error($con);
      }
 ?>
</body>
</html>
