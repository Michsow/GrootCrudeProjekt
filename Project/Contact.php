<?php include "PHPfiles/connection.php" ?>
<?php include "PHPfiles/HeadFoot/header.php" ?>
  <main>
    <div class="break"></div>           
    <div class="break2"></div>
    <?php
     
      $message_sent = false;
      if(isset($_POST['email']) && $_POST['email'] != ''){
          
        if(filter_var($_POST['email'], 
        FILTER_VALIDATE_EMAIL)){
        
        
          $userName = $_POST['name'];
          $userEmail = $_POST['email'];
          $messageSubject = $_POST['subject'];
          $message = $_POST['message'];

          $to = "jwierzbicki@gmail.com";
          $body = "";

          $body .= "From: " .$userName. "\r\n";
          $body .= "Email: " .$userEmail. "\r\n";
          $body .= "Subject: " .$messageSubject. "\r\n";
          $body .= "Message: " .$message. "\r\n";

          mail($to,$messageSubject,$body);

          $message_sent = true;

        }



      }

    ?>
    <div class="container2">
    <?php  
    if ($message_sent):
    ?>

        <h3>Thanks, we'll be in touch</h3>

    <?php
      else:
    ?>
      <form action="Contact.php" method="POST" class="form2">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
        </form>
    </div>
    <?php
    endif;
    ?>
      
    </main>
    <?php include "PHPfiles/HeadFoot/footer.php" ?>