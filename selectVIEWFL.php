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
      if(isset($_POST["cname"]))
      {
          $cname = $_POST["cname"];
      }
      else{
        echo "No flight number input";
      }
      if(isset($_POST["aluname"]))
      {
          $aluname = $_POST["aluname"];
      }
      else{
        echo "No username input";
      }
          //echo "Lname: $name email: $email pnr: $pnr" .  "<br />";
      $con = mysqli_connect($dbhost, $user, $pass, $db);
      $sql = "SELECT flight.FLIGHT_NAME,flight.FLIGHT_NUMBER,flight.SOURCE,flight.DESTINATION,atc.SCHEDULED_TIME, atc.ACTUAL_TIME FROM flight LEFT JOIN atc on flight.FLIGHT_NUMBER=atc.FLIGHT_NUMBER LEFT JOIN airport on flight.FLIGHT_NUMBER=airport.FLIGHT_NUMBER WHERE  flight.SOURCE='$cname'";
      $result = mysqli_query($con, $sql);
      echo "<center><h1>FLIGHT DETAILS</h1><table border='1'>
            <tr>
            <th>FLIGHT NAME</th>
            <th>FLIGHT NUMBER</th>
            <th>SOURCE</th>
            <th>DESTINATION</th>
            <th>SCHEDULED TIME</th>
            <th>ACTUAL TIME</th>
            </tr>";
      while($rows = mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>". $rows['FLIGHT_NAME'] . "</td>";
          echo "<td>". $rows['FLIGHT_NUMBER'] . "</td>";
          echo "<td>" . $rows["SOURCE"]. "</td>";
          echo "<td>" . $rows["DESTINATION"]. "</td>";
          echo "<td>" . $rows["SCHEDULED_TIME"] . "</td>";
          echo "<td>" . $rows["ACTUAL_TIME"] . "</td>";
        }
        echo "</table></center>";
 ?>
</body>
</html>
