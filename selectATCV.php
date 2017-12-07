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

      if(isset($_POST["aluname"]))
      {
          $aluname = $_POST["aluname"];
      }
      else{
        echo "No username input";
      }
      if(isset($_POST["alpwd"]))
      {
          $alpwd = $_POST["alpwd"];
      }
      else{
        echo "No valid password input";
      }

      //echo "Lname: $name email: $email pnr: $pnr" .  "<br />";
      $con = mysqli_connect($dbhost, $user, $pass, $db);
      $sql = "SELECT atc.FLIGHT_NAME, atc.FLIGHT_NUMBER, atc.SCHEDULED_TIME, atc.ACTUAL_TIME, flight.SOURCE, flight.DESTINATION FROM atc LEFT JOIN flight ON atc.FLIGHT_NUMBER=flight.FLIGHT_NUMBER WHERE flight.SOURCE='$aluname'";
      $result = mysqli_query($con, $sql);
      echo "<center><h1>FLIGHT DETAILS</h1><table border='1'>
            <tr>
            <th>FLIGHT NAME</th>
            <th>FLIGHT NUMBER</th>
            <th>SCHEDULED TIME</th>
            <th>ACTUAL TIME</th>
            <th>SOURCE</th>
            <th>DESTINATION</th>
            </tr>";
      while($rows = mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>". $rows['FLIGHT_NAME'] . "</td>";
          echo "<td>". $rows['FLIGHT_NUMBER'] . "</td>";
          echo "<td>" . $rows["SCHEDULED_TIME"]. "</td>";
          echo "<td>" . $rows["ACTUAL_TIME"]. "</td>";
          echo "<td>" . $rows["SOURCE"] . "</td>";
          echo "<td>" . $rows["DESTINATION"] . "</td>";
        }
        echo "</table></center>";
 ?>
</body>
</html>
