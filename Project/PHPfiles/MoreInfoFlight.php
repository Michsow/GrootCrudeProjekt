
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TriTaco</title>

    <!-- Bootstrap core CSS -->

    <style>
        details {
          padding: 4px;
          background-color: #eeeeee;
          border: none;
          box-shadow: 1px 1px 2px #bbbbbb;
          cursor: pointer;
        }

        details > p {
          background-color: #eeeeee;
          padding: 4px;
          margin: 0;
          box-shadow: 1px 1px 2px #bbbbbb;
        }
  </style>
  </head>
  <body>
<?php include "connection.php"?>
<?php
var_dump($_GET);
$data = $conn->query("SELECT * FROM infolocaties WHERE LocationID=".$_GET['p'])->fetch();
var_dump($data['LocationID']);
//foreach ($data as $row) {
  //echo $row ['titel']. " " .$row['artiest']. "<br >/\n";
//}


?>

<main class="mainP">
  <div>
      <div class="divPimg">
        <img class="imgP" src="img/<?php echo $data ['Photo'];?>" >
      </div>
        <div class="columndivP">
            <div class="text">
              <p>  <?php echo $data['Name'] ?>  <p>
            </div>
          <summary>Ingredienten</summary>
            <div class="text">
              <p>  <?php echo $data['Price'] ?>  <p>
            </div>
        </div>
  </div>

</main>

</body>

</html> 