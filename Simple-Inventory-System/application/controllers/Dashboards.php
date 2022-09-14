<?php

class Dashboards extends CI_Controller
{
    //this function displays the main dashboard page
    public function index()
    {
        $all_products = $this->Dashboard->select_all_products();
        $view_array = [
            'products' => $all_products
        ];

        $this->load->view("admin/dashboard",$view_array);
    }

    //this function logs off the user and goes back to log in page
    public function logoff()
    {
        $this->session->sess_destroy();
        redirect("/welcome/index");
    }

    // this function displays the add product html page
    public function add()
    {
        $this->load->view("admin/add_product");
    }

    // this function does the process in adding the product
    public function add_process()
    {
        $current_user_id = $this->session->userdata('user_id');
        $result = $this->Dashboard->product_validate();

        if($result != 'success') {
            $this->session->set_flashdata('input_errors', $result);
            $this->load->view("admin/add_product");
        }
        else
        {
            $add_product = $this->Dashboard->add_product($this->input->post(NULL,TRUE));
            redirect('/dashboards/index');
        }
    }

    //this function does the process when deleting a product
    public function remove_product($id)
    {
        $this->Dashboard->delete_product_by_id($id);
        redirect('/dashboards/index');
    }

    // this function display the edit html page
    public function edit($id)
    {
        $view_array = [
            'id' => $id
        ];
        $this->load->view("admin/edit",$view_array);
    }

    //this function does the process when editing 
    public function edit_process()
    {
        $current_user_id = $this->session->userdata('user_id');
        $result = $this->Dashboard->product_validate();

        if($result != 'success') {
            $this->session->set_flashdata('input_errors', $result);
            $this->load->view("admin/edit");
        }
        else
        {
            $edit_product = $this->Dashboard->edit_product($this->input->post(NULL,TRUE));
            redirect('/dashboards/index');
        }
    }

    //this function displays the profile html page
    public function profile()
    {
        $this->load->view('admin/profile');
    }

    // this function does the process when user edits the profile
    public function edit_user()
    {
        $get_old_password = $this->User->getAdmin(['password']);
        $email = $this->input->post(['email']);
        $password  = $this->input->post(['password']);
        
        // var_dump($this->User->getAdmin());

        $result = $this->User->validate_register($email);
        if($result !=null && $get_old_password != $password)
        {
            $this->session->set_flashdata('input_errors', $result);
			redirect("/dashboards/profile");
        }
        else
        {
            $this->User->edit_user($this->input->post(NULL,TRUE),$this->session->userdata('user_id'));
        }
    }

    //this function displays the product information and reviews
    public function show($id)
    {
        $get_product = $this->Dashboard->get_all_products_by_id($id);
        $this->session->set_userdata('product_id',($get_product['id']));
        $get_reviews = $this->Dashboard->get_review($this->session->userdata('product_id'));
        $get_replies = $this->Dashboard->getReply();
        $view_array = [
            'product' => $get_product,
            'reviews' => $get_reviews,
            'replies' => $get_replies
        ];
        $this->load->view('admin/show',$view_array);
    }

    //this function does the process when posting REVIEWS
    public function postReview()
    {
        $content = $this->input->post(['review']);
        $this->Dashboard->postReview($this->session->userdata('user_id'), $this->session->userdata('product_id'),$content);
        redirect("/dashboards/show/{$this->session->userdata('product_id')}");
    }

    //this function does the process when posting REPLIES
    public function postReply()
    {
        $content = $this->input->post(NULL,TRUE);
        $this->Dashboard->postReply($this->session->userdata('user_id'),$content['review_id'],$content);
        redirect("/dashboards/show/{$this->session->userdata('product_id')}");
    }

    public function user()
    {
        $all_products = $this->Dashboard->select_all_products();
        $view_array = [
            'products' => $all_products
        ];
        $this->load->view("user/dashboard",$view_array);
    }
}

?>