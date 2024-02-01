<?php

require('connect.php');
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactus.css">
</head>
<body class="light-mode">

<?php

require('connect.php');


class comments{   
    private $conn;


    public function __construct($connection)
    {
        $this->conn = $connection;
     
    }  
    public function sendcommments($name,$email,$comment){
        $sql = "INSERT INTO comments (Name,Email,Comment) 
        VALUES ('$name','$email', '$comment')";

if ($this->conn->query($sql) == TRUE) {
    echo "Comment was sent!";
} else {
    echo "Error: " . $this->conn->error;
} 
}

public function closeConnection() {
        $this->conn->close();
    }


}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["message"];

   $comments = new comments($conn);
   $comments -> sendcommments($name,$email,$comment);  
   $comments -> closeConnection();
}
?>





    <header>
        <div class="d1">
            <div class="d2">
                <div class="menu-item">
                    <label for="Divisions"><a href="main.php" target="_blank"
                            style="text-decoration: none; color: inherit;">Back</a></label>
            
                </div>
               
            </div>

            <div class="logo" onclick="toggleDarkMode()">
                <img src="ufc.jpg" alt="UFC Logo">
            </div>

            <div class="menu-item1">
                <label for="about"><a href="aboutus.php" target="_blank"
                        style="text-decoration: none; color: inherit;">About Us</a></label>
                <label for="contact"><a href="contactus.php" target="_blank"
                        style="text-decoration: none; color: inherit;">Refresh</a></label>
            </div>
        </div>
    </header>
    <div></div>
    </div>
    </div>

    <section>
        <form id="contactForm" method ="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>
 
            <label for="message">Leave your comment:</label>
            <textarea id="message" name="message" rows="4" placeholder="Your Comment" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </section>

</body>
</html>
contactus.php
3 KB