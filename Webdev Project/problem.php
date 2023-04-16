<?php
    require "header.php";
?>


<!DOCTYPE html>

<html>
<head>

    <!--All the normal setup for a site-->

    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak</title>
    
</head>



<body>
    
        
    
    <?php
    
    $role = 'role';
            
    if($role = "CEO")
    { ?>
        <p><a href="isnt-working.php">Computer Isn't Working</a></p>
        <p><a href="need-help.php">I Need Help</a></p>
   <?php
    }
    
    elseif ($role = "Admin")
    { ?>
    <p><a href="new-account.php"/>Create A New Account</a></p>
    <p><a href="isnt-working.php">Computer Isn't Working</a></p>
    <?php
    }
    
    elseif ($role = "Manager") 
    { ?>
        <p><a href="lost-password.php">Lost Password?</a></p>
        <p><a href="isnt-working.php">Computer Isn't Working</a></p>
    <?php
    };
    ?> 
        
        
        
            
    <?php
    include "footer.php";
    ?>
    
    <span id="logout" position="top right"><a href="logout.php">Log out</a></span>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="js.js" type="text/javascript"></script>

</body>
</html>
