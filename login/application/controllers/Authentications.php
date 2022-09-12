<?php

class Authentications extends CI_Controller
{
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('fname', 'First Name', 'required|alpha');
        $this->form_validation->set_rules('lname', 'Last name', 'required|alpha');
        $this->form_validation->set_rules('number', 'Phone number', 'required|min_length[11]|max_length[11]|numeric');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('repeat_password', 'Repeat Password', 'required|matches[password]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('register');
        }else{
            $this->register();
        }
    }

    public function register()
    { 
            $this->load->model("Authentication");
            $user_details = array("fname"=> $this->input->post('fname'),"lname"=>$this->input->post('lname'), "number" => $this->input->post('number'), "password" => $this->input->post('password'));  
            $add_user = $this->Authentication->register($user_details);
    
            if($add_user === TRUE)
            {
                redirect("/authentications/index");
            }

    }

    public function login()
    {
        $this->load->model("Authentication");
        $user = $this->Authentication->get_user($this->input->post('number'));
        
        $view_array = [
            'info' => $user 
        ];
        if($user['password'] != $this->input->post('password') && $user['number'] != $this->input->post('number'))
        {
            echo "Invalid details! Go back";
        }
        else
        {
            $this->load->view('profile',$view_array);
        }
    }

}
?>