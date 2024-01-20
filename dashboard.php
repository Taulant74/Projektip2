<?php
session_start();
require('connect.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
        exit();
        
}


$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

$query2 = "SELECT * FROM comments";
$result2 = mysqli_query($conn, $query2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleofdash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
   
</head>
<body>
    <div class="menu">
        <h2>Welcome to Dashboard</h2>
        <div class="searchbar">
            <input id="search" type="search" placeholder="Search...">
            <button type="submit" id="sub">Go</button>   
        </div>
        <h2><a href="logout.php">log out</a></h2>
    </div>
    <hr>
    <div class="main">
        <div class="priv">
            <div class="users"><button class="btn" onclick="showSection('rg1')">users</button></div>
            <div class="fighters"><button class="btn" onclick="showSection('rg2')">fighters</button></div>
            <div class="comments"><button class="btn" onclick="showSection('rg3')">comments</button></div>
        </div>
        <div class="rg1">
            <div class="userstable">
                <table>
                    <tr>
                        <th colspan="5"><h2>Users</h2></th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Birthday</th>
                        <th>Options</th>
                    </tr>
                    <?php 
                    while ($rows = mysqli_fetch_assoc($result)) { 
                        ?>
                        <tr>
                            <td><?php echo $rows['id']; ?></td>  
                            <td><?php echo $rows['Name']; ?></td>
                            <td><?php echo $rows['Email']; ?></td>
                            <td><?php echo $rows['Gender']; ?></td>
                            <td><?php echo $rows['Birthdate']; ?></td>
                            <td><a href='deleteuser.php?id=<?php echo $rows['id']; ?>'>Delete</a></td>

                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="rg2"></div>
        <div class="rg3">
        <div class="commentstable">
                <table>
                    <tr>              
                        <th colspan="5"><h2>Comments</h2></th>
                    </tr>
                    <tr>   
                        <th>Name</th>
                        <th>Email</th>
                        <th class ="cm">Comments</th>
                    </tr>  
                    <?php 
                    while ($rows2 = mysqli_fetch_assoc($result2)) { 
                        ?>
                        <tr>
                            <td><?php echo $rows2['Name']; ?></td>
                            <td><?php echo $rows2['Email']; ?></td>
                            <td><?php echo $rows2['Comment']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>   
        </div>
        </div>
    </div>

    <script>
        function showSection(sectionId) {
            let sections = ['rg1', 'rg2', 'rg3'];
            sections.forEach(function (section) {
                let element = document.getElementsByClassName(section)[0];
                if (section === sectionId) {
                    element.style.display = 'flex';
                } else {
                    element.style.display = 'none';
                }
            });
        }
    </script>
</body>
</html>
