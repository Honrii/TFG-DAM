<?php

class DB
{
    /* private $servername   = 'eu-cdbr-west-01.cleardb.com';
    private $username = 'ba8f0037208220';
    private $password = 'da99f8f4';
    private $db       = 'heroku_83c1bab7b4bbea2'; */

    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db = 'users';
    private $conn;
    private static $instance;

    private function __construct()
    {
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
            echo "NO CONNECTED 🔌";
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConn()
    {
        return $this->conn;
    }

    public function changeDB($db)
    {
        $this->db = $db;
        $this->conn->select_db($db);
    }
}
