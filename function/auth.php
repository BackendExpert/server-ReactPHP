<?php

    require_once __DIR__ '../config/db.php';

    function registeruser ($data){
        global $pdo;

        $username = htmlspecialchars(trim($data['username']))
        $email = htmlspecialchars(trim($data['username']))
        $password = password_hash($data['username'], PASSWORD_BCRYPT)
        $role = "user";

        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email")
        $stmt->execute(['email' => $email])

        if($stmt->rowCount() > 0){
            return ['status' => 'error', 'message' => 'Email already exists...!']
        }

        $stmt = $pdo->prepare("INSERT INTO user(username, email, password, role) VALUES(:username, :email, :password, :role)");
        $result = $stmt=>execute([
            'username' => $username,
            'email' => 
        ])
        
    }

?>