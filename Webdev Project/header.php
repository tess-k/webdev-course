<?php
session_start();

if (isset($_POST['title']) && isset($_POST['role'])) {
    if (!empty($_POST['title']) && !empty($_POST['role'])) {
        $title = $_POST['title'];
        $role = $_POST['role'];
    }
    
if ($title != "" && $role != "") {

        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["fname"] = $fname;
    } else {
        echo "Please login on the admin page.";
    }
}

