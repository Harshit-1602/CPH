<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Explore Colors</title>
  <?php require "stylesheet.php"; ?>
  <style>
     .col-2 {
  height: 200px;
  width: 200px;
  margin: 30px auto;
  position: relative;
  overflow: hidden;
}

.box {
  height: 100%;
  width: 100%;
  border-radius: 25px;
  background-color: #f0f0f0;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 20px;
  position: relative;
}

.color-text {
  position: absolute;
  bottom: 10px;
  left: 30px;
  bottom: 80px;
  padding: 5px 10px;
  background-color: rgba(0, 0, 0, 0.5); /* Background color with transparency (???)*/
  color: #ffffff; /* Text color */
  border-radius: 5px;
  cursor: pointer;
}


  </style>
</head>

<body>
  <!--preloader start-->
  <?php require "preloader.php"; ?>
  <!--preloader end-->

  <!--header section end-->
  <?php require "header.php"; ?>
  <!--hero section start-->

  <!--hero section start-->
  <section class="hero blog_hero">
    <div class="hero__wrapper blog_hero__wrapper">
      <div class="container">
        <div class="row">
          <div>
            <h1 style="padding-bottom: 80px;">Explore Colors</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--hero section end-->
  
  <div class="container">
    <!-- First row -->
    <div class="row">
      <div class="col-2">
        <div class="box" id="box1"></div>
      </div>
      <!-- Addedd id to each box -->
      <div class="col-2">
        <div class="box" id="box2"></div>
      </div>
      <div class="col-2">
        <div class="box" id="box3"></div>
      </div>
      <div class="col-2">
        <div class="box" id="box4"></div>
      </div>
      <div class="col-2">
        <div class="box" id="box5"></div>
      </div>
    </div>
    <!-- Second row -->
    <div class="row">
      <div class="col-2">
        <div class="box" id="box6"></div>
      </div>
      <div class="col-2">
        <div class="box" id="box7"></div>
      </div>
      <div class="col-2">
        <div class="box" id="box8"></div>
      </div>
      <div class="col-2">
        <div class="box" id="box9"></div>
      </div>
      <div class="col-2">
        <div class="box" id="box10"></div>
      </div>
    </div>
  </div>

  <!--scripts start-->
  <?php require "scripts.php"; ?>
  <!--scripts end-->

  <script>
  document.addEventListener("DOMContentLoaded", function () {
    var boxes = document.querySelectorAll(".box");
    boxes.forEach(function (box) {
      var randomColor = "#" + Math.floor(Math.random() * 16777215).toString(16);
      box.style.backgroundColor = randomColor;
      var textColor = getTextColor(randomColor);
      box.style.color = textColor;
      box.innerHTML = '<div class="color-text">' + randomColor + '</div>';
     
      // Add click event listener to each box
      box.addEventListener("click", function () {
      var hexColor = randomColor.substr(1); // Remove the '#' from the color code
      // Redirect to save-color.php with the hex color value(Left)
      window.location.href = 'save-colors.php?hexColor=' + hexColor;
    });
  });


    function getTextColor(bgColor) {
    var color = (bgColor.charAt(0) === '#') ? bgColor.substring(1, 7) : bgColor;
    var r = parseInt(color.substring(0, 2), 16); // Red value
    var g = parseInt(color.substring(2, 4), 16); // Green value
    var b = parseInt(color.substring(4, 6), 16); // Blue value
    var brightness = ((r * 299) + (g * 587) + (b * 114)) / 1000; // Calculate brightness

    return (brightness > 125) ? '#000000' : '#ffffff'; // Return black or white text color
  }
});


  </script>
</body>


</html>
