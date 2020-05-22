<?php
/**
 * Created by PhpStorm.
 * User: faniahy
 * Date: 5/22/20
 * Time: 7:27 PM
 */

/*
 * NB: Include all of class and interface before function
 */
include_once ("class/DBConnection.php");
include_once ("interface/crud.php");
include_once ("class/user.php");
include_once ("function/connect.php");

$all_user = User::getAll(); // sql

$result = mysqli_query($mysqli, $all_user);

while($res = mysqli_fetch_array($result)) {
    echo "\n";
    echo "Nom: ".$res['nom']."-Prenom: ".$res['prenom']." Email: ".$res['email'];
}
