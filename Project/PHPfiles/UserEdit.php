<?php 
include "connection.php";
$sql = "SELECT * FROM users where UserName = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_SESSION['UserName']]);
$result = $stmt->fetch();


if(isset($_POST["submit"])){
    $sql = "UPDATE users SET
                 UserID = :UserID,
                 UserName = :UserName, 
                 UserSureName = :UserSureName,
              WHERE Email = :Email, 
              ";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':UserID', $_POST['UserID']);
      $stmt->bindParam(':UserName', $_POST['UserName']);
      $stmt->bindParam(':UserSureName', $_POST['UserSureName']);
      $stmt->bindParam(':Email', $_POST['Email']);
      $stmt->execute();
      header("Location: admin1.php");
  }

?>

    <form action="#" method="post">
        UserID:<?php var_dump($result['UserID']) ?> <input type="text" name="UserID" id="" value="<?php echo $result["UserID"] ?>"><br />
        UserName: <?php var_dump($result['UserName']) ?><input type="text" name="UserName" id="" value="<?php echo $result["UserName"] ?>"><br />
        UserSureName: <?php var_dump($result['UserSureName']) ?><input type="text" name="UserSureName" id="" value="<?php echo $result["UserSureName"] ?>"><br />
        Email: <?php var_dump($result['Email']) ?><input type="text" name="Email" id="" value="<?php echo $result["Email"] ?>"><br />
        <input type="submit" name="submit" value="veranderen">
    </form>
