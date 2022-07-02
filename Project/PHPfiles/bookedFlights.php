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
            <td> <?php echo $row['id']."<br />\n";?>  </td>
            <td> <?php echo $row['flight_id']."<br />\n";?>  </td>
            <td> <?php echo $row['name']."<br />\n"; ?>   </td>
            <td> <?php echo $row['address']."<br />\n"; ?>   </td>
            <td> <?php echo $row['contact']."<br />\n"; ?>   </td>
        </tr>

    </table>
</div>
<a href="admin1bookedflight.php?p=<?php echo $row ['id'];?>" type="button" >Delete</a>



<?php } ?>
<?php } else {?>
    <?php 
    
        $sql = "SELECT * FROM booked_flight where name = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$_SESSION['name']]);
        $result = $stmt->fetch();

    ?>

<form action="#" method="post">
        flight number :<?php var_dump($result['flight_id']) ?> <input type="text" name="flight_id" id="" value="<?php echo $result["flight_id"] ?>"><br />
        UserName: <?php var_dump($result['name']) ?><input type="text" name="name" id="" value="<?php echo $result["name"] ?>"><br />
        UserSureName: <?php var_dump($result['address']) ?><input type="text" name="address" id="" value="<?php echo $result["address"] ?>"><br />
        Email: <?php var_dump($result['contact']) ?><input type="text" name="contact" id="" value="<?php echo $result["contact"] ?>"><br />
</form>
    <?php } ?>




</body>
</html>