
<?php include "PHPfiles/connection.php" ?>
<?php include "PHPfiles/HeadFoot/header.php" ?>
  <main>
    <div class="break">           
    </div>
    <div class="search">
            <div class="Search_block">

            </div>
            <?php 
            if(isset($_POST['submit'])){
                $str=mysql_real_escape_string($conn, $_POST['str']);
                echo $sql="select * from infolocaties where title like '%str%' or   
                details like '%str%'";
                $res = mysql_query ($conn, $sql);
                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                      echo $row['Name'];
                      echo "<br></br>";
                    }
                }else {
                    echo "No data found";
                }
            }
            ?>

            <form method="post">
                <input type="textbox" placeholder="Search.." name="str" required/>
                <button type="submit">Search</button>
            </form>
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
            <div>
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