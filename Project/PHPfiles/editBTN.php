<?php 
include "connection.php";
$sql = "SELECT * FROM album where id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_GET['id']]);
$result = $stmt->fetch();


if(isset($_POST["submit"])){
    $sql = "UPDATE album SET
                 ID = :ID,
              titel = :titel, 
              Text_Details = :Text_Details,
              Ingredienten = :Ingredienten,
              WHERE prijs = :prijs, 
              ";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':ID', $_POST['ID']);
      $stmt->bindParam(':titel', $_POST['titel']);
      $stmt->bindParam(':Text_Details', $_POST['Text_Details']);
      $stmt->bindParam(':Ingredienten', $_POST['Ingredienten']);
      $stmt->bindParam(':prijs', $_POST['prijs']);
      $stmt->execute();
      header("Location: admin1.php");
  }

?>

<form action="" method="post">
        titel<input type="text" name="titel" id="" value="<?php echo $result["titel"] ?>"><br />
        Text_Details<input type="text" name="Text_Details" id="" value="<?php echo $result["Text_Details"] ?>"><br />
        Ingredienten<input type="text" name="Ingredienten" id="" value="<?php echo $result["Ingredienten"] ?>"><br />
        prijs<input type="text" name="prijs" id="" value="<?php echo $result["prijs"] ?>"><br />
        <input type="submit" name="submit" value="toevoegen">
</form>

