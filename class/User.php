<?php
/**
 * Created by PhpStorm.
 * User: faniahy
 * Date: 5/22/20
 * Time: 8:03 PM
 */
class User
{
    private $id_user;
    private $nom;
    private $prenom;
    private $email;

    public function User() {}

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public static function create(User $user)
    {
        $sql = "insert into user(nom , prenom , email) values ('".$user->getNom()."','".$user->getPrenom()."','".$user->getEmail()."')";
        return $sql;
    }

    public function update(User $user)
    {
        // TODO: Implement update() method.
    }

    public function delete($id_user)
    {
        $sql = "delete from user where id_user = ".$id_user;
        return $sql;
    }

    public function get($id_user)
    {
        $sql = "select u.* from user as u where id_user = ".$id_user;
    }

    public static function getAll()
    {
        $sql = "select u.* from user as u";
        return $sql;
    }
}
