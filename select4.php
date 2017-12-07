<!DOCTYPE html>
<html>
<head>
  <title>Choose Option</title>
  <style>
      .leftpane{
        width: 759px;
        height: 960px;
        float: left;
        background-color: rgb(224, 235, 252);
        border-collapse: collapse;
      }
      .rightpane{
        width: 758px;
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
            <h2>View Flight Schedule</h2>
                <div class="panel panel-default ch1">
                    <div class="panel-heading">Enter credentials</div>
                    <div class="panel-body">
                      <form action="http://localhost/selectATCV.php/" method="POST">
                          <input type="text" name="aluname" class="input-block-level" placeholder="Enter City Name"><br><br>
                          <input type="password" name="alpwd" class="input-block-level" placeholder="Enter Password"required><br><br>
                          <button type="submit" name="submit2"> SEARCH </button>
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
            <h2>Change flight schedule</h2>
                <div class="panel panel-default ch3">
                    <div class="panel-heading">Enter credentials</div>
                    <div class="panel-body">
                      <form action="http://localhost/chgATC.php/" method="POST">
                          <input type="text" name="flno" class="input-block-level" placeholder="Enter Flight Number" required><br><br>
                          <input type="text" name="nt" class="input-block-level" placeholder="Enter new time" required><br><br>
                          <button type="submit" name="submit2"> SEARCH </button>
                    </form>
                    </div>
                </div>
            </center>
          </div>
</body>
</html>
