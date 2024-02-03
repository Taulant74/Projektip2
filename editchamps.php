<?php
session_start();
require('connect.php');
    
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
} 



$hwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'hwchamp'"));
$lhwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'lhwchamp'"));
$mwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'mwchamp'"));
$wwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'wwchamp'"));
$lwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'lwchamp'"));
$ftwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'ftwchamp'"));
$bwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'bwchamp'"));
$fwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'fwchamp'"));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $champId = $_POST['champ_id'];
    $newName = $_POST['new_name'];
    $newWins = $_POST['new_wins'];
    $newLosses = $_POST['new_losses'];
    $newDraws = $_POST['new_draws'];
    $newlink = $_POST['new_link'];  

    $updateQuery = "UPDATE champs SET Name='$newName', Wins='$newWins', Losses='$newLosses', Draws='$newDraws' WHERE ID=$champId";
    mysqli_query($conn, $updateQuery);
    $updatephoto = "UPDATE photos SET Link='$newlink' WHERE ID=$champId";
    mysqli_query($conn, $updatephoto);
   
}

$champId = $_GET['id'];
$champ = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID=$champId"));
$photo = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE id = $champId "));


?>

<!DOCTYPE html>  
<html lang="en">

<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Fighters</title>
</head>

<body>
    <div class="menu">
        <h2>Edit Fighters</h2>
        <h2><a href="logout.php">Log out</a></h2>
    </div>
    <hr>
    <div class="main">
        <form method="post" action="">
        <img src="<?php echo $photo['Link'];?>" alt="" style="width: 300px; height: 250px;">
        <button onclick="link()">Change Photo</button>
        <br><br>
        <div id ="link" style = "display:none;"> 
        <label for="new_link">Enter photo link:</label>
        <input type="text" name="new_link" value="" required>  
        <input type="submit" value="Update Link">    
        </div>
       <br>
       <br> 
            <label for="new_name"> Name:</label>
            <input type="text" name="new_name" value="<?php echo $champ['Name']; ?>" required>

            <label for="new_wins"> Wins:</label>
            <input type="text" name="new_wins" value="<?php echo $champ['Wins']; ?>" required>

            <label for="new_losses"> Losses:</label>
            <input type="text" name="new_losses" value="<?php echo $champ['Losses']; ?>" required>

            <label for="new_draws"> Draws:</label>
            <input type="text" name="new_draws" value="<?php echo $champ['Draws']; ?>" required>

            <input type="hidden" name="champ_id" value="<?php echo $champ['ID']; ?>">

            <input type="submit" value="Update Fighters">
            <br><br>  
            <button><a href="dashboard.php">back</a></button>
        </form>
    </div>

    <script> 
  function link(){
    document.querySelector('#link').style.display = 'block';
  
  }

  
  </script>
</body>

</html>
