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
            
        </div> 


    </nav>
    
    





<h2>Welcome to your IT service</h2>




 <div class="container">
  <form method="post" action="problem.php">

    <label for="title">Title</label>
    <input type="text" id="title" name="title">
      <option value="Mr">Mr</option>
      <option value="Miss">Miss</option>
      <option value="Mrs">Mrs</option>

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your first name">
    
        <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name">

    <label for="role">Role</label>
    <select id="role" name="role">
      <option value="CEO">CEO</option>
      <option value="Admin">Admin</option>
      <option value="Manager">Manager</option>
    </select>

    <input type="submit" value="Submit">

  </form>
</div> 


</html>