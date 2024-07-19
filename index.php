<?php 
    session_start();    

    if(!isset($_SESSION['npm'])){
        header("Location:login.php");
        exit;
    } 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
  </head>
  <body>
    <p>
      <?= htmlspecialchars($_SESSION['npm']); ?>
    </p>
    
    <form action="./functions/cekLogin.php" method="post">
      <input type="submit" name="logout" value="Logout">
    </form>
    
  </body>
</html>
