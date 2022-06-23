<?php 
include "connection.php";
$sql = "SELECT * FROM infolocaties where LocationID = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_GET['id']]);
$result = $stmt->fetch();


if(isset($_POST["submit"])){
    $sql = "UPDATE infolocaties SET
                 ID = :ID,
                 Data = :Data, 
                 Name = :Name,
                 Price = :Price,
              WHERE prijs = :prijs, 
              ";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':LocationID', $_POST['LocationID']);
      $stmt->bindParam(':Data', $_POST['Data']);
      $stmt->bindParam(':Name', $_POST['Name']);
      $stmt->bindParam(':Price', $_POST['Price']);
      $stmt->bindParam(':Photo', $_POST['Photo']);
      $stmt->execute();
      header("Location: admin1.php");
  }

?>

<form action="" method="post">
        titel<input type="text" name="titel" id="" value="<?php echo $result["Data"] ?>"><br />
        Text_Details<input type="text" name="Text_Details" id="" value="<?php echo $result["Name"] ?>"><br />
        Ingredienten<input type="text" name="Ingredienten" id="" value="<?php echo $result["Price"] ?>"><br />
        prijs<input type="text" name="prijs" id="" value="<?php echo $result["Photo"] ?>"><br />
        <input type="submit" name="submit" value="toevoegen">
</form>

