<?php

include "connection.php";
if($_SESSION['loggedin'] == true){
    echo "Welcome " . $_SESSION['username'];
} else {
    header("Location: loginUser.php");
}

    var_dump($_GET['ID']);
    $sql = "DELETE FROM album WHERE ID=:id;";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    header('Location: admin1.php');

?> 