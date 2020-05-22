<?php
/**
 * Created by PhpStorm.
 * User: faniahy
 * Date: 5/22/20
 * Time: 8:01 PM
 */
interface Crud
{
    public function create();

    public function update($id);

    public function delete($id);

    public function get($id);
}