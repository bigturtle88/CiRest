<?php

/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 25.04.2016
 * Time: 14:19
 */
class Country_model extends CI_Model
{

    function __construct()
    {

        $this->load->database();
        // Call the Model constructor
        parent::__construct();
    }

    function country()
    {
        $query = $this->db->query('SELECT id, name FROM country');

        $row = $query->result();

        return $row;


    }

    function create($name)
    {

        $query = $this->db->query(
            "INSERT INTO country (id, name) VALUES (NULL, '" . $name . "');"
        );

    }

    function update($id, $name)
    {

        $this->db->query(
            "UPDATE  country SET  name =  '" . $name . "' WHERE   id = '".$id. "';"
        );

    }

    function delete($id)
    {
        $this->db->query("DELETE FROM country WHERE id = '" . $id . "';");
    }
}