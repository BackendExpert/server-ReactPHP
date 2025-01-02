<?php

    require_once __DIR__ '../config/db.php';

    function registeruser ($pdo, $username, $email, $password, $role = "user"){
        $hashpass = password_hash($password, PASSWORD_BCRYPT)

        $sql = "INSERT INTO users(username, email, password, role)VALUES(:username, :email, :password, :role)";

        $stmt = $pdo->prepare($sql)
        $stmt->bindParam(':username', $username)
        $stmt->bindParam(':email', $email)
        $stmt->bindParam(':password', $password)
        $stmt->bindParam(':role', $role)

        return $stmt->execute();        
    }

?>