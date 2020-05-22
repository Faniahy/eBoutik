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
        $connection = mysqli_connect($this->host,$this->username,$this->password,$this->database,$this->port);

        return $connection;
    }
}
