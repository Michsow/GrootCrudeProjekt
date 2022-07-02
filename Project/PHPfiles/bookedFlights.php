<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TriTaco</title>
</head>
<body>


<?php 
include "connection.php";
$sql = "SELECT * FROM users where UserName = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_SESSION['UserName']]);
$result = $stmt->fetch();
echo $_SESSION['UserName'];

if( $_SESSION['UserName'] = "name"){
    
}
?>


</body>
</html>