<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
        exit();
        
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>  

<body>

  <h2>Hello <?php  echo $_SESSION['username'] ?></h2>
    
<label for="contact"><a href="logout.php" target="_blank"
                    style="text-decoration: none; color: inherit; font-weight: bold;" class="rg">log out</a></label>
</body>
</html>