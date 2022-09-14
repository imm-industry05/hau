<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    // this function displays the LOGIN page
	public function index()
	{
		$this->load->view('login');
	}

    //this function diplays the REGISTER page
	public function viewregister()
	{
        // $current_user_id = $this->session->userdata('user_id');
		// var_dump($current_user_id);
		$this->load->view('register');
	}

    //this function displays the dashboard for admins
	public function viewDashboard_admin()
	{
		$this->load->view('admin/dashboard');
	}

	// this function dispplays the dashboard for users
	public function viewDashboard_user()
	{
		$this->load->view('user/dashboard');
	}

    //this function is where the process when a user is new and REGISTERS
	public function register() 
    {
        $current_user_id = $this->session->userdata('user_id');
		$this->load->Model("User");
        $email = $this->input->post('email');
        $result = $this->User->validate_register($email);
        if($result!=null)
        {
            $this->session->set_flashdata('input_errors', $result);
			$this->load->view('register');
        }
        else
        {
            $form_data = $this->input->post(NULL,TRUE);
            $this->User->register($form_data);
            $new_user = $this->User->get_user_by_email($form_data['email']);
            $this->session->set_userdata(array('user_id' => $new_user["id"], 'first_name'=>$new_user['first_name']));
			$count =$this->User->count();
			$this->load->helper('url');
			// if($count['count'] == 1)
			// {
			// 	$this->User->isAdmin();
                redirect("/dashboards/index");
			// }else{
			// 	redirect("/dashboards/user");
			// }
        }
    }

    // this function proccesses the login and does the security checks
    public function process_login() 
    {
        $result = $this->User->validate_signin();
        if($result != 'success') {
            $this->session->set_flashdata('input_errors', $result);
            redirect("/users/signin");
        } 
        else 
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User->get_user_by_email($email);
            $result = $this->User->validate_signin_match($user, $password);

            if($result == "success") 
			{
                $this->session->set_userdata(array('user_id'=>$user['id'], 'first_name'=>$user['first_name'], 'password' => $user['password']));      
				$is_admin = $this->User->getAdmin();
                
                $view_array = [
                    'first_name' => $this->session->userdata('first_name')
                ];

				// if($is_admin['user_id'] != $user['id'])
				// {
				// 	redirect("/dashboards/user");
				// }else
				// {
                    redirect("/dashboards/index");
				// }
            }
            else 
            {
                $this->session->set_flashdata('input_errors', $result);
                redirect("welcome/index");
                // echo "failed";
            }
        }
    }


}
