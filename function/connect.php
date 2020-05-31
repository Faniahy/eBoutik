<?php
/**
 * Created by PhpStorm.
 * User: faniahy
 * Date: 5/22/20
 * Time: 7:03 PM
 */
$db_connection = new DBConnection("127.0.0.1","root","","test","3306");
$obj_pdo = null;
if($db_connection->connect()) {
    $obj_pdo = $db_connection->connect();
}
else {
    echo "can't connect to the database";
}
