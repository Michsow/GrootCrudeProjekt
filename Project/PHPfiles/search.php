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
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
        <th>About</th>
			</tr>
			<tr>
				<td><?php echo $row->Name; ?></td>
        <td><?php echo $row->About;?></td>
			</tr>

		</table>
<?php 
	}	
		else {
			echo "Name Does not exist";
		}
  }

?>