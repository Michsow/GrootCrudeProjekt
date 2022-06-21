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
$sql = "SELECT * FROM album";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

?>

<?php $data = $conn->query("SELECT * FROM album WHERE ID=".$_GET['p'])->fetch();
 { ?><br>

<tr class="table1">
<td class="row1"><?php echo $data["titel"]; ?> </td> <br>
<td class="row2"><?php echo $data["Text_Details"]; ?> </td> <br>
<td class="row3"><?php echo $data["Ingredienten"]; ?> </td> <br>
<td class="row4"><?php echo $data["prijs"]; ?> </td> <br>
</tr>
<a href="editBTN.php?id=<?php echo $data["ID"]; ?>">edit</a>
<a href="delete.php?id=<?php echo $data["ID"]; ?>">delete</a> <br>
<?php 
}
?>

</body>
</html>