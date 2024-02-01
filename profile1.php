<?php
session_start();
require('connect.php');
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
 }

$query = "SELECT * FROM users WHERE Name = '" . $_SESSION['username'] . "'";
$result = mysqli_query($conn, $query);    
$final = mysqli_fetch_assoc($result);  

$currentYear = date("Y");
$birthYear = date("Y", strtotime($final['Birthdate']));
$age = $currentYear - $birthYear;

if ($final['Gender'] == 'm') {
  $gender = 'Male';
}
if ($final['Gender'] == 'f') {
  $gender = 'Female';
}
 
  

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/d1341f9b7a.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="profile1.css">
    <title>Personal WebSite</title>
  </head>
  <body>
    <div class="box">   
      <img src="profile.jpg" alt="" class="box-img">
      <h1><?php echo $_SESSION['username'] ?></h1>
      <h5>
        <?php if($_SESSION['username'] == 'admin'){
          echo "You are an admin";
        } else {
          echo "You are a user";
        }    
        ?>
      </h5>
      <p>Age : <?php echo $age; ?></p> 
      <p>Gender : <?php echo $gender; ?></p>
      <p>Email : <?php echo $final['Email']  ?></p>
      <ul>   
        <button class="bt"><i class="fa-solid fa-right-from-bracket"><a href ="logout.php">Log out</a></i></button>
      </ul>
    </div>
  </body>
</html>