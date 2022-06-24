
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>TriTaco</title>
  </head>
  <body>
<?php include "connection.php"?>
<?php
var_dump($_GET);
$data = $conn->query("SELECT * FROM infolocaties WHERE LocationID=".$_GET['p'])->fetch();
var_dump($data['LocationID']);
//foreach ($data as $row) {
  //echo $row ['titel']. " " .$row['artiest']. "<br >/\n";
//}


?>
<header>
        <div class="logo">

        </div>
        <nav>
            <div class="home">
                <button class="button"  onclick="document.location='../index.php'">Home</button>
            </div>
            <div class="vacation">
                <button class="button" onclick="document.location='../Vacation.php'">Vacation</button>
            </div>
            <div class="about-us">
                <button class="button"  onclick="document.location='../AboutUs.php'">About Us</button>
            </div>
        </nav>
       
            
        <div class="shoppingCartDiv">
            
        <i class="fa fa-shopping-cart" style="font-size:68px;" aria-hidden="true"></i>
 
        <button class="shoppingCartButton" style="width:100px;" href="PHPfiles/cart.php">Chosen Flights
        <?php
        if(isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
            echo "<span id=\'cart_count\'>$count</span>";
        } else{
            echo "<span id=\'cart_count\'>0</span>";
        }
        ?>
        </button>
        
        </div>
    </header>
<main>
<div class="break">           
    </div>
    <div class="break2">
    </div> 
  <div>
      <div class="divPimg">
        <img class="imgP" src="../img/<?php echo $data ['Photo'];?>" >
      </div>
        <div class="columndivP">
            <div class="text">
              <p>  <?php echo $data['Name'] ?>  <p>
            </div>
          <summary>Ingredienten</summary>
            <div class="text">
              <p>  <?php echo $data['Price'] ?>  <p>
                
              <p class="card" name="add"><button>Add to Cart
              <i class="fa fa-shopping-cart" style="font-size:30px;" aria-hidden="true"></i></button> </p>
       
            </div>
        </div>
  </div>

</main>
<footer>


    <script src="../js/main.js"> </script>
    <script scr="../js/JavaForm.js"></script>
</footer>

</body>

</html> 