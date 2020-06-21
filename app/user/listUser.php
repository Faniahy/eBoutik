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

<?php
    include_once ("../haut_page.html");
?>
    <div class="container">
        <div style="text-align: center;"><h3>Gestion des utilisateurs</h3></div>
        <table class="responsive-table highlight">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom de l'utilisateur</th>
                <th>Email</th>
                <th>Action</th>
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
                    "<td><button id='btn_edit_user".$res->getIdUser()."' class='btn-small waves-effect waves-light orange darken-3' style='margin-right: 5px;'><i class='material-icons'>edit</i></button><button id='btn_delete_user".$res->getIdUser()."' onclick='javascript:confirmDeleteUser(this,".$res->getIdUser().")' class='btn-small waves-effect waves-light red darken-3'><i class='material-icons'>delete</i></button></td>".
                    "</tr>";
            }
            echo $string;
            ?>
            </tbody>
        </table>
        <p>
            <button class="waves-effect waves-light btn modal-trigger" data-target="modal1" style="float: right;">Nouveau utilisateur</button>
        </p>
    </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h5>Utilisateur</h5>
            <div class="row">
                <form action="createUser.php" method="post">
                    <div class="input-field col s12">
                        <input id="nom" name="nom" type="text" class="validate" required>
                        <label for="nom">Nom</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="prenom" name="prenom" type="text" class="validate" required>
                        <label for="prenom">Prenom</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                    <button class="btn waves-effect waves-light purple darken-4" type="submit" name="action">Ajouter
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button class="modal-close waves-effect waves-green btn-flat">Annuler</button>
        </div>
    </div>
    <script src="../asset/js/main.js"></script>
<?php
include_once ("../bas_page.html");
