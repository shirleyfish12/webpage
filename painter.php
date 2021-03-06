<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta property="og:image" content="https://jenniferdewalt.com/images/fb_icon.png"/>
  <title>Pixel Painter | Shirley</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/pixel_painter.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/underscore.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/jscolor.js"></script>
  <script src="js/analytics.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/pixel_painter.js"></script>
  <!--[if IE]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body id="pixel_painter">
  <header>
    <div id="logo">Pixel Painter</div>
    <div id="control_container">
      <div class="control">Color: <input class="color {adjust:false, pickerPosition:'bottom'}" type="text"></div>
      <div class="control">Size: <input class="size" type="text"></div>
      <div class="control"><input class="btn eraser" type="button" value="Eraser"></div>
      <div class="control"><input class="btn erase_all" type="button" value="Erase All"></div>
    </div>
    <br class="clear">
  </header>

  <div id="container">
    <canvas id="canvas"></canvas>
  </div>



</body>
</html>