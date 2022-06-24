
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/MIF.css">
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

<main class="mainP">
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

</body>

</html> 