
<?php
session_start();
require('connect.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
        exit();
        
}
$isadmin = false;

if($_SESSION['username'] == 'admin'){
     $isadmin = true;     
}
   

$g1 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM goatphotos WHERE Name = 'g1'"));
$g2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM goatphotos WHERE Name = 'g2'"));
$g3 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM goatphotos WHERE Name = 'g3'"));
$g4 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM goatphotos WHERE Name = 'g4'"));
$g5 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM goatphotos WHERE Name = 'g5'"));
$g6 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM goatphotos WHERE Name = 'g6'"));
$g7 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM goatphotos WHERE Name = 'g7'"));
$g8 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM goatphotos WHERE Name = 'g8'"));
$g9 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM goatphotos WHERE Name = 'g9'"));
$g10 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM goatphotos WHERE Name = 'g10'"));
 


$diaz = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM exitingfighters WHERE id = 1"));
$gaetheje = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM exitingfighters WHERE id = 2"));
$pereira = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM exitingfighters WHERE id = 3"));
$connor = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM exitingfighters WHERE id = 4"));
$ngannou = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM exitingfighters WHERE id = 5"));
$holloway = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM exitingfighters WHERE id = 6"));
$chandler = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM exitingfighters WHERE id = 7"));
$porier = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM exitingfighters WHERE id = 8"));
$tony = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM exitingfighters WHERE id = 9"));
$khamzat = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM exitingfighters WHERE id = 10"));
$olivera = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM exitingfighters WHERE id = 11"));
$volk = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM exitingfighters WHERE id = 12"));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<section id="section1">
<body class="bd"> 
    <div class="d1">  
        <div class="taulant"> 
            <div class="menu-item">
                <label for="Divisions"><a href="HW.php" target="_blank"
                        style="text-decoration: none; color: inherit;font-weight:bold;">Divisions</a></label>                
     <div class="submenu">

                    <a href="HW.php#section8" target="_blank" style="text-decoration: none; color:var(--secondary); background-color: var(--primary)">Flyweight</a>
                    <a href="HW.php#section7" target="_blank" style="text-decoration: none; color:var(--secondary); background-color: var(--primary)">Bantamweight</a>
                    <a href="HW.php#section6" target="_blank" style="text-decoration: none; color:var(--secondary); background-color: var(--primary)">Featherweight</a>
                    <a href="HW.php#section5" target="_blank" style="text-decoration: none; color:var(--secondary); background-color: var(--primary)">Lightweight</a>
                    <a href="HW.php#section4" target="_blank" style="text-decoration: none; color:var(--secondary); background-color: var(--primary)">Welterweight</a>
                    <a href="Hw.php#section3" target="_blank" style="text-decoration: none; color:var(--secondary); background-color: var(--primary)">Middleweight</a>
                    <a href="HW.php#section2" target="_blank" style="text-decoration: none; color:var(--secondary); background-color: var(--primary)">Lightheavyweight</a>
                    <a href="HW.php#section1" target="_blank" style="text-decoration: none; color:var(--secondary); background-color: var(--primary)">Heavyweight</a> 
                  </div>
            </div>
            <div class="menu-item">
                <label for="Exiting"><button id="exiting" onclick="change('section3')" style="font-weight: bold;">Most Exiting Fighters</a></label>
               
            </div>
            <label for="dashboard">
                <a href="dashboard.php" target="_blank" style="text-decoration: none; color: inherit; font-weight: bold; <?php echo $isadmin ? 'display:flex;' : 'display:none;'; ?>" class="rg">Dashboard</a>

        </div>

        <div class="foto" onclick="darkmode()">
            <img src="ufc.jpg" alt="UFC">
        </div>
 
        <div>
            <label for="about"><a href="aboutus.php" target="_blank"
                    style="text-decoration: none; color: inherit; font-weight: bold;" class="rg">About Us</a></label>
            <label for="contact"><a href="contactus.php" target="_blank"
                    style="text-decoration: none; color: inherit; font-weight: bold;" class="rg">Contact Us</a></label>
            <label for="profile"><a href="profile.php" target="_blank"
                    style="text-decoration: none; color: inherit; font-weight: bold;" class="rg">View profile</a></label>          
        </div>
    </div>      
    <div class="welcome"><div class="co"><h2>WELCOME TO OUR PAGE <?php echo $_SESSION['username'] ?></h2>
    <p>Explore the exciting world of UFC and discover the greatest fighters of all time</p>
<br><button id="continue" onclick="vazhdo('section2') ">Continue</button>
  </div> </div>
    </div>
</section>
    <section id="section2">
        <div class="space"></div>
   <div class="slider">
    <div class="col-1">
        <h2 id="h">The 10 greatest mma fighters of all time</h2>
        <button class="btn" onclick="prev()">Previous </button>
        <button class="btn " onclick="next()">Next</button>
    </div>
    
     <div class="imagebox">
        <img src="all2.jpg" class="fotot">
     </div>
    
      </div>
      </section>
     
      <section id="section3">
      <div class="space"></div>
   <div class="slider2">
    <div class="imagebox2">
        <img src="exiting.jpg" class="fotot2">
     </div>
    <div class="col-12">
        <h2 id="h2">Most exciting fighters to watch</h2>
        <button class="btn2" onclick="prev2()">Previous</button>
        <button class="btn2" onclick="next2()">Next</button>
    </div>
      </div>
      </section>
      <section id="ending" class="ending-section">
        <div class="ending-content">
            <h2>Thank You for Visiting!</h2>
            <p>We hope you enjoyed exploring the exciting world of UFC on our website. Feel free to continue your journey by checking out more sections.</p>
    
            
            </div>
    
            <p>Stay tuned for the latest updates and news from the UFC!</p>
        </div>
    </section> 
    <script>
     
     function vazhdo(section2){
        var sectionn = document.getElementById(section2);
      if (sectionn) {
        sectionn.scrollIntoView({ behavior: 'smooth' });
      }
    }


     function change(section3){
        var section = document.getElementById(section3);
      if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
      }
    }
     


    var sliderimg = document.querySelector('.fotot');
    var images = ['<?php echo $g1['Link'] ?>','<?php echo $g2['Link'] ?>','<?php echo $g3['Link'] ?>','<?php echo $g4['Link'] ?>','<?php echo $g5['Link'] ?>','<?php echo $g6['Link'] ?>','<?php echo $g7['Link'] ?>','<?php echo $g8['Link'] ?>','<?php echo $g9['Link'] ?>','<?php echo $g10['Link'] ?>'];
    let i =-1 ; 
    
    


function prev(){
    if(i<=-1){
return;
    }else
    if(i<=0) i=images.length; 
i--;

return setimg();
}
function next(){
   
    if(i>= images.length - 1) i = -1;
    i++;
   
    return setimg(); 
 
}

function list(){
    if (i === 0) {
        document.getElementById('h').innerHTML = "1. <?php echo $g1['Fighter']  ?>";
        } else if (i === 1) {
        document.getElementById('h').innerHTML = "2. <?php echo $g2['Fighter']  ?>";
    } else if (i === 2) {
        document.getElementById('h').innerHTML = "3. <?php echo $g3['Fighter']  ?>";
    } else if (i === 3) {
        document.getElementById('h').innerHTML = "4. <?php echo $g4['Fighter']  ?>";
    } else if (i === 4) {
        document.getElementById('h').innerHTML = "5. <?php echo $g5['Fighter']  ?>";
    }
    else if (i === 5) {
        document.getElementById('h').innerHTML = "6. <?php echo $g6['Fighter']  ?>";
    } else if (i === 6) {
        document.getElementById('h').innerHTML = "7. <?php echo $g7['Fighter']  ?>";
    } else if (i === 7) {
        document.getElementById('h').innerHTML = "8. <?php echo $g8['Fighter']  ?>";
    } else if (i === 8) {
        document.getElementById('h').innerHTML = "9. <?php echo $g9['Fighter']  ?>";
    } else if (i === 9) {
        document.getElementById('h').innerHTML = "10. <?php echo $g10['Fighter']  ?>";    
      
}     
}

     
function setimg(){
    sliderimg.setAttribute('src', images[i]);
    list();
}
  
//------------------------------------------------------------------------------------------------//

var sliderimg2 = document.querySelector('.fotot2');
    var images2 = ['<?php echo $diaz['Link'] ?>','<?php echo $gaetheje['Link'] ?>','<?php echo $pereira['Link'] ?> ','<?php echo $connor['Link']  ?>','<?php  echo $ngannou['Link']  ?>','<?php echo $holloway['Link']?>'
    ,'<?php echo $chandler['Link'] ?>','<?php echo $porier['Link']  ?>','<?php echo $tony['Link']  ?>','<?php echo $khamzat['Link'] ?>','<?php  echo  $olivera['Link']  ?>','<?php echo $volk['Link'] ?>'];
    let g =-1 ; 
              
function prev2(){
    if(g<=-1){
return;
    }else
    if(g<=0) g=images2.length; 
g--;

return setimg2();
}
function next2(){
   
    if(g>= images2.length - 1) g = -1;
    g++;  
   
    return setimg2(); 
 
}

function list2(){
    if (g === 0) {
        document.getElementById('h2').innerHTML = "<?php echo $diaz['Fighter']  ?>";
        } else if (g === 1) {
        document.getElementById('h2').innerHTML = "<?php echo $gaetheje['Fighter']  ?>";
    } else if (g === 2) {
        document.getElementById('h2').innerHTML = "<?php echo $pereira['Fighter']  ?>";
    } else if (g === 3) {
        document.getElementById('h2').innerHTML = "<?php echo $connor['Fighter']  ?>";
    } else if (g === 4) {   
        document.getElementById('h2').innerHTML = "<?php echo $ngannou['Fighter']  ?>";
    }
    else if (g === 5) {
        document.getElementById('h2').innerHTML = "<?php echo $holloway['Fighter']  ?>";
    } else if (g === 6) {
        document.getElementById('h2').innerHTML = "<?php echo $chandler['Fighter']  ?>";
    } else if (g === 7) {
        document.getElementById('h2').innerHTML = "<?php echo $porier['Fighter']  ?>";
    } else if (g === 8) {
        document.getElementById('h2').innerHTML = "<?php echo $tony['Fighter']  ?>";
    } else if (g === 9) {
        document.getElementById('h2').innerHTML = "<?php echo $khamzat['Fighter']  ?>";          
    }    
   else if (g === 10) {
        document.getElementById('h2').innerHTML = "<?php echo $olivera['Fighter']  ?>";          
}else if(g===11){
    document.getElementById('h2').innerHTML = "<?php echo $volk['Fighter']  ?>";    
}

}

    
function setimg2(){
    sliderimg2.setAttribute('src', images2[g]);
    list2();
}
  
 function darkmode(){
    document.body.classList.toggle("darktheme");
 }

    </script>
</body>

</html>