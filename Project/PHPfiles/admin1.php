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
$sql = "SELECT * FROM infolocaties";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>

<?php $data = $conn->query("SELECT * FROM infolocaties WHERE LocationID=".$_GET['p'])->fetch();
 { ?><br>

<tr class="table1">
<td class="row1"><?php echo $data["Name"]; ?> </td> <br>
<td class="row2"><?php echo $data["Data"]; ?> </td> <br>
<td class="row3"><?php echo $data["About"]; ?> </td> <br>
<td class="row4">€<?php echo $data["Price"]; ?> </td> <br>
</tr>
<a href="editBTN.php?id=<?php echo $data["LocationID"]; ?>">edit</a>
<a href="delete.php?id=<?php echo $data["LocationID"]; ?>">delete</a> <br>
<?php 
}
?>

</body>
</html>