
<!doctype html>
<html lang="en">
<?php
    $conn = new mysqli('localhost', 'root', '', 'tritacosql');

    if (isset($_POST['save'])) {
        $uID = $conn->real_escape_string($_POST['uID']);
        $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
        $ratedIndex++;

        if (!$uID) {
            $conn->query("INSERT INTO stars (rateIndex) VALUES ('$ratedIndex')");
            $sql = $conn->query("SELECT id FROM stars ORDER BY id DESC LIMIT 1");
            $uData = $sql->fetch_assoc();
            $uID = $uData['id'];
        } else
            $conn->query("UPDATE stars SET rateIndex='$ratedIndex' WHERE id='$uID'");

        exit(json_encode(array('id' => $uID)));
    }

    $sql = $conn->query("SELECT id FROM stars");
    $numR = $sql->num_rows;

    $sql = $conn->query("SELECT SUM(rateIndex) AS total FROM stars");
    $rData = $sql->fetch_array();
    $total = $rData['total'];

    $avg = $total / $numR;
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>TriTaco</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
            
        <i class="fa-solid fa-plane-departure" style="font-size:68px;" aria-hidden="true"></i>
 
        <button class="shoppingCartButton" style="width:100px;" href="PHPfiles/cart.php">booked flights</button>
        
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
              <h1>  <?php echo $data['Name'] ?>  <h1>
            </div>
            <div class="text">
              <p> € <?php echo $data['Price'] ?>  <p>
              <?php 
    var_dump($_POST);
              if(isset($_POST['submit'])){
                  $sth = $conn->prepare("INSERT into booked_flight (name, address, contact)
                  VALUES (:name, :address, :contact,)");

                        $sth->bindParam(':name', $_POST['name']);
                        $sth->bindParam(':address', $_POST['address']);
                        $sth->bindParam(':contact', $_POST['contact']);
                        $sth->execute();
                        header("Location:../index.php");
                }
               
              ?>
            <form method="post">
              <label for="uname"><b>Username and surname</b></label>
              <input type="text" placeholder="Enter Username & surname:" name="name" id="name" >

             <label for="psw"><b>Address</b></label>
             <input type="text" placeholder="Enter address" name="address" id="address" >

             <label for="psw"><b>Contact</b></label>
             <input type="text" placeholder="Enter Phone number" name="contact" id="contact" >

             <a> flight id: </a>
                  <?php 
                $_GET['p'];
                echo $_GET['p']

                  ?>

              <a class="card" name="submit"><button name="submit" type="submit">Book a flight    

              <i class="fa-solid fa-book-bookmark" style="font-size:30px;" aria-hidden="true"></i></button> </a>
            </form>
            </div>
        </div>
  </div>
  <div class="container3">
        <i class="fa fa-star fa-2x" data-index="0"></i>
        <i class="fa fa-star fa-2x" data-index="1"></i>
        <i class="fa fa-star fa-2x" data-index="2"></i>
        <i class="fa fa-star fa-2x" data-index="3"></i>
        <i class="fa fa-star fa-2x" data-index="4"></i>
        <br><br>
        <?php echo round($avg,2) ?>
    </div>
</main>
<footer>


    <script src="../js/main.js"></script>
    <script scr="../js/JavaForm.js"></script>
    <script scr="../js/onclick.js"></script>
    <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="../js/rating.js"></script>
    <script scr="../js/"></script>

</footer>

</body>

</html> 