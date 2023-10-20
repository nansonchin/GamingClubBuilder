<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
     <style>
  *{
    margin:0;
    padding:0;
    box-sizing: border-box;
}      
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  font-family: Georgia, serif;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #ffff00;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #FF8C00;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}
.button img {
  width: 25px;
  border-radius: 50px;
  float: left;
}


.button {
 float: right;
  display: inline-block;
  padding: 12px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #000000;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  transition: width .35s;
  -webkit-transition: width .35s;
  font-family: 'Courier New', monospace;
}

.button:hover {background-color: #FFD700}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 2px #666;
  transform: translateY(4px);
}


</style>
</head>
<body>

<div id="sideBar" class="sidenav">
     
  <img src="IGS_LOGO2.jpeg" width="80" height="40" alt="Company_Logo"/>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="&#128269;" title="Type in a category">
  <a href="announcement.php">Announcements</a>
  <a href="admin-page-event-details.php">Events</a>
  <a href="admin-notice.php?notice=">Notice Making</a>
  <a href="admin-user-table.php?page=">User</a>
  <a href="admin-register-event.php?registerEvent=1">Booking</a>
  
</div>
    
<div id="SideBar">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
 
  <a class="button" href="login.php">
        <img src="default-profile-pic.png" alt="profile_pic" height="25px" width="10px"/>LOGOUT</a>
</div>
	
<script>
function openNav() {
  document.getElementById("sideBar").style.width = "250px";
}

function closeNav() {
  document.getElementById("sideBar").style.width = "0";
  }

</script>
   
        <?php
        // put your code here
        ?>
    </body>
</html>