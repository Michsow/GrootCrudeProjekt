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


$sql = "SELECT * FROM booked_flight";
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll();


foreach ($results as $row) { ?>
    <table class="">
        <tr>
            <th> flight number: </th>
            <th> name  </th>
            <th> address </th>
            <th> contact </th>
        </tr>
        <tr>
            <td> <?php echo $row['flight_id']."<br />\n";?>  </td>
            <td> <?php echo $row['name']."<br />\n"; ?>   </td>
            <td> <?php echo $row['address']."<br />\n"; ?>   </td>
            <td> <?php echo $row['contact']."<br />\n"; ?>   </td>
        </tr>

    </table>
</div>
<a href="deletebooking.php?p=<?php echo $row ['flight_id'];?>" type="button" >Delete</a>



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