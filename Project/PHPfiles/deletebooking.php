<?php

include "connection.php";
if($_SESSION['loggedin'] == true){
    echo "Welcome " . $_SESSION['username'];
} else {
    header("Location: loginUser.php");
}

    var_dump($_GET['id']);
    $sql = "DELETE FROM booked_flight WHERE id=:id;";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    header('Location: admin1bookedflight.php');

?>