<?php
/**
 * Created by PhpStorm.
 * User: faniahy
 * Date: 5/22/20
 * Time: 7:03 PM
 */
$db_connection = new DBConnection("127.0.0.1","root","","test","3306");

if($db_connection->connect()) {
    echo "Connected to the Database";
}
else {
    echo "Connection error to the database";
}
?>
