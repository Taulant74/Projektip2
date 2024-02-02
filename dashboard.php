<?php
session_start();
require('connect.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$query = "SELECT * FROM users";
$result0 = mysqli_query($conn, $query);

$query2 = "SELECT * FROM comments";
$result1 = mysqli_query($conn, $query2);



$result2 = mysqli_query($conn, "SELECT * FROM hwcontenders");
$result3 = mysqli_query($conn, "SELECT * FROM lhwcontenders");
$result4 = mysqli_query($conn, "SELECT * FROM mwcontenders");
$result5 = mysqli_query($conn, "SELECT * FROM wwcontenders");
$result6 = mysqli_query($conn, "SELECT * FROM lwcontenders");
$result7 = mysqli_query($conn, "SELECT * FROM ftwcontenders");
$result8 = mysqli_query($conn, "SELECT * FROM bwcontenders");
$result9 = mysqli_query($conn, "SELECT * FROM fwcontenders");

$c1 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 1"));
$c2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 2"));
$c3 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 3"));
$c4 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 4"));
$c5 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 5"));
$c6 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 6"));
$c7 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 7"));
$c8 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 8"));
$c9 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 9"));



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashh.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">

</head>
   
<body>
    <div class="menu">
        <h2>Welcome to Dashboard</h2>
        <button class ="back"><a href="main.php">back</button>
        <h2 id ="logout"><a href="logout.php">Log out</a></h2>
    </div>
    <hr>
    <div class="main">
        <div class="priv">
            <div class="users"><button class="btn" onclick="showSection('rg1');searchbar('f')">Users</button></div>
            <div class="fighters"><button class="btn" onclick="showSection('rg2');searchbar('t')">Fighters</button></div>
            <div class="comments"><button class="btn" onclick="showSection('rg3');searchbar('f')">Comments</button></div>
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
                    <?php while ($rows = mysqli_fetch_assoc($result0)) { ?>
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
            <div class="hw">
            <table class="hw">
            <th colspan="5"><h2>Heavyweight</h2></th>
        <tbody>
          <?php  
          for ($i = 1; $i <= 10 && $row2 = mysqli_fetch_assoc($result2); $i++) {
            if($i==1){    ?> 
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c1['Name'];?>(<?php echo $c1['Wins']. '-' .$c1['Losses'] . '-' . $c1['Draws'];?>)<br></td>
             <td style ="background-color:green;"><a href='editchamps.php?id=<?php echo $c1['ID'];?>'style ="color:white">Edit</a></td>
   
           <?php }   ?>     
      
        <tr>       
            <td class="ranks"><?php echo $i; ?></td>
            <td><?php echo $row2['Name']; ?> (<?php echo $row2['Wins'] . '-' . $row2['Losses'] . '-' . $row2['Draws']; ?>)</td>
            <td style ="background-color:green;"><a href='editfighters.php?id=<?php echo $row2['ID'];?>'style="color:white">Edit</a></td>
        </tr>
        <?php
        
    }  
        ?>    
        </tbody>
    </table>   
            </div>
    <div class="lhw">
    <table class="hw">
            <th colspan="5"><h2>LightHeavyweight</h2></th>
        <tbody>
          <?php  
          for ($j = 1; $j <= 10 && $row3 = mysqli_fetch_assoc($result3); $j++) {
            if($j==1){    ?> 
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c2['Name'];?>(<?php echo $c2['Wins']. '-' .$c2['Losses'] . '-' . $c2['Draws'];?>)<br></td>
             <td style = "background-color:green;"><a href='editchamps.php?id=<?php echo $c2['ID'];?>' style ="color:white">Edit</a></td>
   
                 
           <?php }   ?>     
      
        <tr>  
            <td class="ranks"><?php echo $j; ?></td>
            <td><?php echo $row3['Name']; ?> (<?php echo $row3['Wins'] . '-' . $row3['Losses'] . '-' . $row3['Draws']; ?>)</td>
            <td style = "background-color:green;"><a href='editfighters2.php?id=<?php echo $row3['ID'];?>'style = "color:white">Edit</a></td>
        </tr>
        <?php
        
    }  
        ?>
        </tbody>
    </table>   
            </div>

            <div class="mw">
    <table class="hw">
            <th colspan="5"><h2>Middleweight</h2></th>
        <tbody>
          <?php   
          for ($m = 1; $m <= 10 && $row4 = mysqli_fetch_assoc($result4); $m++) {
            if($m==1){    ?> 
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c3['Name'];?>(<?php echo $c3['Wins']. '-' .$c3['Losses'] . '-' . $c3['Draws'];?>)<br></td>
             <td style = "background-color:green;"><a href='editchamps.php?id=<?php echo $c3['ID'];?>'style ="color:white">Edit</a></td>
   

                 
           <?php }   ?>     
      
        <tr>
            <td class="ranks"><?php echo $m; ?></td>
            <td><?php echo $row4['Name']; ?> (<?php echo $row4['Wins'] . '-' . $row4['Losses'] . '-' . $row4['Draws']; ?>)</td>
            <td style = "background-color:green;"><a href='editfighters3.php?id=<?php echo $row4['ID'];?>' style="color:white">Edit</a></td>
        </tr>
        <?php
        
    }  
        ?>
        </tbody>
    </table>   
            </div>
            
            <div class="ww">
    <table class="hw">
            <th colspan="5"><h2>Welterweight</h2></th>
        <tbody>
          <?php   
          for ($w = 1; $w <= 10 && $row5 = mysqli_fetch_assoc($result5); $w++) {
            if($w==1){    ?> 
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c4['Name'];?>(<?php echo $c4['Wins']. '-' .$c4['Losses'] . '-' . $c4['Draws'];?>)<br></td>
             <td style = "background-color:green;"><a href='editchamps.php?id=<?php echo $c4['ID'];?>'style = "color:white">Edit</a></td>
   
                 
           <?php }   ?>     
      
        <tr>
            <td class="ranks"><?php echo $w; ?></td>
            <td><?php echo $row5['Name']; ?> (<?php echo $row5['Wins'] . '-' . $row5['Losses'] . '-' . $row5['Draws']; ?>)</td>
            
            <td style = "background-color:green;"><a href='editfighters4.php?id=<?php echo $row5['ID'];?>'style="color:white">Edit</a></td>
        </tr>
        <?php
        
    }  
        ?>
        </tbody>
    </table>   
            </div>       


            <div class="lw">
    <table class="hw">
            <th colspan="5"><h2>Lighweight</h2></th>
        <tbody>
          <?php   
          for ($l = 1; $l <= 10 && $row6 = mysqli_fetch_assoc($result6); $l++) {
            if($l==1){    ?> 
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c5['Name'];?>(<?php echo $c5['Wins']. '-' .$c5['Losses'] . '-' . $c5['Draws'];?>)<br></td>
             <td style = "background-color:green;"><a href='editchamps.php?id=<?php echo $c5['ID'];?>'style="color:white">Edit</a></td>


                 
           <?php }   ?>     
      
        <tr>
            <td class="ranks"><?php echo $l; ?></td>
            <td><?php echo $row6['Name']; ?> (<?php echo $row6['Wins'] . '-' . $row6['Losses'] . '-' . $row6['Draws']; ?>)</td>
            
            <td style = "background-color:green;"><a href='editfighters5.php?id=<?php echo $row6['ID'];?>'style="color:white">Edit</a></td>
        </tr>
        <?php
        
    }  
        ?>
        </tbody>
    </table>   
            </div>   

            <div class="ftw">
    <table class="hw">
            <th colspan="5"><h2>Featherweight</h2></th>
        <tbody>
          <?php   
          for ($f = 1; $f <= 10 && $row7= mysqli_fetch_assoc($result7); $f++) {
            if($f==1){    ?> 
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c6['Name'];?>(<?php echo $c6['Wins']. '-' .$c6['Losses'] . '-' . $c6['Draws'];?>)<br></td>
             <td style = "background-color:green;"><a href='editchamps.php?id=<?php echo $c6['ID'];?>'style="color:white">Edit</a></td>
                 
           <?php }   ?>     
      
        <tr>
            <td class="ranks"><?php echo $f; ?></td>
            <td><?php echo $row7['Name']; ?> (<?php echo $row7['Wins'] . '-' . $row7['Losses'] . '-' . $row7['Draws']; ?>)</td>
            
            <td style = "background-color:green;"><a href='editfighters6.php?id=<?php echo $row7['ID'];?>'style="color:white">Edit</a></td>
        </tr>
        <?php
        
    }  
        ?>
        </tbody>
    </table>   
            </div>   

            <div class="bw">
    <table class="hw">
            <th colspan="5"><h2>Bantamweight</h2></th>
        <tbody>
          <?php   
          for ($b = 1; $b<= 10 && $row8= mysqli_fetch_assoc($result8); $b++) {
            if($b==1){    ?> 
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c7['Name'];?>(<?php echo $c7['Wins']. '-' .$c7['Losses'] . '-' . $c7['Draws'];?>)<br></td>
             <td style = "background-color:green;"><a href='editchamps.php?id=<?php echo $c7['ID'];?>'style="color:white">Edit</a></td>
                 
           <?php }   ?>     
      
        <tr>
            <td class="ranks"><?php echo $b; ?></td>
            <td><?php echo $row8['Name']; ?> (<?php echo $row8['Wins'] . '-' . $row8['Losses'] . '-' . $row8['Draws']; ?>)</td>
            
            <td style = "background-color:green;"><a href='editfighters7.php?id=<?php echo $row8['ID'];?>'style="color:white">Edit</a></td>
        </tr>
        <?php
        
    }  
        ?>
        </tbody>
    </table>   
            </div>  

            <div class="fw">
    <table class="hw">
            <th colspan="5"><h2>Flyweight</h2></th>
        <tbody>
          <?php   
          for ($v = 1; $v<= 10 && $row9= mysqli_fetch_assoc($result9); $v++) {
            if($v==1){    ?> 
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c8['Name'];?>(<?php echo $c8['Wins']. '-' .$c8['Losses'] . '-' . $c8['Draws'];?>)<br></td>
             <td style = "background-color:green;"><a href='editchamps.php?id=<?php echo $c8['ID'];?>'style="color:white">Edit</a></td>
                 
           <?php }   ?>     
      
        <tr>
            <td class="ranks"><?php echo $v; ?></td>
            <td><?php echo $row9['Name']; ?> (<?php echo $row9['Wins'] . '-' . $row9['Losses'] . '-' . $row9['Draws']; ?>)</td>
            
            <td style = "background-color:green;"><a href='editfighters8.php?id=<?php echo $row9['ID'];?>'style="color:white">Edit</a></td>
        </tr>
        <?php
        
    }  
        ?>
        </tbody>
    </table>   
            </div> 


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
                    <?php while ($rows2 = mysqli_fetch_assoc($result1)) { ?>
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
   