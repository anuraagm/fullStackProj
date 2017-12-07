<!DOCTYPE HTML>
<html>
<meta charset="UTF-8">
<head><title>DBMS Mini Project</title>
  <?php
  $url = 'http://localhost';
include_once('localhost/select1.php');
?>
    <!-- CSS file created by team -->
    <link href = "dbmsMiniCSS.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
</style>
<html>
    <body background="flightHome.jpg">
        <section>
        <!-- Flag to go back to the top of the screen -->
        <section>
        <div id = "HomeSec"></div>
        </section>

        <!-- Code defines Navbar fixed to the top of the screen -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#HomeSec" style="font-size: 250%"><x><b>FLIGHT BOOKER<b></x></a>
                </div>
                <ul class="nav navbar-nav navbar-right" >
                    <li><a href="#con" style="font-size: 150%">Airline Staff Login</a></li>
                    <li><a href="#ServSec" style="font-size: 150%">Airport Staff Login</a></li>
                    <li><a href="#found" style="font-size: 150%">ATC Login</a></li>
                </ul>
            </div>
        </nav>
        <center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">

        <form class="form-signin" action="http://localhost/select200.php" method="POST">
            <h2>Passenger Login</h2>
            <input type="text" name="lname" placeholder="Enter Last Name"> |
            <input type="text" name="email" placeholder="Enter Email ID"> OR
            <input type="text" name="pnr" placeholder="Enter PNR"required>
            <input type="submit">
      </form>

    </div> <!-- /container -->

        <!-- End of Navbar Definition -->

    </center>
        </section>

        <section>
            <div class = "contact" id = "con">
                    <center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">

        <form action="http://localhost/selectop2.php" method="POST">
            <h2>Airline Staff Login</h2>
            <input type="text" name="aluname" class="input-block-level" placeholder="Enter Airlines Name"> |
            <input type="password" name="alpwd" class="input-block-level" placeholder="Enter Password"required>
            <button type="submit" name="submit2"> LOGIN </button>
      </form>

    </div> <!-- /container -->

        <!-- End of Navbar Definition -->

    </center>
            </div>
        </section>
        <!-- End of Services page -->
        <!-- (Services Page) Code for the page reched on clicking the first button
        <div> has been used to scroll on Button Click <section> defines the <div> -->

        <section>
            <div class = "serv" id = "ServSec">
                <center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">

        <form class="form-signin-arp" action="http://localhost/selectop3.php" method="POST">
            <h2>Airport Staff Login</h2>
            <input type="text" name="arsuname" class="input-block-level" placeholder="Enter Username"> |
            <input type="password" name="arspwd" class="input-block-level" placeholder="Enter Password">
            <button type="submit" name="submit3"> LOGIN </button>
        </form>

    </div> <!-- /container -->

        <!-- End of Navbar Definition -->

    </center>
            </div>

            <!-- /container -->
        <!-- End of Home page -->

        <!-- (Services Page) Code for the page reched on clicking the first button
        <div> has been used to scroll on Button Click <section> defines the <div> -->
        </section>
        <section>
            <div class = "founders" id = "found">
                <center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">

        <form class="form-signin-atc" action="http://localhost/select4.php" method="POST">
            <h2>ATC Login</h2>
            <input type="text" name="atcuname" class="input-block-level" placeholder="Enter Username"> |
            <input type="password" name="atcpwd" class="input-block-level" placeholder="Enter Password">
            <button type="submit" name = "submit4"> LOGIN </button>
      </form>

    </div> <!-- /container -->

        <!-- End of Navbar Definition -->

    </center>
            </div>
        </section>
        <!-- End of Services page -->
        <footer>
            <a>Copyright &copy; Airline Database</a>
        </footer>
        <!-- (Services Page) Code for the page reched on clicking the first button


        <div> has been used to scroll on Button Click <section> defines the <div> -->


        <!-- Javascript To enable smooth scrolling of screen on button click -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                scrollTop: $(hash).offset().top
                }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
                });
            } // End if
            });
            });
        </script>
        <!-- End of script for scrolling -->

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
        </script>
    </body>
</html>
