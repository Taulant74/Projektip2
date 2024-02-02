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
        <h2>Sign up</h2>

        <?php

require('connect.php');

class UserSignup {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function redirectToDashboard() {
        header("Location: dashboard.php");
        exit();
    }

    public function signUp($name, $password, $email, $gender, $birthdate) {

        $currentYear = date("Y");
        $birthYear = date("Y", strtotime($birthdate));
        $age = $currentYear - $birthYear;

        if(strlen($password)<8){
            echo "password must contain 8 characters";  
            return;
        }
        if(strlen($name)<4){
           echo "username must contain more than 4 characters";
           return;
        }
        if($age < 18 ){
           echo "you must be 18 or older to sign up"; 
           return;
        }
       

        $sql = "INSERT INTO users (Name, Password, Email, Gender, Birthdate) 
                VALUES ('$name', '$password', '$email', '$gender', '$birthdate')";

        if ($this->conn->query($sql) == TRUE) {
            echo "Signup successful!";
        } else {
            echo "Error: " . $this->conn->error;
        }
    }
  
    public function closeConnection() {
        $this->conn->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fullName"];
    $password = $_POST["regPassword"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthdate"];

    $userSignup = new UserSignup($conn);
    $userSignup->signUp($name, $password, $email, $gender, $birthdate);
    $userSignup->closeConnection();
}

?>

 
  
        <form method="post" id="registerForm">
            <input type="text" placeholder="Full Name" name="fullName" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="regPassword" required>
            <select name="gender" required>
                <option value="" name = "gender">Choose gender</option>
                <option value="m">Male</option>
                <option value="f">Female</option>
            </select>
            <input type="date" name="birthdate" required>
            <button type="submit" name="register"><b>Register</b></button>
        </form>

        <p>Ke nje llogari ? <br><a href="login.php" onclick="toggleForms()">Vazhdo</a></p>
    </div>
</body>

</html>
