<?php
/**
 * Created by PhpStorm.
 * User: faniahy
 * Date: 5/31/20
 * Time: 11:09 AM
 */
require('../../boot.php');

$user_nom = $_POST['nom'];
$user_prenom = $_POST['prenom'];
$user_email = $_POST['email'];

if(isset($user_nom) && isset($user_prenom) && isset($user_email)) {
    $user = new User();

    $user->setNom($user_nom);
    $user->setPrenom($user_prenom);
    $user->setEmail($user_email);

    $create_user = User::create($user);

    $statement = $obj_pdo->prepare($create_user);
    $statement->execute();

    if($statement) {
        header('Location: listUser.php');
    }
}