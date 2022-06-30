<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin1.css">
    <title>Document</title>
</head>
<body>

<?php
include ('connection.php');
if(isset($_SESSION['UserName'])) {
    echo "Welcome" . $_SESSION['UserName'];
} else {
    echo 'fout';
    header("Location: LoginUser.php");
}
$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>


<?php if($result['UserName'] == '%admin%')?>

<div class="row"> <?php
$data = $conn->query("SELECT * FROM users")->fetchAll();

foreach ($data as $row) { ?>
    <table class="Table1Users">
        <tr>
            <th> Username </th>
            <th> UserSureName  </th>
            <th> Email </th>
        </tr>
        <tr>
            <td> <?php echo $row['UserName']."<br />\n";?>  </td>
            <td> <?php echo $row['UserSureName']."<br />\n"; ?>   </td>
            <td> <?php echo $row['Email']."<br />\n"; ?>   </td>
        </tr>

    </table>
</div>
<?php } ?>

<?php 
$sql = "SELECT * FROM users where UserID = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_GET['id']]);
$result = $stmt->fetch();


if(isset($_POST["submit"])){
    $sql = "UPDATE user SET
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

<form action="" method="post">
        UserID<input type="text" name="UserID" id="" value="<?php echo $result["UserID"] ?>"><br />
        UserName<input type="text" name="UserName" id="" value="<?php echo $result["UserName"] ?>"><br />
        UserSureName<input type="text" name="UserSureName" id="" value="<?php echo $result["UserSureName"] ?>"><br />
        Email<input type="text" name="Email" id="" value="<?php echo $result["Email"] ?>"><br />
        <input type="submit" name="submit" value="toevoegen">
</form>



</body>
</html>