<?php

namespace obb\module;

class DBConnect
{

    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=Library";
        $this->username = "root";
        $this->password = "root";
    }

    public function connect()
    {
        try {
            return new \PDO($this->dsn, $this->username, $this->password);
        } catch (\PDOException $exception) {
            echo "We are working on it!";
            exit();
        }
    }
}