<header>
        <div class="logo">
        <?php include "PHPfiles/connection.php" ?>     
        <?php
            
                  //$data = $conn->query("SELECT * FROM infolocaties")->fetchAll();
                  $data = $conn->query("SELECT * FROM infolocaties WHERE LocationID")->fetch();
                  var_dump($data);
                  
                    $dataRow = $conn->query("SELECT LocationID FROM infolocaties")->fetch();
                  var_dump($dataRow);
                  foreach  ($dataRow as $row)
            ?>
        </div>
        <nav>
            <div class="home">
                <button class="button">Home</button>
            </div>
            <div class="vacation">
                <button class="button">Vacation</button>
            </div>
            <div class="about-us">
                <button class="button">About Us</button>
            </div>
        </nav>
        <div class="search">
            <div class="Search_block">

            </div>
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Search</button>
            </form>
        </div>
        
    </header>