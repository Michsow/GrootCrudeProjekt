
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../css/main.css"> 

    <title></title>
  </head>

  <body>
  <main>
    <div class="break">           

    </div>
    <?php include "../PHPfiles/connection.php" ?>
    <?php include "../PHPfiles/header.php" ?>
      <div>
        <div>

          <div>
            <?php
                  $data = $conn->query("SELECT * FROM infolocaties")->fetchAll();

                  foreach ($data as $row) {
                    //echo $row ['titel']. " " .$row['artiest']. "<br >/\n";
                  //}
            ?>
            <div>
              <div>
                <img  src="../img/<?php echo $row ['Photo'];?>" alt="Card image cap">
                <div>
                  <p ><?php echo $row ['Name'];?></p>
                  <p >€<?php echo $row ['Price'];?></p>
                  <div>
                    <div>
                      <a href="product.php?p=<?php echo $row ['LocationID'];?>" class="btn btn-sm btn-outline-secondary">View</a>
                      <a href="phpfiles/admin1.php?p=<?php echo $row ['LocationID'];?>" type="button" class="btn btn-sm btn-outline-secondary" >Edit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </main>
