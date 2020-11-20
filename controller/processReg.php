<?php
// process the registration of an account
session_start();
require("../model/connection.php");
require("../model/functions.php");
require("filterInput.php");
if (!empty([$_POST])) {
    //input sanitation via testInput function
    $username = testInput($_POST['username']);
    $mypass = testInput($_POST['pass']);
    $role = testInput($_POST['role']);
    $firstname = testInput($_POST['fname']);
    $lastname = testInput($_POST['lname']);
    $email = testInput($_POST['email']);
     
    // hashing the password with PASSWORD_HASH()
    $hpassword = password_hash($mypass, PASSWORD_DEFAULT);
    $query = $conn->prepare("SELECT username FROM users WHERE username = :user");
    $query->bindValue(":user", $username);
    $query->execute();
    if ($query->rowCount() < 1) { // If the user does not exist
        newUser($firstname, $lastname, $email, $username, $hpassword, $role); // function call
        echo "The user account has been created";
        echo '<br><a href="../view/home.php" alt="Home">Go to homepage</a>';
    }
}
?>