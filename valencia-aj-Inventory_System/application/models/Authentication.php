<?php


class Authentication extends CI_Model
{
    function register($user)
    {
        $query = "INSERT INTO users(first_name, last_name, number, password, created_at, updated_at) VALUES(?,?,?,?,NOw(),NOW())";
        $values = array($user['fname'], $user['lname'], $user['number'], $user['password']);
        return $this->db->query($query, $values);
    }

    function get_user($contact_number)
    {
        return $this->db->query("SELECT * FROM users WHERE number=? ", $contact_number) ->row_array();
    }
}


?>