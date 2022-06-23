

    <?php include "PHPfiles/connection.php" ?>     
    <?php include "PHPfiles/HeadFoot/header.php" ?>
    <main>
        <div class="break">           

        </div>
            <div class="images">
            <div class="slideshow-container">
              
    <?php
          $data = $conn->query("SELECT * FROM infolocaties")->fetchAll();

          foreach ($data as $row) {
    ?>
                
      <div class="mySlides fade">
      <div><?php echo $row ['Name'];?></div>
        <img src="img/<?php echo $row ['Photo'];?>" style="width:100%">
        <div>€<?php echo $row ['Price'];?></div>
        <a href="PHPfiles/MoreInfoFlight.php?p=<?php echo $row ['LocationID'];?>" >geïnteresseerd? kijk hier!</a>
      </div>
    <?php 
    }
  ?>
    
      </div>
      <br>
      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>
      </div>
  </div>
</main>
    <?php include "PHPfiles/HeadFoot/footer.php" ?>
