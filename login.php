<!DOCTYPE html>
<html>

<head>
    <title>Login/Register Form</title>
    <link rel="stylesheet" href="loginstyle.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Log in</h2>

        <?php
        require('connect.php');
        session_start();


       

        class login
        {
            private $conn;


            public function __construct($connection)
            {
                $this->conn = $connection;
            }

            public function redirecttoMain()
            {
                header("Location: main.php");
                exit();
            }
            public function redirectToDashboard()      
            {
                header("Location: dashboard.php");
                exit();
            }


          
            
            public function logintheuser($username, $password)
            {


                $username = mysqli_real_escape_string($this->conn, $username);
                $password = mysqli_real_escape_string($this->conn, $password);
 

                $query = "SELECT * FROM `users` WHERE Name='$username' and Password='$password'";
                $result = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
                $rows = mysqli_num_rows($result);

                
               
                if ($rows == 1) {
                    $_SESSION['username'] = $username;
                    $this->redirecttoMain();
                }


               
    
            }
        }

        $login = new login($conn);
      
          
       

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = isset($_POST['username']) ? $_POST['username'] : "";
            $password = isset($_POST['password']) ? $_POST['password'] : "";
 
             
        

            echo $username;
            echo $password;

            $login->logintheuser($username, $password);
        }     
        ?>

        <form method="post" id="loginForm">
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" name="login"><b>Login</b></button>
        </form>

        <p>Nuk ke llogari ?<br><br><a href="signup.php" onclick="toggleForms()">Regjistrohu</a></p>
    </div>
</body>

</html>
