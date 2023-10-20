<!DOCTYPE html>
<html lang="en">
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
   <head>
  <meta charset="utf-8">
  <title>Events</title>
  
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link href="http://fonts.cdnfonts.com/css/games" rel="stylesheet">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <!-- Main Stylesheet File -->
  <link href="EventsPage.css" rel="stylesheet">

</head>

<body>

    <div class="header">
             <?php
            include 'head.php';
            ?>
        </div>
    <section id="events">
      <div class="container">
        <div class="section-header">
          <h2>Events</h2>
          <p>Here are some of our Events</p>
        </div>

            <div class="event">
                <img src="apex.jpg" alt="Event 1" width="1200" >
              <div class="details">
                  <h3><a href="apex legends details.php">Apex Legends</a></h3>
                <p>Hero shooter game</p>
             </div>
            </div>

            <div class="event">
                <img src="valorant.jpg" alt="Event 2" width="1200">
              <div class="details">
                <h3><a href="valorant details.php">Valorant</a></h3>
                <p>A Game for the Next Generation of Shooter Players</p>
            </div>
          </div>
        </div>
    </section>

<div class="footer">
             <?php
            include 'footer.php';
            ?>
        </div>
</body>

</html>
