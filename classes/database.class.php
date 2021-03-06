<?php

class Database {
    private $username;
    private $password;
    private $host;
    private $db;
    protected $connection;
    
    protected function __construct() {
        $this -> username = getenv('dbuser');
        $this -> password = getenv('dbpassword');
        $this -> host = getenv('dbhost');
        $this -> db = getenv('dbname');
        $this -> connect();
    }
    
    private function connect() {
        $this -> connection = mysqli_connect(
            //variables for the connection
            $this -> host,
            $this -> username,
            $this -> password,
            $this -> db);
    }
}

?>