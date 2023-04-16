<?php
session_start();

if ( !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true ) {
    header("location: problem.php");
    exit;
}

$title = "";
$fname = "";
$lname = "";
$role = "";

if (isset($_POST['title']) && isset($_POST['role']) && isset($_POST['fname']) && isset($_POST['lname'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $title = $_POST['title'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $role = $_POST['role'];
    }
    
if ($title != "" && $role != "") {

        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["fname"] = $fname;
        header("location: problem.php");
    } else {
        echo "Please login on the admin page.";
    }
}

