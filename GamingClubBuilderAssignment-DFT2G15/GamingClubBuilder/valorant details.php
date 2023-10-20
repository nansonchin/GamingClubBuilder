<!DOCTYPE html>
<html lang="en">

<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
   <head>
  <meta charset="utf-8">
  <title>Event Details</title>
    
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link href="http://fonts.cdnfonts.com/css/games" rel="stylesheet">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 

  <!-- Main Stylesheet File -->
  <link href="EventsPage.css" rel="stylesheet">
</head>

   <body>

         <!--==========================
    Header
  ============================-->
   <div class="nav">
        <audio id="myAudio">
            <source src="I Really Want to Stay at Your House.ogg" type="audio/ogg">
            <source src="Time To Attack.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
            <div class="nav-logo">
                <img id ="tarc_game" src="game.png"  />  
            </div>
            <nav class="nav-contain">
                <a href="land.php?notice=1" class="nav_home"> HOME</a>
                <a href="EventsPage.php" class="nav_event"> EVENTS</a>
                   <input id="search" type="text" name="search-bar" placeholder="Looking for Anything? "></>
                <a href="nofunctionfound.php"><button>Submits</button></a>
                
                <div class="nav-2ndpart">
                    <a href="login.php" class="nav_login"> LOGIN</a>
                    <a href="part_register.php" class="nav_signup"> SIGN UP</a>
                    <img onclick="playAudio()"src="data:image/png;base64,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" alt="" class="m-audio-player__icon m-audio-player__icon--active" style="">
                    <img onclick="pauseAudio()"src="data:image/png;base64,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" alt="" class="m-audio-player__icon" style="">
               
                    <a href="ticket.php" class="nav_buyticket"> Buy Ticket</a>
                </div>
            </nav>
        </div>
<!-- #header -->

    <!--==========================
      Event Details Section
    ============================-->
    <section id="events-details">
      <div class="container">
        <div class="section-header">
          <h2>Event Details</h2>
          <p>Here is our Event details</p>
        </div>
            <img src="valorant.jpg" alt="Event 1" width="1170">
            <div class="details">
              <h2>Valorant</h2>
              </div>
              <p>The Valorant Champions Tour (VCT) is a global competitive esports tournament series</p>
 
              <p>for the video game Valorant organised by Riot Games, the game's developers. The</p> 

              <p>series runs multiple events throughout each season, culminating in Valorant Champions, the</p>
              <p>top-level event of the tour.</p>
            </div>
          </div>
          
    </section>

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer>
    <div class="container">
            <div class="row">
                    <div class="footer-col">
                            <div class="footer_logo">
                                    <img src="logo.png" alt="TARUC GAMING SOCIETY">
                                    <p>TAR UC, Kuala Lumpur, Malaysia</p>
                                    <p>igs.taruc.society@gmail.com</p>
                            </div>
                    </div>
                    <div class="footer-col">
                            <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>     
                            </ul>                                        
                    </div>
                    <a href="https://www.facebook.com/taruc.igs">
                            <img src="FB icon.png" alt="Facebook Page" class="icon">
                            </a> 
                            
                    <a href="https://www.instagram.com/taruc.igs/?hl=en">
                             <img src="Insta icon.png" alt="Instagram Page" class="icon">
                            </a>  
            </div>
    </div>
</footer>
  <!-- #footer -->

</body>
  <script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
  x.play(); 
} 

function pauseAudio() { 
  x.pause(); 
} 
    </script>
</html>
