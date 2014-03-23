
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Verification</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <style type="text/css">

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
            <a class="navbar-brand">Hand Righting</a>
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
    <h2 style= margin-left:60px align="center"> Nice Work! Now, please attempt to log-in.</h2>
    <br>
    <div id="container">
      <canvas id="imageView" width="800" height="200">
      </canvas>
    </div>
    <br>
    <div style = margin-left:400px>
        <button type="button" class="btn btn-lg btn-info" inputid="clickMe" value="clickme" onclick="saveImage()" >Submit</button>
    </div>
<br>
    <script type="text/javascript" src="js/Canvas.js"></script>

<script>

function saveImage(){
    var canvas = document.getElementById('imageView');
    var dataURL = canvas.toDataURL();

    // pass in $password later
    var filename = "helloworld";

    //document.getElementById('canvasImg').src = dataURL;
    console.log(dataURL);
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('canvas_data')?>",
        data: {
            imgBase64: dataURL,
            text: filename
        }
    }
    )
    .done(function(response) {
            console.log('saved: ' + response);
        });
}
</script>
<script src="/js/jquery-1.10.2.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/Canvas.js"></script>
  </body>
</html>
