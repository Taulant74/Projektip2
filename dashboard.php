<?php
session_start();
require('connect.php');

class Dashboard {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getUsers() {
        $query = "SELECT * FROM users";
        return mysqli_query($this->conn, $query);
    }

    public function getComments() {
        $query = "SELECT * FROM comments";
        return mysqli_query($this->conn, $query);
    }

    public function getFighters($tableName) {
        $query = "SELECT * FROM $tableName";
        return mysqli_query($this->conn, $query);
    }

    public function getChampion($championId) {
        $query = "SELECT * FROM champs WHERE ID = $championId";
        return mysqli_fetch_assoc(mysqli_query($this->conn, $query));
    }
}  

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$dashboard = new Dashboard($conn);

$usersResult = $dashboard->getUsers();
$commentsResult = $dashboard->getComments();

$fightersTables = ['hwcontenders', 'lhwcontenders', 'mwcontenders', 'wwcontenders', 'lwcontenders', 'ftwcontenders', 'bwcontenders', 'fwcontenders'];
$championIds = [1, 2, 3, 4, 5, 6, 7, 8, 9];

$fightersResults = [];
$champions = [];

foreach ($fightersTables as $table) {
    $fightersResults[] = $dashboard->getFighters($table);
}

foreach ($championIds as $championId) {
    $champions[] = $dashboard->getChampion($championId);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styledash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <div class="menu">
        <h2 id="hh">Welcome to Dashboard</h2>
        <button class="back"><a href="main.php">back</a></button>
        <h2 id="logout"><a href="logout.php">Log out</a></h2>
    </div>
    <hr>
    <div class="main">
        <div class="priv">
            <div class="users"><button class="btn" onclick="showSection('rg1');searchbar('f')"><h2>Users</h2></button></div>
            <div class="fighters"><button class="btn" onclick="showSection('rg2');searchbar('t')"><h2>Fighters</h2></button></div>
            <div class="comments"><button class="btn" onclick="showSection('rg3');searchbar('f')"><h2>Comments</h2></button></div>
        </div>
        <div class="rg1">
            <div class="userstable">
                <table class="ut">
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
                    <?php while ($rows = mysqli_fetch_assoc($usersResult)) { ?>
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

        <div class="rg2">
            <?php foreach ($fightersTables as $index => $table) { ?>
                <div class="<?php echo $table; ?>">
                    <table class="hw">
                        <th colspan="4"><h2><?php echo $table; ?></h2></th>
                        <tbody>
                            <?php
                            for ($i = 1; $i <= 10 && $row = mysqli_fetch_assoc($fightersResults[$index]); $i++) {
                                if ($i == 1) { ?>
                                    <td class="jj1">C</td>
                                    <td class="jj"><?php echo $champions[$index]['Name']; ?>(<?php echo $champions[$index]['Wins'] . '-' . $champions[$index]['Losses'] . '-' . $champions[$index]['Draws']; ?>)<br></td>
                                    <td style="background-color:green;"><a href='editchamps.php?id=<?php echo $champions[$index]['ID']; ?>' style="color:white">Edit</a></td>
                                <?php } ?>
                                <tr>
                                    <td class="ranks"><?php echo $i; ?></td>
                                    <td><?php echo $row['Name']; ?> (<?php echo $row['Wins'] . '-' . $row['Losses'] . '-' . $row['Draws']; ?>)</td>
                                    <td style="background-color:green;"><a href='editfighters<?php echo $index + 1; ?>.php?id=<?php echo $row['ID']; ?>' style="color:white">Edit</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div>

        <div class="rg3">          
            <div class="commentstable">
                <table>
                    <tr>
                        <th colspan="5"><h2>Users's Comments</h2></th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th class="cm">Comments</th>
                    </tr>
                    <?php while ($rows2 = mysqli_fetch_assoc($commentsResult)) { ?>
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

    <script>
        function showSection(sectionId) {
            const elements = document.querySelectorAll('.rg1, .rg2, .rg3');

            elements.forEach(element => {
                if (element.classList.contains('rg2')) {
                    element.style.display = sectionId === 'rg2' ? 'grid' : 'none';
                    element.style.gridTemplateColumns = sectionId === 'rg2' ? 'repeat(4, 1fr)' : 'auto';
                    element.style.gridTemplateRows = sectionId === 'rg2' ? 'repeat(2, 1fr)' : 'auto';
                } else {
                    element.style.display = element.classList.contains(sectionId) ? 'flex' : 'none';
                }
            });
        }
    </script>
</body>

</html>
