<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin1.css">
    <title>Tritaco</title>
</head>
<body>

<?php
include ('connection.php');
if(isset($_SESSION['UserName'])) {
    echo " Welcome " . $_SESSION['UserName'];
} else {
    echo 'fout';
    header("Location: LoginUser.php");
}
?>


<?php if($_SESSION['UserName'] == 'admin'){?>

<div class="row"> <?php


$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();


foreach ($results as $row) { ?>
    <table class="">
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
<a href="UserEdit.php?p=<?php echo $row ['UserID'];?>" type="button" >Edit</a>


<?php } ?>
<?php } else {?>
    <?php 
    
        $sql = "SELECT * FROM users where UserName = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$_SESSION['UserName']]);
        $result = $stmt->fetch();

    ?>

<form action="#" method="post">
        UserID:<?php var_dump($result['UserID']) ?> <input type="text" name="UserID" id="" value="<?php echo $result["UserID"] ?>"><br />
        UserName: <?php var_dump($result['UserName']) ?><input type="text" name="UserName" id="" value="<?php echo $result["UserName"] ?>"><br />
        UserSureName: <?php var_dump($result['UserSureName']) ?><input type="text" name="UserSureName" id="" value="<?php echo $result["UserSureName"] ?>"><br />
        Email: <?php var_dump($result['Email']) ?><input type="text" name="Email" id="" value="<?php echo $result["Email"] ?>"><br />
</form>
    <?php } ?>


  

</body>
</html>