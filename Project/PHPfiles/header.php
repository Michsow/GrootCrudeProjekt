<header>
        <div class="logo">
        <?php include "PHPfiles/connection.php" ?>     
        <?php
                              $data = $conn->query("SELECT * FROM infolocaties")->fetchAll();

                              foreach ($data as $row)
            ?>
        </div>
        <nav>
            <div class="home">
                <button class="button"  onclick="document.location=''">Home</button>
            </div>
            <div class="vacation">
                <button class="button" onclick="document.location='PHPfiles/Vacation.php'">Vacation</button>
            </div>
            <div class="about-us">
                <button class="button"  onclick="document.location=''">About Us</button>
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