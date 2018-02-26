<?php

namespace App\Models;

class LoginModel extends Database{
    public function loginModel($username, $password) {
        $manager = $this->getDb()->prepare(
            "SELECT team_name, code, username 
             FROM   users 
             WHERE  username = :username AND password = :password");

        $manager->bindParam(':username', $username);
        $manager->bindParam(':password', $password);
        $manager->execute();

        return $manager->fetch(\PDO::FETCH_ASSOC);
    }
}