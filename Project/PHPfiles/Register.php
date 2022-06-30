<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/Registercss.css">
</head>
<body>
<?php
include ("connection.php");
var_dump($_POST);
if(isset($_POST['submit'])){


    $sth = $conn->prepare("INSERT INTO users (UserName, E_mail, UserPassword ) 
                            VALUES (:UserName, :Email, :UserPassword )");

    $sth->bindParam(':UserName', $_POST['UserName']);
    $sth->bindParam(':Email', $_POST['email']);
    $sth->bindParam(':UserPassword', $_POST['UserPassword']);
    $sth->execute();
    //$sth->debugDumpParams();
    $result = $sth->fetch();
    header("Location: ../index.php");
}
?>

<main>
  <form action="" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="UserName" id="Username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="UserPassword" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
  <div class="buttons">
    <button type="submit" class="registerbtn" name="submit">Register</button>
    <a href="http:../index.php" class="registerbtn2">Go back to main page.</a>
  </div>
  </div>

  

</form>
</main>

</body>
</html>
