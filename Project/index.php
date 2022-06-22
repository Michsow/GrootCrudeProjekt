

    <?php include "PHPfiles/connection.php" ?>     
    <?php include "PHPfiles/HeadFoot/header.php" ?>
    <?php
                              $data = $conn->query("SELECT * FROM infolocaties")->fetchAll();

                              foreach ($data as $row)
    ?>
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
    <?php include "PHPfiles/HeadFoot/footer.php" ?>
