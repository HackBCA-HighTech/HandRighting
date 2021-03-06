
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Canvas</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <style type="text/css">
        body { background: rgb(30, 108, 109);}
        #container { position: relative;}
      #imageView { border: 0px solid #000; border-radius: 10px; background-color: #ffffff; margin-left:60px}
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
            <a class="navbar-brand" href="<?php echo site_url('welcome')?>" style="font-family: Lato">Hand Righting</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
            <ul class="nav navbar-nav" style="font-family: Lato">
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
<br>
<br>
<br>
    <h2 style= "margin-left:60px; color:white; font-family:Lato" align = "center"> Please clearly print your password, <?php echo $password; ?>, below:</h2>
    <br>
    <div id="container">
      <canvas id="imageView" width="800" height="200">
      </canvas>
    </div>
    <br>
    <div style = "font-family:Lato" align="center">
        <button type="button" class="btn btn-lg btn-info" inputid="clickMe" value="clickme" onclick="doStuff()" >Next (<?php echo $counter; ?>/10)</button>
    </div>
<br>
    <script type="text/javascript" src="../js/Canvas.js"></script>

<script>
function doStuff(){
    saveImage();
    window.location.href='/index.php/password_write?time='+time;
}
function saveImage(){
    var canvas = document.getElementById('imageView');
    var dataURL = canvas.toDataURL();

    // pass in $password later
    var filename = "filename";

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

