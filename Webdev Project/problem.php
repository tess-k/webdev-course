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
    {
        
        
        
    } 
    elseif ($role = "Admin")
    {
        
    }
    else($role = "Manager") 
    {
        <p><a href="">Lost password?</a></p>
        <p><a href="">Lost password?</a></p>
    }   
        
        
        
        
        
        
    <?php
    include "footer.php";
    ?>
    
    <span id="logout" position="top right"><a href="logout.php">Log out</a></span>



</body>
</html>
