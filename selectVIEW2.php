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


      if(isset($_POST["alpwd"]))
      {
          $alpwd = $_POST["alpwd"];
      }
      else{
        echo "No valid password input";
      }
      if(isset($_POST["fname"]))
      {
          $fname = $_POST["fname"];
      }
      else{
        echo "No valid password input";
      }
      //echo "Lname: $name email: $email pnr: $pnr" .  "<br />";
      $con = mysqli_connect($dbhost, $user, $pass, $db);
      $sql = "SELECT passenger.PNR,passenger.FIRST_NAME,passenger.LAST_NAME,flight.FLIGHT_NAME,flight.FLIGHT_NUMBER FROM passenger LEFT JOIN flight on passenger.FLIGHT_NUMBER=flight.FLIGHT_NUMBER LEFT JOIN airlines ON passenger.FLIGHT_NUMBER=airlines.FLIGHT_NUMBER LEFT JOIN airport ON passenger.FLIGHT_NUMBER=airport.FLIGHT_NUMBER WHERE airport.MANAGER_ID='$alpwd' AND flight.FLIGHT_NAME='$fname'";
      $result = mysqli_query($con, $sql);
      echo "<center><h1>PASSENGER DETAILS</h1><table border='1'>
            <tr>
            <th>PNR</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>FLIGHT NAME</th>
            <th>FLIGHT NUMBER</th>
            </tr>";
      while($rows = mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>". $rows['PNR'] . "</td>";
          echo "<td>". $rows['FIRST_NAME'] . "</td>";
          echo "<td>" . $rows["LAST_NAME"]. "</td>";
          echo "<td>" . $rows["FLIGHT_NAME"]. "</td>";
          echo "<td>" . $rows["FLIGHT_NUMBER"] . "</td>";
        }
        echo "</table></center>";
 ?>
</body>
</html>
