<?php

session_start();
require('connect.php');

class UserProfile {
    private $conn;
    private $username;
    private $userData;

    public function __construct($connection, $username)
    {
        $this->conn = $connection;
        $this->username = $username;
        $this->fetchUserData();
    }

    private function fetchUserData()
    {
        $query = "SELECT * FROM users WHERE Name = '" . $this->username . "'";
        $result = mysqli_query($this->conn, $query);
        $this->userData = mysqli_fetch_assoc($result);
    }

    public function getCurrentAge()
    {
        $currentYear = date("Y");
        $birthYear = date("Y", strtotime($this->userData['Birthdate']));
        return $currentYear - $birthYear;
    }

    public function getGender()
    {
        return ($this->userData['Gender'] == 'm') ? 'Male' : 'Female';
    }

    public function displayProfile()
    {
        echo '<!DOCTYPE html>
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
                        <h1>' . $this->username . '</h1>
                        <h5>' . (($this->username == 'admin') ? "You are an admin" : "You are a user") . '</h5>
                        <p>Age : ' . $this->getCurrentAge() . '</p> 
                        <p>Gender : ' . $this->getGender() . '</p>
                        <p>Email : ' . $this->userData['Email']  . '</p>
                        
                        <ul>         
                            <button class="bt"><i class="fa-solid fa-right-from-bracket"><a href ="logout.php">Log out</a></i></button>
                        </ul>
                        <br><br>
                        <button class="bt1"><a href ="main.php">Back</a></i></button>
                    </div>
                </body>
                </html>';
    }
}

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$userProfile = new UserProfile($conn, $_SESSION['username']);
$userProfile->displayProfile();
?>
