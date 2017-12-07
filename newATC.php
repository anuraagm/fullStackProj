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
      if(isset($_POST["fnam"]))
      {
          $fn = $_POST["fnam"];
      }
      else{
        echo "No fname input";
      }
if(isset($_POST["fno"]))
      {
          $fnum = $_POST["fno"];
      }
      else{
        echo "No fno input";
      }
if(isset($_POST["st"]))
      {
          $s = $_POST["st"];
      }
      else{
        echo "No st input";
      }
if(isset($_POST["at"]))
      {
                $a = $_POST["at"];
      }
      else{
        echo "No at input";
      }
if(isset($_POST["src"]))
      {
          $sc = $_POST["src"];
      }
      else{
        echo "No src input";
      }      
      //echo "Lname: $name email: $email pnr: $pnr" .  "<br />";
      $con = mysqli_connect($dbhost, $user, $pass, $db);
      $sql = "INSERT into atc (FLIGHT_NAME,FLIGHT_NUMBER,SCHEDULED_TIME,ACTUAL_TIME,LOCATION) VALUES('$fn','$fnum','$s','$a','$sc')";
      $result = mysqli_query($con, $sql);
      if($result){
        echo "ATC record updated";
      }
      else{
        echo "Flight not added: " . mysqli_error($con);
      }

 ?>

 </body>
</html>