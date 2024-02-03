<?php
session_start();
require('connect.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fighterId = $_POST['fighter_id'];
    $newName = $_POST['new_name'];
    $newWins = $_POST['new_wins'];
    $newLosses = $_POST['new_losses'];
    $newDraws = $_POST['new_draws'];

    
    $updateQuery = "UPDATE hwcontenders SET Name='$newName', Wins='$newWins', Losses='$newLosses', Draws='$newDraws' WHERE ID=$fighterId";
    mysqli_query($conn, $updateQuery);
}

$fighterId = $_GET['id'];
$query = "SELECT * FROM hwcontenders WHERE ID=$fighterId";
$result = mysqli_query($conn, $query);
$fighter = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Fighters</title>
    <link rel="stylesheet" href="dashh.css">
</head>

<body>
    <div class="menu">
        <h2>Edit Fighters</h2>
        <h2><a href="logout.php">Log out</a></h2>
    </div>
    <hr>
    <div class="main">
        <form method="post" action="">
            <label for="new_name">Fighter Name:</label>
            <input type="text" name="new_name" value="<?php echo $fighter['Name']; ?>" required>

            <label for="new_wins">Fighter Wins:</label>
            <input type="text" name="new_wins" value="<?php echo $fighter['Wins']; ?>" required>

            <label for="new_losses">Fighter Losses:</label>
            <input type="text" name="new_losses" value="<?php echo $fighter['Losses']; ?>" required>

            <label for="new_draws">Fighter Draws:</label>
            <input type="text" name="new_draws" value="<?php echo $fighter['Draws']; ?>" required>

            <input type="hidden" name="fighter_id" value="<?php echo $fighter['ID']; ?>">

            <input type="submit" value="Update Fighters">
            <br><br>
            <button><a href="dashboard.php">back</a></button>
        </form>
    </div>
</body>

</html>
