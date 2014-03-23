
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Canvas</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <style type="text/css"><!--
        #container { position: relative;}
        #imageView { border: 0px solid #000; border-radius: 10px; background-color: #eee;}
        --></style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://startbootstrap.com">Hand Righting</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#contact">Contact Us</a>
                </li>
                <li><a href="#about">About</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<br>
<br>
<br>
<h2 align="center">Please clearly print your password into the canvas below.</h2>
<br>
<div style="width: 800px; margin: 0 auto;">
    <canvas id="imageView" width="800" height="200">
    </canvas>
</div>
<br>
<div style="width: 150px; margin: 0 auto;">
    <button type="button" class="btn btn-lg btn-info" style="width:150px; height:50px">Next (2/10)</button>
</div>
<br>
<script type="text/javascript" src="../../js/Canvas.js"></script>
</body>
</html>