<?php
var_dump($_POST);
if(isset($_POST['submit'])){


    $sth = $conn->prepare("INSERT INTO booked_flight (flight_id, name, address, contact ) 
                            VALUES (:flight_id, :name, :address, :contact )");

    $sth->bindParam(':UserName', $_POST['UserName']);
    $sth->bindParam(':Email', $_POST['email']);
    $sth->bindParam(':UserPassword', $_POST['UserPassword']);
    $sth->execute();
    //$sth->debugDumpParams();
    $result = $sth->fetch();
    header("Location: ../index.php");
}
?>