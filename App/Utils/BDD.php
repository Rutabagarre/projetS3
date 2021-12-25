<?php

/**
 * Class BDD
 */
class BDD {
    private $hostname = "127.0.0.1";
    private $username = "root";
    private $password = "";
    private $database = "projetphp";

    /**
     * @return PDO
     */
    public function connect() {
            $dsn = 'mysql:host='.$this->hostname.';port=3307;dbname='.$this->database;
            $pdo = new PDO(
                $dsn,
                $this->username,
                $this->password
            );
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
    }
}