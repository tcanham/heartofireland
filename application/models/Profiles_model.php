<?php
class Profiles_model extends CI_Model {

    public function __construct()
        {
                
        }
    //Function to fetch the profiles from the database
    public function get_profiles($slug = FALSE){
        if($slug === FALSE){
            $this->db->order_by("id", "desc");
            $query = $this->db->get('profiles');
            return $query->result_array();
        }
        //Get single profile
        $query = $this->db->get_where('profiles',array('slug' => $slug));
        return $query->row_array();
    }
    
    //Function to add a profile to the database
    public function add_profile($profile_data){
        $slug = strtolower($profile_data['name']);
        $slug = str_replace(' ', '', $slug);
        $data = array(
        'title' => $profile_data['name'],
        'slug'  => $slug,   
        'text'  => $profile_data['text'],
        'image' => $profile_data['image'],
        );

        $this->db->insert('profiles', $data);
    }
}