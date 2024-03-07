<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Palette</title>
    <?php require "stylesheet.php"; ?>
    <style>
        /* CSS for the box container */
        .box-container {
            display: flex;
            justify-content: center; /* Center the boxes horizontally */
            margin-top: 30px;
        }

        /* CSS for each box */
        .box {
            height: 300px;
            width: 250px;
            border: 5px solid #eeeeee;
        }
    </style>
</head>
<body>
    <!--header section start-->
    <?php require "header.php"; ?>
    <!--hero section end-->

    <!--scripts start-->
    <?php require "scripts.php"; ?>
    <!--scripts end-->

    <!--pallete section start-->
    <section class="hero blog_hero">
        <div class="hero__wrapper blog_hero__wrapper">
            <div class="container">
                <div class="row">
                    <div>
                        <h1 style="padding-bottom: 80px;">Generate Palette</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--pallete section end-->

    <!-- Five boxes in a single row start-->
    <div class="box-container">
        <?php
        $colors = array();
        for ($i = 0; $i < 5; $i++) {
            $red = mt_rand(0, 255);
            $green = mt_rand(0, 255);
            $blue = mt_rand(0, 255);
            $colors[] = "rgb($red, $green, $blue)";
        }
        foreach ($colors as $color) {
            echo '<div class="box" style="background-color: ' . $color . '"></div>';
        }
        ?>
    </div>
    <!-- Five boxes in a single row end-->

    <!-- Button section start -->
    <section class="hero blog_hero d-flex justify-content-center align-items-center" style="height: 100px; margin-top: 10px;">
        <div class="container text-center">
            <button id="generateNewBtn" class="btn btn-primary px-2 py-2 mr-2" style="width: 150px; font-size: 18px; border-radius: 10px;">Generate New</button>
            <button class="btn btn-secondary px-2 py-2" style="width: 150px; font-size: 18px; border-radius: 10px;">Save Color</button>
        </div>
    </section>
    <!-- Button section end -->

    <script>
        // Add event listener to the "Generate New" button
        document.getElementById("generateNewBtn").addEventListener("click", function() {
            // Reload the page
            location.reload();
        });
    </script>
</body>
</html>
