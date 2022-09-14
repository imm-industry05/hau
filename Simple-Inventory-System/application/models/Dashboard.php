<?php

class Dashboard extends CI_Model
{


    function select_all_products()
    {
        return $this->db->query("SELECT * FROM products ORDER BY created_at DESC")->result_array();
    }

    function select_products_by_id($product_id)
    {
        return $this->db->query("SELECT * FROM products WHERE id = ?", $product_id)->row_array();

    }

    function add_product($product)
    {
        $random_number = rand(10,100);
        $query = "INSERT INTO products(name,description,price,count,quantity_sold,created_at,updated_at) VALUES (?,?,?,?,?,NOW(),NOW())";
        $values = array($this->security->xss_clean($product['name']),
                        $this->security->xss_clean($product['description']),
                        $this->security->xss_clean($product['price']),
                        $this->security->xss_clean($product['count']),
                        $random_number);
        return $this->db->query($query, $values);
    }

    function product_validate()
    {
        $this->form_validation->set_error_delimiters('<div>','</div>');
        $this->form_validation->set_rules('name' ,'Product Name', 'required');
        $this->form_validation->set_rules('description' ,'Product Description', 'required');
        $this->form_validation->set_rules('price' ,'Product Price', 'required|integer');
        $this->form_validation->set_rules('count' ,'Inventory Count', 'required|integer');

        if(!$this->form_validation->run()) {
            return validation_errors();
        } 
        else {
            return "success";
        }
    }

    function delete_product_by_id($product_id)
    {
        return $this->db->query("DELETE FROM products WHERE id = ?", $product_id);
    }

    function edit_product($product)
    {
        $query = "UPDATE products set name = ?, description = ?, price = ?, count = ? WHERE ID = ?";
        $values = array($this->security->xss_clean($product['name']),
        $this->security->xss_clean($product['description']),
        $this->security->xss_clean($product['price']),
        $this->security->xss_clean($product['count']),
        $product['id']);

        return $this->db->query($query, $values);
    }

    function get_all_products_by_id($id)
    {
        return $this->db->query("SELECT *, date_format(created_at,'%M %D %Y') as date FROM products WHERE id=?" , $id)->row_array();
    }

    function get_review($product_id)
    {
        return $this->db->query("SELECT reviews.id as id, concat(first_name,' ', last_name) as name, content , date_format(reviews.created_at, '%M %D %Y %H:%i:%s') as date FROM reviews
        INNER JOIN users ON users.id = reviews.user_id WHERE product_id = ? ORDER BY date DESC", $product_id)->result_array();
    }

    function postReview($id, $product_id,$review)
    {
        $query = "INSERT INTO reviews(user_id,product_id,content, created_at,updated_at) VALUES (?,?,?,NOW(),NOW())";
        $values = array($id, $product_id,$review['review']);

        return $this->db->query($query, $values);
    }

    function postReply($id,$review_id, $reply)
    {
        $query = "INSERT INTO replies(user_id,review_id,content, created_at,updated_at) 
                    VALUES (?,?,?,NOW(),NOW())";
        $values = array($id,$review_id, $reply['reply']);

        return $this->db->query($query, $values);
    }

    function getReply()
    {
        return $this->db->query("SELECT review_id, replies.id as id, concat(first_name,' ', last_name) as name, replies.content , date_format(replies.created_at, '%M %D %Y %H:%i:%s') as date FROM replies 
        INNER JOIN reviews ON reviews.id = replies.review_id 
        INNER JOIN users ON users.id = replies.user_id ORDER BY date DESC")->result_array();
    }
}
?>