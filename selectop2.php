<!DOCTYPE html>
<html>
<head>
  <title>Choose Option</title>
  <style>
      .leftpane{
        width: 506px;
        height: 960px;
        float: left;
        background-color: rgb(224, 235, 252);
        border-collapse: collapse;
      }
      .midpane{
        width: 507px;
        height: 960px;
        float: left;
        background-color: rgb(215, 226, 242);
        border-collapse: collapse;
      }
      .rightpane{
        width: 506px;
        height: 960px;
        float: left;
        background-color: rgb(197, 210, 229);
        border-collapse: collapse;
      }
      .ch1{
        width: 50%;
        margin:0 auto;
        min-width: 100px;
      }
      .ch2{
        width: 50%;
        margin:0 auto;
        min-width: 100px;
      }
      .ch3{
        width: 50%;
        margin:0 auto;
        min-width: 100px;
      }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
          <div class="leftpane">
            <center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>New Flight Details</h2>
                <div class="panel panel-default ch1">
                    <div class="panel-heading">Enter Flight details</div>
                    <div class="panel-body">
                      <form action="http://localhost/select2.php/" method="POST">
                          <input type="password" name="alpwd" class="input-block-level" placeholder="Enter Password"><br><br>
                          <button type="submit" name="submit2"> UPDATE </button>
                    </form>
                    </div>
                </div>
            </center>
          </div>
          <div class="midpane">
            <center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>Delete Booking</h2>
                <div class="panel panel-default ch2">
                    <div class="panel-heading">Enter Passenger details</div>
                    <div class="panel-body">
                      <form action="http://localhost/selectDEL2.php" method="POST">
                          <input type="password" name="alpwd" class="input-block-level" placeholder="Enter Password"><br><br>
                          <input type="text" name="pnr" class="input-block-level" placeholder="Enter passenger PNR"><br><br>
                          <input type="text" name="flno" class="input-block-level" placeholder="Enter flight number"><br><br>
                          <button type="submit" name="submit2"> PROCEED </button>
                    </form>
                    </div>
                </div>
            </center>
          </div>
          <div class="rightpane">
            <center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>Add Booking</h2>
                <div class="panel panel-default ch3">
                      <div class="panel-heading">Enter details</div>
                      <div class="panel-body">
                        <form action="http://localhost/selectVIEWNEW.php/" method="POST">
                            <input type="text" name="pnr" class="input-block-level" placeholder="Enter PNR"><br><br>
                            <input type="text" name="fname" class="input-block-level" placeholder="Enter First Name"><br><br>
                            <input type="text" name="lname" class="input-block-level" placeholder="Enter Last Name"><br><br>
                            <input type="text" name="age" class="input-block-level" placeholder="Enter Passenger age"><br><br>
                            <input type="text" name="gender" class="input-block-level" placeholder="Enter Passenger gender"><br><br>
                            <input type="text" name="flno" class="input-block-level" placeholder="Enter Flight Number"><br><br>
                            <button type="submit" name="submit2"> UPDATE </button>
                      </form>
                      </div>
                </div>
            </center>
          </div>
</body>
</html>
