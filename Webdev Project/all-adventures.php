<?php
    require "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!--All the normal setup for a site-->

    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak | Home</title>

</head>

<!--Into the main body of the text etc.-->

<body>

<!--Navigation bar-->

    <nav class="navbar">
        <div class="header-logo">
            <img src="imgs/paddle-white.png" class="logo" width="50px" height="50px" alt="Halifax Canoe and Kayak Logo">
            <h3>Halifax Canoe & Kayak</h3>
        </div>


        <div>
            <img src="imgs/hamburger.png" class="menu-button" id="menubtn">
        </div>


        <div class="menu hidden" id="dropmenu">
            
              <p><a href="index.php">Home</a>
              <p><a href="booking.html">Book an Adventure</a></p>
              <p><a href="admin.php">Admin Login</a></p>
              <p><a href="admin-add.php">Add An Adventure</a></p>
            
        </div> 


    </nav>
    
    
<body>
    
 <?php
$servername = "localhost";
$username = "id20614282_localhost";
$password = "#Password1";
$database = "id20614282_webdevdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT heading, tripDate, duration, summary FROM trips";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " " . $row["heading"]. 
        "Date: " . $row["tripDate"]. 
        "Duration: " . $row["duration"]. 
        "Summary: " . $row["summary"];
  }
} else {
  echo "0 results";
}
?> 

</body>

<p>
     
     <?php
    include "footer.php";
    ?>
    
</p>
    
    <span id="logout" position="top right"><a href="logout.php">Log out</a></span>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="js.js" type="text/javascript"></script>

</html>