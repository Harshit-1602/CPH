<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Generate Colors</title>
  <?php require "stylesheet.php"; ?>
</head>
<body>

        <!--header section start-->
        <?php require "header.php"; ?>
        <!--header section end-->

      <!--scripts start-->
      <?php require "scripts.php"; ?>
      <!--scripts end-->

      <!--hero section start-->
      <section class="hero blog_hero">
    <div class="hero__wrapper blog_hero__wrapper">
        <div class="container">
            <div class="row">
                <div>
                    <h1 style="padding-bottom: 80px;">Generate Colors</h1>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--hero section end-->

    <?php
    // Generate a random hex color code
    $random_color = "#" . substr(md5(rand()), 0, 6);

    // Function to determine if a color is light or dark
    //FF1234
    //RGB[0] = RED VALUE 
    //RGB[1] = GREEN VALUE STORE 

    function isLight($color)
    {
        $rgb = sscanf($color, "#%02x%02x%02x");
        $brightness = ($rgb[0] * 299 + $rgb[1] * 587 + $rgb[2] * 114) / 1000;
        return $brightness > 155;
        //IF GREATER THAN 155 RETURN TRYE AND LESS THAN FALSE (GEN LIGHT AND DARK COLOR)
    }

    // Determine text color based on background color
    $text_color = isLight($random_color) ? "black" : "white";
    ?>

<!--color section start-->
<section class="hero blog_hero" id="colorSection" style="height: 350px; display: flex; justify-content: center; align-items: center; cursor: pointer;">
    <div class="hero__wrapper blog_hero__wrapper" style="background-color: <?php echo $random_color; ?>; text-align: center; height: 100%;">
        <h1 id="colorCode" style="margin: auto; color: <?php echo $text_color; ?>;"><?php echo $random_color; ?></h1>
    </div>
</section>
<!--color section end-->

<!-- Button section start -->
<section class="hero blog_hero d-flex justify-content-center align-items-center" style="height: 100px;">
    <div class="container text-center">
    <button class="btn btn-primary px-4 py-4 mr-2" style="width: 150px; font-size: 18px; border-radius: 10px;" onclick="reloadPage()">Generate New</button>

        <button class="btn btn-secondary px-4 py-4" style="width: 150px; font-size: 18px; border-radius: 10px;">Save Color</button>
    </div>
</section>
<!-- Button section end -->

<script>
    // Click-to-copy functionality when clicking on the color section
    document.getElementById('colorSection').addEventListener('click', function() {
        var colorCode = document.getElementById('colorCode').textContent;
        var tempInput = document.createElement('input');
        tempInput.value = colorCode;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        alert('Color code copied: ' + colorCode);
    });

    function reloadPage() {
    location.reload();
}

</script>


</body>
</html>