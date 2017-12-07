<!DOCTYPE html>
<html>
<head>
  <title>Retrieval 1</title>
  <style>
  table{
      border-style:solid;
      border-width:2px;
      border-color:rgb(0, 35, 86);
  }
  </style>
</head>
<body>
<?php
      $dbhost = 'localhost';
      $user = 'root';
      $pass = '';
      $db = 'dbmsmini';

      $name = $_POST["lname"];
      $email = $_POST["email"];
      $pnr = $_POST["pnr"];

      //echo "Lname: $name email: $email pnr: $pnr" .  "<br />";
      $con = mysqli_connect($dbhost, $user, $pass, $db);
      $sql = "SELECT passenger.PNR,passenger.FIRST_NAME,passenger.LAST_NAME,passenger.GENDER,flight.SOURCE,flight.DESTINATION,flight.FLIGHT_NAME,flight.FLIGHT_NUMBER,flight.START_DATE,flight.ARRIVAL_DATE FROM passenger JOIN flight on passenger.FLIGHT_NUMBER=flight.FLIGHT_NUMBER AND LAST_NAME = '$name' AND PNR = '$pnr'";
      $result = mysqli_query($con, $sql);
      echo "<center><h1>FLIGHT DETAILS</h1><table border='1'>
            <tr>
            <th>PNR</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>GENDER</th>
            <th>SOURCE</th>
            <th>DESTINATION</th>
            <th>FLIGHT NAME</th>
            <th>FLIGHT NUMBER</th>
            <th>START</th>
            <th>END</th>
            </tr>";
      while($rows = mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>". $rows['PNR'] . "</td>";
          echo "<td>" . $rows["FIRST_NAME"]. "</td>";
          echo "<td>" . $rows["LAST_NAME"]. "</td>";
          echo "<td>" . $rows["GENDER"]. "</td>";
          echo "<td>" . $rows["SOURCE"]. "</td>";
          echo "<td>" . $rows["DESTINATION"]. "</td>";
          echo "<td>" . $rows["FLIGHT_NAME"]. "</td>";
          echo "<td>" . $rows["FLIGHT_NUMBER"] . "</td>";
          echo "<td>" . $rows["ARRIVAL_DATE"] . "</td>";
          echo "<td>" . $rows["START_DATE"] . "</td>";
        }
        echo "</table></center>";
 ?>
</body>
</html>
