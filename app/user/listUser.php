<?php
/**
 * Created by PhpStorm.
 * User: faniahy
 * Date: 5/28/20
 * Time: 9:05 PM
 */
require('../../boot.php');

$all_user = User::getAll(); // sql query to get all user in the project.

$statement = $obj_pdo->prepare($all_user);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_CLASS, "user");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../asset/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <div class="container">
        <div style="text-align: center;"><h3>Gestion des utilisateurs</h3></div>
        <table class="responsive-table highlight">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom de l'utilisateur</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $string = '';
            foreach ($result as $res) {
                $string .= "<tr>".
                    "<td>".$res->getIdUser()."</td>".
                    "<td>".$res->getNom()." ".$res->getPreNom()."</td>".
                    "<td>".$res->getEmail()."</td>".
                    "</tr>";
            }
            echo $string;
            ?>
            </tbody>
        </table>
        <p>
            <button class="waves-effect waves-light btn modal-trigger" data-target="modal1" style="float: right;">Ajouter un utilisateur</button>
        </p>
    </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
            <button class="btn waves-effect waves-light purple darken-4" type="submit" name="action">Ajouter
                <i class="material-icons right">send</i>
            </button>
            <button class="modal-close waves-effect waves-green btn-flat">Annuler</button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../asset/js/main.js"></script>
</html>
