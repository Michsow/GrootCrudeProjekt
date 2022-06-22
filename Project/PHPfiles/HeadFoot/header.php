<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a href="#LogIn"><?php include "PHPfiles/Form.php" ?></a>
        
    </header>