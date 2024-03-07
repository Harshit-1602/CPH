<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Palettes</title>
    <?php require "stylesheet.php"; ?>
    <style>
        /* CSS for the parent container */
        .parent-container {
            background-color: #fefefe;
            /* Set background color to black */
            padding: 20px;
            /* Add padding for visual separation */
            margin-bottom: 20px;
            /* Add margin bottom for separation between rows */
            margin-right: 15px;
            display: inline-block;
            /* Display as inline block */
            width: auto;
            /* Set width to auto */
            text-align: center;
            /* Center the container horizontally */
            border: 1px solid #eeeeee;
        }

        /* CSS for the box container */
        .box-container {
            display: flex;
            flex-wrap: wrap;
            /* Wrap boxes to next line */
            justify-content: center;
            /* Center the boxes horizontally */
            width: auto;
            /* Set width to auto */

        }

        /* CSS for each box */
        .box {
            height: 100px;
            /* Updated height */
            width: 120px;
            /* Updated width */
            border: 5px solid #eeeeee;
            margin: 0px;
            /* Add margin between boxes */

        }
    </style>
</head>

<body>
    <!--preloader start-->
    <?php require "preloader.php"; ?>
    <!--preloader start-->

    <!--Header start-->
    <?php require "header.php"; ?>
    <!--Header end-->

    <!--hero section start-->
    <section class="hero blog_hero">
        <div class="hero__wrapper blog_hero__wrapper">
            <div class="container">
                <div class="row">
                    <div>
                        <h1 style="padding-bottom: 80px;">Explore Palettes</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->
    <section class="hero blog_hero">
    </section>

    <!-- Container to center the parent-container -->
    <div style="text-align: center;">
        <!-- Four separate rows of boxes with black background -->
        <?php
        //jfor row
        for ($j = 0; $j < 4; $j++) {
            $colors = array(); // Initialize colors array for each row
            //for 5 colors
            for ($i = 0; $i < 5; $i++) {
                $red = mt_rand(0, 255);
                $green = mt_rand(0, 255);
                $blue = mt_rand(0, 255);
                $colors[] = "rgb($red, $green, $blue)";
            }
        ?>
            <div class="parent-container">
                <div class="box-container">
                    <?php
                    foreach ($colors as $color) {
                        echo '<div class="box" style="background-color: ' . $color . '"></div>';
                    }
                    ?>
                </div>
            </div>
        <?php } ?>
        <!-- End of separate rows -->
    </div>
    <!-- End of container to center parent-container -->

    <!-- Scripts start -->
    <?php require "Scripts.php"; ?>
    <!-- Scripts end -->
</body>

</html>