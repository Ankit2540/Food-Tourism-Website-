<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?">
        <link rel="stylesheet" href="style.css">
        <style>
        </style>
    </head>
    <body >
        <ul class="slideshow">
            <li><span>Image 01</span><div><h3>Rajasthan</h3></div></li>
            <li><span>Image 02</span><div><h3>Goa</h3></div></li>
            <li><span>Image 03</span><div><h3>Himachal Pradesh</h3></div></li>
            <li><span>Image 04</span><div><h3>Amritsar</h3></div></li>
            <li><span>Image 05</span><div><h3>Kerala</h3></div></li>
            <li><span>Image 06</span><div><h3>Agra</h3></div></li>
        </ul>
        <div class="container1">
            <?php
                include "Header.html";
            ?>
            <div style="height: 445px;" class="home"></div>
            <?php
                include "section1.php";
            ?>                   
            <?php
                include "section.html";
            ?>
            <?php
                include "footer.html";
            ?>
        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    </body>
</html>