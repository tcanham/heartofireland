<?php
class Users_model extends CI_Model {

    public function __construct()
        {
                
        }
    //Function to fetch the users from the database
    public function get_users($username = FALSE){
        if($username === FALSE){
            $this->db->order_by("id", "desc");
            $query = $this->db->get('users');
            return $query->result_array();
        }
        //Get single user
        $query = $this->db->get_where('users',array("username" => $username));
        return $query->row_array();
    }
    
    //Function to add a user to the database
    public function add_user($user_data){
        $data = array(
        'first_name' => $user_data['first_name'],
        'surname'    => $user_data['surname'], 
        'username'   => $user_data['username'],    
        'password'   => $user_data['password'],
        'email'      => $user_data['email'],
        'type'       => $user_data['type']
        );

        $this->db->insert('users', $data);
    }
}