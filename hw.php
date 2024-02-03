<?php 
require('connect.php'); 
session_start(); 



$hwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'hwchamp'"));
$lhwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'lhwchamp'"));
$mwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'mwchamp'"));
$wwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'wwchamp'"));
$lwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'lwchamp'"));
$ftwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'ftwchamp'"));
$bwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'bwchamp'"));
$fwc = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM photos WHERE Name = 'fwchamp'"));

$c1 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 1"));
$c2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 2"));
$c3 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 3"));
$c4 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 4"));
$c5 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 5"));
$c6 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 6"));
$c7 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 7"));
$c8 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 8"));
$c9 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM champs WHERE ID = 9"));

$result2 = mysqli_query($conn, "SELECT * FROM hwcontenders");
$result3 = mysqli_query($conn, "SELECT * FROM lhwcontenders");  
$result4 = mysqli_query($conn, "SELECT * FROM mwcontenders");
$result5 = mysqli_query($conn, "SELECT * FROM wwcontenders");
$result6 = mysqli_query($conn, "SELECT * FROM lwcontenders");
$result7 = mysqli_query($conn, "SELECT * FROM ftwcontenders");
$result8 = mysqli_query($conn, "SELECT * FROM bwcontenders");
$result9 = mysqli_query($conn, "SELECT * FROM fwcontenders");

 


?>  
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="HW.css">
</head>

<body>
<section id="section1">  
    <div class="space"><h2>Heavyweight</h2><button class="back"><a href="Main.php">back</a></button></div>
    <table class="hw">
        <tbody>
          <?php  
          for ($i = 1; $i <= 10 && $row2 = mysqli_fetch_assoc($result2); $i++) {
            if($i==1){    ?> 
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c1['Name'];?>(<?php echo $c1['Wins']. '-' .$c1['Losses'] . '-' . $c1['Draws'];?>)<br><img src="<?php echo $hwc['Link'] ?>" alt=""></td>

                 
           <?php }   ?>     
      
        <tr>
            <td class="ranks"><?php echo $i; ?></td>
            <td><?php echo $row2['Name']; ?> (<?php echo $row2['Wins'] . '-' . $row2['Losses'] . '-' . $row2['Draws']; ?>)</td>
        </tr>
        <?php
        
    }
        ?>
        </tbody>
    </table>
</section>

<br><br>
<section id="section2">
<div class="space"><h2>LightHeavyweight</h2><button class="back"><a href="Main.php">back</a></button></div>
    <table class="hw">
        <tbody>
        
        <?php    for ($g = 1; $g <= 10 && $row3 = mysqli_fetch_assoc($result3); $g++) {
            if($g==1){    ?>
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c2['Name'];?>(<?php echo $c2['Wins']. '-' .$c2['Losses'] . '-' . $c2['Draws'];?>)<br><img src="<?php echo $lhwc['Link'] ?>" alt=""></td>

               
           <?php }   ?>     
    
        <tr>
            <td class="ranks"><?php echo $g; ?></td>
            <td><?php echo $row3['Name']; ?> (<?php echo $row3['Wins'] . '-' . $row3['Losses'] . '-' . $row3['Draws']; ?>)</td>
        </tr>
        <?php
        }
         
        ?>
        </tbody>
    </table>

</section> 
<br><br> 
<section id="section3">
<div class="space"><h2>Middleweight</h2><button class="back"><a href="Main.php">back</a></button></div>
    <table class="hw">
        <tbody>
        
        <?php    for ($j = 1; $j <= 10 && $row4 = mysqli_fetch_assoc($result4); $j++) {
            if($j==1){    ?>
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c3['Name'];?>(<?php echo $c3['Wins']. '-' .$c3['Losses'] . '-' . $c3['Draws'];?>)<br><img src="<?php echo $mwc['Link'] ?>" alt=""></td>

               
           <?php }   ?>     
    
        <tr>
            <td class="ranks"><?php echo $j; ?></td>
            <td><?php echo $row4['Name']; ?> (<?php echo $row4['Wins'] . '-' . $row4['Losses'] . '-' . $row4['Draws']; ?>)</td>
        </tr>
        <?php
        }
         
        ?>
        </tbody>
    </table>
</section>
<br><br>
<section id="section4">

<div class="space"><h2>Welterweight</h2><button class="back"><a href="Main.php">back</a></button></div>
    <table class="hw">
        <tbody>
            
        <?php    for ($l = 1; $l <= 10 && $row5 = mysqli_fetch_assoc($result5); $l++) {
            if($l==1){    ?>
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c4['Name'];?>(<?php echo $c4['Wins']. '-' .$c4['Losses'] . '-' . $c4['Draws'];?>)<br><img src="<?php echo $wwc['Link']  ?>" alt=""></td>

               
           <?php }   ?>     
    
        <tr>
            <td class="ranks"><?php echo $l; ?></td>
            <td><?php echo $row5['Name']; ?> (<?php echo $row5['Wins'] . '-' . $row5['Losses'] . '-' . $row5['Draws']; ?>)</td>
        </tr>
        <?php
        }
         
        ?>
        </tbody>
    </table>

</section>
<br><br>
<section id="section5">
<div class="space"><h2>Lightweight</h2><button class="back"><a href="Main.php">back</a></button></div>
    <table class="hw">
        <tbody>
        
        <?php    for ($t = 1; $t <= 10 && $row6 = mysqli_fetch_assoc($result6); $t++) {
            if($t==1){    ?>
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c5['Name'];?>(<?php echo $c5['Wins']. '-' .$c5['Losses'] . '-' . $c5['Draws'];?>)<br><img src="<?php echo $lwc['Link']  ?>" alt=""></td>

               
           <?php }   ?>     
    
        <tr>
            <td class="ranks"><?php echo $t; ?></td>
            <td><?php echo $row6['Name']; ?> (<?php echo $row6['Wins'] . '-' . $row6['Losses'] . '-' . $row6['Draws']; ?>)</td>  
        </tr>
        <?php
        }
         
        ?>
        </tbody>
    </table>
 
</section>
<br><br>
<section id="section6">

<div class="space"><h2>Featherweight</h2><button class="back"><a href="Main.php">back</a></button></div>
    <table class="hw">
        <tbody>
        
        <?php    for ($u = 1; $u <= 10 && $row7 = mysqli_fetch_assoc($result7); $u++) { 
            if($u==1){    ?>
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c6['Name'];?>(<?php echo $c6['Wins']. '-' .$c6['Losses'] . '-' . $c6['Draws'];?>)<br><img src="<?php  echo $ftwc['Link']  ?>" alt=""></td>

               
           <?php }   ?>     
    
        <tr>
            <td class="ranks"><?php echo $u; ?></td>
            <td><?php echo $row7['Name']; ?> ( <?php echo $row7['Wins'] . '-' . $row7['Losses'] . '-' . $row7['Draws']; ?>)</td>
        </tr>   
        <?php
        }
         
        ?>
        </tbody>
    </table>
 
</section>
<br><br>
<section id="section7">
   
<div class="space"><h2>Bantamweight</h2><button class="back"><a href="Main.php">back</a></button></div>
    <table class="hw">
        <tbody>
    
        <?php    for ($v = 1; $v <= 10 && $row8 = mysqli_fetch_assoc($result8); $v++) { 
            if($v==1){    ?>
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c7['Name'];?>(<?php echo $c7['Wins']. '-' .$c7['Losses'] . '-' . $c7['Draws'];?>)<br><img src="<?php echo $bwc['Link']   ?>" alt=""></td>

               
           <?php }   ?>     
    
        <tr>
            <td class="ranks"><?php echo $v; ?></td>
            <td><?php echo $row8['Name']; ?> ( <?php echo $row8['Wins'] . '-' . $row8['Losses'] . '-' . $row8['Draws']; ?>)</td>
        </tr>   
        <?php
        }
         
        ?>
        </tbody>
    </table>
 
</section>
<br><br>
<section id="section8">
     
<div class="space"><h2>Flyweight</h2><button class="back"><a href="Main.php">back</a></button></div>
    <table class="hw">
        <tbody>
    
        <?php    for ($o = 1; $o <= 10 && $row9 = mysqli_fetch_assoc($result9); $o++) { 
            if($o==1){    ?>
             <td class ="jj1">C</td>
             <td class = "jj"><?php echo $c8['Name'];?>(<?php echo $c8['Wins']. '-' .$c8['Losses'] . '-' . $c8['Draws'];?>)<br><img src=" <?php  echo $fwc['Link']  ?>  " alt=""></td>

               
           <?php }   ?>     
    
        <tr>
            <td class="ranks"><?php echo $o; ?></td>
            <td><?php echo $row9['Name']; ?> ( <?php echo $row9['Wins'] . '-' . $row9['Losses'] . '-' . $row9['Draws']; ?>)</td>
        </tr>   
        <?php
        }
         
        ?>
        </tbody>
    </table>

</section>
</body>
</html>