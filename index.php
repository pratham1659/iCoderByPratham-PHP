<?php
// if already logged in, go to products page
if ( isset( $_SESSION["email_id"] ) ) {
    header( "location: products.php" );
}

require "./includes/common.php";
?>

<!-- index HTML start from here -->
<!DOCTYPE html>
<html>

<head>
    <!-- link to Bootstrap minified css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- link to Jquery minified-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- link to Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <!-- link to external CSS -->
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="style.css">

</head>


<body style="padding-top: 50px;">
    <!-- Navbar from here -->
    <?php
require './includes/header.php';
?>
    <!-- Navbar End here  -->

    <!--Main banner image-->
    <div id="banner_image">
        <div class="container">
            <center>
                <div id="banner_content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands </p>
                    <br />
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </center>
        </div>
    </div>
    <!--Main banner image end-->
    <br>
    <!--Item categories listing-->
    <div class="container">
        <div class="row text-center" id="item_list">
            <div class="col-sm-4">
                <a href="products.php">
                    <div class="thumbnail">
                        <img src="images/camera1.jpg" alt="">
                        <div class="caption">
                            <h3>Cameras</h3>
                            <p>Choose among the best available in the world.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="products.php">
                    <div class="thumbnail">
                        <img src="images/watch1.jpg" alt="">
                        <div class="caption">
                            <h3>Watches</h3>
                            <p>Original watches from the best brands.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="products.php">
                    <div class="thumbnail">
                        <img src="images/shirt1.jpg" alt="">
                        <div class="caption">
                            <h3>Shirts</h3>
                            <p>Our exquisite collection of shirts.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--Item categories listing end-->
    </div>
    <!--Main banner image end-->

    <!-- Footer Php tag from here -->
    <?php
require './includes/footer.php';
?>
</body>

</html>
<!-- Index HTML End here  -->
