<?php

require('connect.php');
session_start();

class CommentHandler {
    private $conn;

    public function __construct($connection)
    {
        $this->conn = $connection;
    }

    public function sendComment($name, $email, $comment)
    {
        $sql = "INSERT INTO comments (Name, Email, Comment) VALUES ('$name', '$email', '$comment')";

        if ($this->conn->query($sql) == TRUE) {
            echo "Comment was sent!";
        } else {
            echo "Error: " . $this->conn->error;
        }
    }

    public function closeConnection()
    {
        $this->conn->close();
    }
}

class ContactUsPage {
    private $commentHandler;

    public function __construct($commentHandler)
    {
        $this->commentHandler = $commentHandler;
    }

    public function generateHeader()
    {
        return '<head>
                    <title>Contact Us</title>
                    <link rel="stylesheet" href="contactus.css">
                </head>';
    }

    public function generateMenu()
    {
        return '<header>
                    <div class="d1">
                        <div class="d2">
                            <div class="menu-item">
                                <label for="Divisions"><a href="main.php" target="_blank" style="text-decoration: none; color: inherit;">Back</a></label>
                            </div>
                        </div>
                        <div class="logo" onclick="toggleDarkMode()">
                            <img src="ufc.jpg" alt="UFC Logo">
                        </div>
                        <div class="menu-item1">
                            <label for="about"><a href="aboutus.php" target="_blank" style="text-decoration: none; color: inherit;">About Us</a></label>
                            <label for="contact"><a href="contactus.php" target="_blank" style="text-decoration: none; color: inherit;">Refresh</a></label>
                        </div>
                    </div>
                </header>';
    }

    public function generateFormSection()
    {
        return '<section>
                    <form id="contactForm" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Your Name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Your Email" required>

                        <label for="message">Leave your comment:</label>
                        <textarea id="message" name="message" rows="4" placeholder="Your Comment" required></textarea>

                        <button type="submit" name="submit">Submit</button>
                    </form>
                </section>';
    }

    public function handleFormSubmission()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $comment = $_POST["message"];

            $this->commentHandler->sendComment($name, $email, $comment);
            $this->commentHandler->closeConnection();
        }
    }
}

$commentHandler = new CommentHandler($conn);
$contactUsPage = new ContactUsPage($commentHandler);

echo '<!DOCTYPE html>
        <html lang="en">
            ' . $contactUsPage->generateHeader() . '
            <body class="light-mode">
                ' . $contactUsPage->generateMenu() . '
                ' . $contactUsPage->generateFormSection() . '
                ' . $contactUsPage->handleFormSubmission() . '
            </body>
        </html>';
?>
