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
      
      if(isset($_POST["alpwd"]))
      {
          $alpwd = $_POST["alpwd"];
      }
      else{
        echo "No valid password input";
      }
      if(isset($_POST["flno"]))
      {
          $alpwd = $_POST["flno"];
      }
      else{
        echo "No valid flight input";
      }

      $con = mysqli_connect($dbhost, $user, $pass, $db);
      $sql = "DELETE from passenger WHERE PNR='$pnr'";
      if (mysqli_query($con, $sql)) {
         echo "Booking successfully cancelled";
      } else {
        echo "Booking not cancelled:" . mysqli_error($con);
      }
 ?>
</body>
</html>
