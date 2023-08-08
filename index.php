<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if(isset($_SESSION["userid"])){
  ?>
<li?><a href="#"><?php echo $_SESSION["useruna"];?></a></li>
<li><a href="includes/logout.inc.php">LOGOUT</a></li>
<?php
}
?>
<div class="wrapper">
    <h2>SIGN UP</h2>
    <form action="includes/signup.inc.php"method="post">
      <div class="input-box">
        <input type="text" name ="fna"placeholder="First Name" required>
      </div>
      <div class="input-box">
        <input type="text"name ="lna" placeholder="Last Name" required>
      </div>
      <div class="input-box">
        <input type="text" name ="email" placeholder="Email" required>
      </div>
      <div class="input-box">
        <input type="text" name ="una" placeholder="User Name" required>
      </div>
      
      <div class="input-box">
        <input type="password"name ="pwd" placeholder="Create password" required>
      </div>
      
     
      <div class="input-box button">
      <input type="Submit" name="submit" value="SIGN UP">
      </div>
      
    </form>
  </div>
  <div> 

  </div>

  <div class="wrapper">
    <h2>LOGIN</h2>
    <form action="includes/login.inc.php"method="post">
      
      
      <div class="input-box">
        <input type="text" placeholder="Email" required>
      </div>
      
      
      <div class="input-box">
        <input type="password" placeholder="password" required>
      </div>
      
     
      <div class="input-box button">
        <input type="Submit" name="submit" value="LOGIN">
      </div>
      
    </form>
  </div>
</body>
</html>