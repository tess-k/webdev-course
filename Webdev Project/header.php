
<?php
        
    $dbPassword = "webdevcourse1";
    $dbUserName = "webdevcourse";
    $dbServer = "localhost";
    $dbName = "webdevcourse";
        
    $connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);
        
    if($connection->connect_errno)
        {
            exit("Database connection failed. Reason: ".$connection->connect_error);
        }
        
    session_start();
        
        
?>
        


        
        
 