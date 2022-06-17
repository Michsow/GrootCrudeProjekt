<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>CRUD(TriTaco)</title>
</head>
<body>
    <?php include "PHPfiles/header.php" ?>
    <main>
        <div class="break">           

        </div>
            <div class="images">
            <div class="slideshow-container">
                <div class="mySlides fade">
                  <img src="img/AmerykaNewYork.jpg" style="width:100%">
                  <div>€<?php echo $row ['Price'];?></div>
                  <a href="PHPfiles/MoreInfoFlight.php?p=<?php echo $row ['LocationID'];?>" >geïnteresseerd? kijk hier!</a>
                </div>
                
                <div class="mySlides fade">
                  <img src="img/USALasVegasNight.jpg" style="width:100%">
                  <div>€<?php echo $row ['Price'];?></div>
                  <a href="PHPfiles/MoreInfoFlight.php?p=<?php echo $row ['LocationID'];?>">geïnteresseerd? kijk hier!</a>
                </div>
                
                <div class="mySlides fade">
                  <img src="img/ArgentinaBuenosAires.jpg" style="width:100%">
                  <div>€ <?php echo $row ['Price'];?></div>
                  <a href="PHPfiles/MoreInfoFlight.php?p=<?php echo $row ['LocationID'];?>" >geïnteresseerd? kijk hier!</a>
                </div>
                </div>
                <br>
                <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>
                </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
<script src="js/image.js"></script>
</html>
