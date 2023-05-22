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
        
    ?>
    
    <div class="container">
  <form method="post" action="admin-confirm.php">

    <label for="title">Heading</label>
    <input type="text" id="heading" name="heading" placeholder="Trip Name/Location">
      
    <label for="fname">Trip Date</label>
    <input type="text" id="tdate" name="tdate" placeholder="dd/mm/yyyy">
    
        <label for="lname">Duration</label>
    <input type="text" id="tduration" name="tduration" placeholder="Length of Trip">

    <label for="role">Summary</label>
    <input type="text" id="tduration" name="summary" placeholder="Description of Trip">

    <input type="submit" value="Submit">

  </form>
        
<?php

$conn = new mysqli($servername, $username, $password, $database);

$heading = $_POST['heading'];
$tdate = $_POST['tdate'];
$tduration = $_POST['tduration'];
$summary = $_POST['summary'];

$sql = "INSERT INTO `tbl_trips` ('Id', 'heading', 'tripDate', 'duration', 'summary') VALUES ('0', '$heading', '$tdate', '$tduration', '$summary')";

$rs = mysqli_query($con, $sql);
	    
?>
  </div>
    
    
<p>
     
     <?php
    include "footer.php";
    ?>
    
</p>
    
    <span id="logout" position="top right"><a href="logout.php">Log out</a></span>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="js.js" type="text/javascript"></script>

</html>
