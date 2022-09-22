<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Model
{
    function get_user_by_id($id)
    {
        return $this->db->query("SELECT * FROM users WHERE id= ?" , $this->security->xss_clean($id))->row_array();
    }

    function get_user_by_email($email)
    { 
        return $this->db->query("SELECT * FROM users WHERE email= ?" , $this->security->xss_clean($email))->row_array();
    }

    function register($user)
    {
        $query = "INSERT INTO users(first_name, last_name, email, password,created_at, updated_at)
                    VALUES (?,?,?,?,NOW(),NOW())";

        $values = array($this->security->xss_clean($user['first_name']), 
                        $this->security->xss_clean($user['last_name']),
                        $this->security->xss_clean($user['email']),
                        md5($this->security->xss_clean($user['password'])));
        return $this->db->query($query, $values);
    }

    function validate_register($email)
    {
        $this->form_validation->set_error_delimiters('<div>','</div>');
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');        
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('conf_password', 'Confirm Password', 'required|matches[password]');
        
        if(!$this->form_validation->run()) {
            return validation_errors();
        }
        else if($this->get_user_by_email($email)) {
            return "Email already taken.";
        }
    }

    function isAdmin()
    {
        $query = "INSERT INTO admins(user_id, created_at, updated_at)
                    VALUES(?,NOW(),NOW())";
        $values = array($this->session->userdata('user_id'));
        return $this->db->query($query, $values);
    }

    function getAdmin()
    {
        return $this->db->query("SELECT * FROM admins INNER JOIN users ON admins.user_id = users.id")->row_array();
    }

    function count()
    {
        return $this->db->query("SELECT count(*) as count FROM users")->row_array();
    }
    
    function validate_signin() {
        $this->form_validation->set_error_delimiters('<div>','</div>');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
    
        if(!$this->form_validation->run()) {
            return validation_errors();
        } 
        else {
            return "success";
        }
    }

    function validate_signin_match($user, $password) 
    {
        $hash_password = $this->security->xss_clean(md5($password));

        if($user['email'] && $user['password'] == $hash_password) {
            return "success";
        }
        else {
            return "Incorrect email/password.";
        }
    }

    function edit_user($user,$id)
    {
        $query = "UPDATE users SET first_name = ?, last_name = ?, email = ?, password = ? WHERE id = ?";
        $values = array($this->security->xss_clean($user['first_name']),
                        $this->security->xss_clean($user['last_name']),
                        $this->security->xss_clean($user['email']),
                        md5($this->security->xss_clean($user['password'])),
                        $id);

        return $this->db->query($query, $values);
    }
}

?>