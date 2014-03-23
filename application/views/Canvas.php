
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Canvas</title>
    <link rel="stylesheet" type="text/css" href="../../HandRighting2/css/bootstrap.css"> 
    <style type="text/css"><!--
      #container { position: relative;}
      #imageView { border: 0px solid #000; border-radius: 10px; background-color: #eee; margin-left:60px}
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
            <a class="navbar-brand" href="http://startbootstrap.com">Pass Your Word</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#about">Learn Mor(se)!</a>
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
    <h2 style= margin-left:60px> Please clearly print your password into the canvas below.</h2>
    <br> 
    <div id="container">
      <canvas id="imageView" width="800" height="200">
      </canvas>
    </div>
    <br>
    <div align = "center">
 <button type="button" class="btn btn-lg btn-info">Next (2/10)</button>
    </div>
<br>
    <script type="text/javascript" src="../../HandRighting/js/Canvas.js"></script>
  </body>
</html>

