<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- Add custom CSS here -->
    <link href="css/landing-page-contact.css" rel="stylesheet">

</head>

<body style="background-color:orangered;">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Hand Righting</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav" style="font-family: lato">
                <li>
                    <a href="#contact">Contact Us</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="intro-header">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message" style="font-family: lato; color: white">
                    <h2>
                        HandRighting is an innovative new way to ensure that your accounts stay secure, even if your password is compromised. In short, this web application is a proof-of-concept to show that password security can be greatly enhanced through recognition and utilization of the user’s handwriting patterns.
                    </h2>

                    <h3>
                        How does it work?
                    </h3>
                    <p>
                        The user writes his or her password into an HTML canvas ten times, so that the program can learn the nuances of each person’s handwriting. From then on, the application is able to determine if the password is not only correct, but written by the intended user.
                        This application uses several different measures of handwriting analysis in order to learn and accurately recognize a handwritten password.
                    <h3>
                        The program must:
                    </h3>
                    <p>
                        1. Save each handwritten password from the browser into a JPEG file. <br><br>
                        2. Automatically crop the image to eliminate unnecessary white space in the margins. <br><br>
                        3. Extracts the features of each of the inputted image files, accounting for the relative heights of the letters, the relative widths of the letters, and pinpointing the centroid of the text. <br><br>
                        4. Measure the time it takes to write the password in the canvas as an additional identifying factor. <br><br>
                        5. Calculate margins of error within two standard deviations of the mean for each user. Within this margin of error, the handwriting is determined to be that of the rightful user. <br>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->

</div>
<!-- /.banner -->

<!-- JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>

</body>

</html>
