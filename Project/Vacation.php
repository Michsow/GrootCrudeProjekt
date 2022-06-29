
<?php include "PHPfiles/connection.php" ?>
<?php include "PHPfiles/HeadFoot/header.php" ?>
  <main>
    <div class="break">           
    </div>
    <div class="search">
            <div class="Search_block">
              <form method="post" class="form"> 
              <input type="text" name="search">
              <input type="submit" name="submit" class = "button">
            </div>
            <?php
$con = new PDO("mysql:host=localhost;dbname=tritacosql",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `infolocaties` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br>
		<table>
			<tr>
				<th>Your Results: </th>
			</tr>
			<tr>
				<td><?php echo $row->Name; ?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else {
			echo "Name Does not exist";
		}


  }

?>
        </div>
    <div class="break2">
    </div>  
          <div class="main-vacation">
            <?php
                  $data = $conn->query("SELECT * FROM infolocaties")->fetchAll();

                  foreach ($data as $row) {
                    //echo $row ['titel']. " " .$row['artiest']. "<br >/\n";
                  //}
            ?>
            <div class="hmmm">
              <div class="centering">
                <img  src="img/<?php echo $row ['Photo'];?>" alt="Card image cap" class="img-vacation">
                <div>
                  <p ><?php echo $row ['Name'];?></p>
                  <p >€<?php echo $row ['Price'];?></p>
                  <div>
                    <div>
                      <a href="PHPfiles/MoreInfoFlight.php?p=<?php echo $row ['LocationID'];?>" ">View</a>
                      <a href="PHPfiles/admin1.php?p=<?php echo $row ['LocationID'];?>" type="button" >Edit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
    </main>
    <?php include "PHPfiles/HeadFoot/footer.php" ?>
