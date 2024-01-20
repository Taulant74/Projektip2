
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
        exit();
        
}
$isadmin = false;

if($_SESSION['username'] == 'admin'){
     $isadmin = true;     
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="mainstyle.css">
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
            <label for="contact"><a href="contactus.html" target="_blank"
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
    var images = ['jon.jpg','gsp.jpg','dj.jpg','khabib.jpeg','dc.jpg','silva.jpg','volk.jpg','usman.jpg','cejudo.jpg','connorm.jpg'];
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
        document.getElementById('h').innerHTML = "1. Jon Jones";
        } else if (i === 1) {
        document.getElementById('h').innerHTML = "2. George Saint Pierre";
    } else if (i === 2) {
        document.getElementById('h').innerHTML = "3. Demetrious Johnson";
    } else if (i === 3) {
        document.getElementById('h').innerHTML = "4. Khabib Nurmagomedov";
    } else if (i === 4) {
        document.getElementById('h').innerHTML = "5. Daniel Cormier";
    }
    else if (i === 5) {
        document.getElementById('h').innerHTML = "6. Anderson Silva";
    } else if (i === 6) {
        document.getElementById('h').innerHTML = "7. Alexander Volkanovski";
    } else if (i === 7) {
        document.getElementById('h').innerHTML = "8. Kamaru Usman";
    } else if (i === 8) {
        document.getElementById('h').innerHTML = "9. Henry Cejudo";
    } else if (i === 9) {
        document.getElementById('h').innerHTML = "10. Connor McGregor";    
      
}     
}

    
function setimg(){
    sliderimg.setAttribute('src', images[i]);
    list();
}
  
//------------------------------------------------------------------------------------------------//

var sliderimg2 = document.querySelector('.fotot2');
    var images2 = ['diaz.jpg','gaetheje.jpg','pereira.jpg','connorm.jpg','ngannou.jpg','holloway.jpg','chandler.jpg','porier.jpg','tony.webp','khamzat.webp','olivera.jpg','volk.jpg'];
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
        document.getElementById('h2').innerHTML = "Nate Diaz";
        } else if (g === 1) {
        document.getElementById('h2').innerHTML = "Justin Gaethejee";
    } else if (g === 2) {
        document.getElementById('h2').innerHTML = "Alex Pereira";
    } else if (g === 3) {
        document.getElementById('h2').innerHTML = "Connor McGregor";
    } else if (g === 4) {   
        document.getElementById('h2').innerHTML = "Francis Ngannou";
    }
    else if (g === 5) {
        document.getElementById('h2').innerHTML = "Max Holloway";
    } else if (g === 6) {
        document.getElementById('h2').innerHTML = "Michael Chandler";
    } else if (g === 7) {
        document.getElementById('h2').innerHTML = "Dustin Porier";
    } else if (g === 8) {
        document.getElementById('h2').innerHTML = "Tony Ferguson";
    } else if (g === 9) {
        document.getElementById('h2').innerHTML = "Khamzat Chimaev";          
    }    
   else if (g === 10) {
        document.getElementById('h2').innerHTML = "Charles Olivera";          
}else if(g===11){
    document.getElementById('h2').innerHTML = "Alexander Volkanovski";    
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