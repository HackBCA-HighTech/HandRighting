<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Failure</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- Add custom CSS here -->
    <link href="../../css/landing-page-congrats.css" rel="stylesheet">

</head>

<body style="background-color:#CC0A00;">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('welcome')?>" style="font-family: Lato">Hand Righting</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo site_url('contact')?>" style="font-family: Lato">Contact Us</a>
                </li>
                <li>
                    <a href="<?php echo site_url('about')?>" style="font-family: Lato">About</a>
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
                <div class="intro-message">
                    <h1>ALERT</h1>
                    <h3>You are a traitor and must be eliminated!</h3>
                    <hr class="intro-divider">
                        <button class="btn btn-primary" inputid="clickMe" value="clickme" onclick="window.location.href='/index.php/password_write'"><span class="glyphicon glyphicon-refresh"></span>Try Again</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

</div>
<!-- /.banner -->

<!-- JavaScript -->
<script src="/js/jquery-1.10.2.js"></script>
<script src="/js/bootstrap.js"></script>

</body>

</html>
