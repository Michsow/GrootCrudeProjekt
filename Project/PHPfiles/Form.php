
<button class="buttonForm" onclick="document.getElementById('LoginForm').style.display='block'" style="width:auto;">Login</button>

<div id="LoginForm" class="modal">
  
  <form class="modal-content animate" action="PHPfiles/loginUser.php" method="post" name="LogInForm" id="loginun">
    <div class="imgcontainer">
      <span onclick="document.getElementById('LoginForm').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">

      <input type="text" placeholder="Enter Username" name="UserName" id="UserName" >
      

      <input type="password" placeholder="Enter Password" name="UserPassword" id="UserPassword" >
        
      <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

    </div>
    <p>  <a  href="PHPfiles/Register.php" style="color:black;" class="text">No account? Here you can make one.</a>  </p>
  </form>
</div>
