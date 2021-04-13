<!DOCTYPE html>
<?php
session_start ();
if(!isset($_SESSION["login"]))

    header("location:login.php");

?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Stylesheets/stylesheet.css"/>
    <script type="text/javascript" src="JavaScript/slideshow.js"></script>
    <meta charset="UTF-8">
    <title>Cryt</title>
</head>
<body class="backgroundGrad">

    <?php
    require 'php/Layout/Header.php';
    ?>
    <script>
        let slideIndex = 0;
        slidey();
        function slidey(){
            let i;
            let dots = document.getElementsByClassName("dot");
            let sliding = document.getElementsByClassName("mySlides");
            for(i = 0; i < sliding.length; i++){
                sliding[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > sliding){
                slideIndex = 1;
            }
            for(i = 0; i < dots.length; i++){
                dots[i].className = dots[i].className.replace(" active2", "");
            }
            sliding[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active2";
            setTimeout(slidey, 5000);
        }

    </script>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="img/default_pfp.png" alt="" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="img/logo.png" alt= "" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="" alt="" style="width:100%">
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

        <?php
        require 'php/Layout/Footer.php';
        ?>


</body>
</html>