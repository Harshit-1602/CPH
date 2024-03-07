<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Save Color</title>
  <?php require "stylesheet.php"; ?>
</head>

<body>
  <!--header section end-->
  <?php require "header.php"; ?>
  <!--hero section start-->

  <!--scripts start-->
  <?php require "scripts.php"; ?>
  <!--scripts end-->

  <!--hero section start-->
  <section class="hero blog_hero">
    <div class="hero__wrapper blog_hero__wrapper">
      <div class="container">
        <div class="row">
          <div>
            <h1 style="padding-bottom: 80px;">Save Color</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--hero section end-->

  <!--color section start-->
  <?php
  // Store the hexColor value from $_GET['hexColor'] as a variable
  $hexColor = isset($_GET['hexColor']) ? $_GET['hexColor'] : '000000';
  
  // Determine text color based on background color brightness
  function getTextColor($color)
  {
    $rgb = sscanf($color, "#%02x%02x%02x");
    $brightness = ($rgb[0] * 299 + $rgb[1] * 587 + $rgb[2] * 114) / 1000;
    return $brightness > 155 ? "black" : "white";
  }

  $textColor = getTextColor('#' . $hexColor);
  ?>
  <section class="hero blog_hero" id="colorSection" style="height: 350px; display: flex; justify-content: center; align-items: center; cursor: pointer;">
    <div class="hero__wrapper blog_hero__wrapper" style="background-color: <?php echo '#' . $hexColor; ?>; text-align: center; height: 100%;">
      <h1 id="colorCode" style="margin: auto; color: <?php echo $textColor; ?>;"><?php echo '#' . $hexColor; ?></h1>
    </div>
  </section>
  <!--color section end-->

  <!-- Button section start -->
  <section class="hero blog_hero d-flex justify-content-center align-items-center" style="height: 100px;">
    <div class="container text-center">
      <button class="btn btn-secondary px-4 py-4" style="width: 150px; font-size: 18px; border-radius: 10px;">Save Color</button>
    </div>
  </section>
  <!-- Button section end -->

</body>

</html>
