<?php

// Creates a new user
function newUser($firstname, $lastname, $email, $username, $password, $role)
{
    global $conn;
    try {
        $conn->beginTransaction();
        // last inserted = CustomerID
        $stmt = $conn->prepare("INSERT INTO users(firstName, lastName, email, username, password, role)
        VALUES (:firstname, :lastname, :email, :username, :password, :role)");
        $stmt->bindValue(':firstname', $firstname);
        $stmt->bindValue(':lastname', $lastname);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':password', $password);
        $stmt->bindValue(':role', $role);
        $stmt->execute();
        $conn->commit(); // save to database
    }
    catch (PDOException $ex) {
        $conn->rollback(); // Something went wrong, rollback!
        throw $ex;
    }
}

// Checks for an existing user
function checkLogin($username, $password) {
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT userID, password, role FROM users WHERE username=:user");
        $stmt->bindValue(':user', $username);
        $stmt->execute();
        $row = $stmt -> fetch();
            if (password_verify($password, $row['password'])) {
                // assign session variables
                $_SESSION["adminUser"] = $username;
                $_SESSION["userID"] = $row["userID"];
                $_SESSION["role"] = $row["role"];
                $_SESSION["login"] = 'yes';
                return true;
            } else {
                return false;
            }
    }
    catch (PDOException $ex) {
        throw $ex;
    }
}
?>
