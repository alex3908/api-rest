<?php
require_once "config/database.php";
require_once "respuestas.class.php";

class Nna extends Database
{

//912bc00f049ac8464472020c5cd06759

    public function getAll()
    {
        $query = "SELECT * FROM procuprueba1.nna_cas;";
        $datos = parent::obtenerDatos($query);
        return ($datos);
    }

    public function get($id)
    {
        $query = "SELECT * FROM procuprueba1.nna_cas WHERE id_nna =" . $id;
        return parent::obtenerDatos($query);

    }

}