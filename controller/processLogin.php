<?php
    require("../model/connection.php");
    require("../model/functions.php");
    require("filterInput.php");
    echo "passed the requires";
    // input via POST method
    if (!empty($_POST)) {
        echo "if statement accessed";
        $username = testInput($_POST['uname']);
        $password = testInput($_POST['upass']);
        echo "username and pass accessed";
        if (checkLogin($username, $password)) {
            header('location: ../view/home.php');
        } else {
            echo "anything";
            // header('location: ../index.php');
        }
        // echo "You are now logged in as ".$_SESSION["role"];
    }
    else {
        echo "anything bottom";
        // header('location: ../index.php');
    }
?>