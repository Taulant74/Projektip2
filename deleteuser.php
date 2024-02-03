<?php
require('connect.php');
session_start();

class UserDeleter
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function deleteUser($id)
    {
        $delete = $this->conn->prepare("DELETE FROM `users` WHERE id = ?");
        $delete->bind_param("i", $id);

        if ($delete->execute()) {
            return true;
        } else {
            return false;
        }

        $delete->close();
    }
}

$userDeleter = new UserDeleter($conn);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($userDeleter->deleteUser($id)) {
        echo "User deleted successfully!";
    } else {
        echo "Error deleting user.";
    }
}

header("Location: dashboard.php");
exit();
?>
