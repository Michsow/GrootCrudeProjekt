<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
$sql = "SELECT * FROM infolocaties";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>

<?php $data = $conn->query("SELECT * FROM booked_flight WHERE id=".$_GET['p'])->fetch();
 { ?><br>

<tr class="table1">
<td class="row1">name: <?php echo $data["name"]; ?> </td> <br>
<td class="row2">address: <?php echo $data["address"]; ?> </td> <br>
<td class="row3">contact: <?php echo $data["contact"]; ?> </td> <br>
</tr>
<a href="deletebooking.php?id=<?php echo $data["id"]; ?>"> delete </a> <br>
<?php 
}
?>

</body>
</html>