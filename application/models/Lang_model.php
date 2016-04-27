<?php

/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 25.04.2016
 * Time: 14:19
 */
class Lang_model extends CI_Model
{

    function __construct()
    {

        $this->load->database();
        // Call the Model constructor
        parent::__construct();
    }

    function  langPull($id = 0)
    {
        $query = $this->db->query(
            'SELECT id, name FROM lang WHERE id_country ="' . $id . '"'
        );

        $row = $query->result();

        return $row;


    }

    function create($name, $idCountry)
    {

        $this->db->query(
            "INSERT INTO lang (id, name, id_country) VALUES (NULL, '" . $name
            . "', '" . $idCountry . "');"
        );

    }

    function update($id, $name)
    {

        $this->db->query(
            "UPDATE  lang SET  name =  '" . $name . "' WHERE   id = '" . $id
            . "';"
        );

    }

    function delete($id)
    {
        $this->db->query("DELETE FROM lang WHERE id = '" . $id . "';");
    }
}