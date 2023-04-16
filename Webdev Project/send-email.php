   
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



<?php
    
    $emailType = 'emailType';
            
    if($emailType = "lostPassword")
    { ?>

    Lost password
        
    <?php
    }
    
    
    elseif ($emailType = "newAccount") 
    { ?>
        
    New account
    <?php
    };
    ?>


    
     <?php
    include "footer.php";
    ?>
    
    <span id="logout" position="top right"><a href="logout.php">Log out</a></span>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="js.js" type="text/javascript"></script>
