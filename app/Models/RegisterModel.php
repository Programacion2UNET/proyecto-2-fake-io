<?php

namespace App\Models;

class RegisterModel extends Database{
    /*public function loginModel($username, $password) {
        $manager = $this->getDb()->prepare(
            "SELECT team_name, code, username 
             FROM   users 
             WHERE  username = :username AND password = :password");

        $manager->bindParam(':username', $username);
        $manager->bindParam(':password', $password);
        $manager->execute();

        return $manager->fetch(\PDO::FETCH_ASSOC);
    }*/

    public function registerModel($data) {
        $manager = $this->getDb()->prepare(
            "INSERT INTO users 
             (id, team_name, code, date_add, address, email, website, username, password)
             VALUES
             (NULL, :team_name, :code, :date_add, :address, :email, :website, :username, :password)
            "
        );

        return $manager->execute(array(
            'team_name' => $data['team_name'],
            'code'      => $data['code'],
            'date_add'  => $data['date_add'],
            'address'   => $data['address'],
            'email'     => $data['email'],
            'website'   => $data['website'],
            'username'  => $data['username'],
            'password'  => $data['password'],
        ));
    }
}