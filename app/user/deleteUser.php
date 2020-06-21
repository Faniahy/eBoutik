<?php
require('../../boot.php');

$id_user = $_GET['id_user'];

if(isset($id_user)) {
    $delete_user = User::delete($id_user);
    $statement = $obj_pdo->prepare($delete_user);
    $statement->execute();
}
