<?php
/**
 * Created by Faniahy.
 * User: faniahy
 * Date: 5/22/20
 * Time: 6:49 PM
 */
class DBConnection {
    private $host;
    private $username;
    private $password;
    private $database;
    private $port;

    public function __construct($host, $username, $password, $database, $port)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->port = $port;
    }

    public function connect()
    {
        $connection = new PDO("mysql:host=".$this->host.";port=".$this->port.";dbname=".$this->database, $this->username, $this->password);

        return $connection;
    }
}
