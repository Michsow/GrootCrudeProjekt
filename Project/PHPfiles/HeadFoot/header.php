<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>TriTaco</title>
</head>

<body>
<header>
        <div class="logo">

        </div>
        <nav>
            <div class="home">
                <button class="button"  onclick="document.location='index.php'">Home</button>
            </div>
            <div class="vacation">
                <button class="button" onclick="document.location='Vacation.php'">Vacation</button>
            </div>
            <div class="about-us">
                <button class="button"  onclick="document.location='AboutUs.php'">About Us</button>
            </div>
        </nav>
        <div class="Login">
            <a href="#LogIn"><?php include "PHPfiles/Form.php" ?></a>
            </div>
            <div class="about-us">
              <button><a href="PHPfiles/Logout.php">Logout</a></button>
            </div>
            
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