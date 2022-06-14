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
    <header>
        <div class="logo">
        <?php include "PHPfiles/connection.php" ?>     
        <?php
            
                  //$data = $conn->query("SELECT * FROM infolocaties")->fetchAll();
                  $data = $conn->query("SELECT * FROM infolocaties WHERE LocationID")->fetch();
                  var_dump($data);
                  {
                    $dataRow = $conn->query("SELECT LocationID FROM infolocaties")->fetch();
                  var_dump($dataRow);
                  foreach  ($dataRow as $row)
            ?>
        </div>
        <nav>
            <div class="home">
                <button class="button">Home</button>
            </div>
            <div class="vacation">
                <button class="button">Vacation</button>
            </div>
            <div class="about-us">
                <button class="button">About Us</button>
            </div>
        </nav>
        <div class="search">
            <div class="Search_block">

            </div>
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Search</button>
            </form>
        </div>
        
    </header>
    <main>
        <div class="break">           

        </div>
            <div class="images">
            <div class="slideshow-container">

                <div class="mySlides fade">
                  <img src="img/AmerykaNewYork.jpg" style="width:100%">
                  <div>€250</div>
                  <a href="PHPfiles/MoreInfoFlight.php?p=<?php echo $row ['ID'];?>" >geïnteresseerd? kijk hier!</a>
                </div>
                
                <div class="mySlides fade">
                  <img src="img/USALasVegasNight.jpg" style="width:100%">
                  <div>€300</div>
                  <a href="PHPfiles/MoreInfoFlight.php?p=<?php echo $row ['ID'];?>">geïnteresseerd? kijk hier!</a>
                </div>
                
                <div class="mySlides fade">
                  <img src="img/ArgentinaBuenosAires.jpg" style="width:100%">
                  <div>€400</div>
                  <a href="PHPfiles/MoreInfoFlight.php?p=<?php echo $row ['ID'];?>" >geïnteresseerd? kijk hier!</a>
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
        <?php } ?>
    </main>
    <footer>

    </footer>
</body>
<script src="js/image.js"></script>
</html>