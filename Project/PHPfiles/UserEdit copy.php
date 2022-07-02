<?php 
include "connection.php";
$sql = "SELECT * FROM booked_flight where name = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_SESSION['name']]);
$result = $stmt->fetch();


if(isset($_POST["submit"])){
    $sql = "UPDATE booked_flight SET
                 flight_id = :flight_id,
                 name = :name, 
                 address = :address,
              WHERE contact = :contact, 
              ";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':flight_id', $_POST['flight_id']);
      $stmt->bindParam(':name', $_POST['name']);
      $stmt->bindParam(':address', $_POST['address']);
      $stmt->bindParam(':contact', $_POST['contact']);
      $stmt->execute();
      header("Location: admin1.php");
  }

?>

    <form action="#" method="post">
        flight number:<?php var_dump($result['flight_id']) ?> <input type="text" name="flight_id" id="" value="<?php echo $result["flight_id"] ?>"><br />
        name: <?php var_dump($result['name']) ?><input type="text" name="name" id="" value="<?php echo $result["name"] ?>"><br />
        address: <?php var_dump($result['address']) ?><input type="text" name="address" id="" value="<?php echo $result["address"] ?>"><br />
        contact: <?php var_dump($result['contact']) ?><input type="text" name="contact" id="" value="<?php echo $result["contact"] ?>"><br />
        <input type="submit" name="submit" value="veranderen">
    </form>
