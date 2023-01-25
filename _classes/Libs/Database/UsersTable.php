<?php

namespace Libs\Database;

use PDOException;

class UsersTable
{
    private $database;

    public function __construct(MySQL $mySQL)
    {
        $this->database = $mySQL->connect();
    }

    public function login($email, $password)
    {
        try {
            $query = "SELECT * FROM users WHERE email = :email AND password = :password";
            $statement = $this->database->prepare($query);
            $statement->execute([ ":email" => $email, ":password" => $password ]);
            $user = $statement->fetch();

            return $user;
        } catch (PDOException $e) {
            return $e->getMessage();
            exit();
        }
    }
}