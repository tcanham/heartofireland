<?php
class Profiles_model extends CI_Model {

    public function __construct()
        {
                
        }
    public function get_profiles($slug = FALSE){
        if($slug === FALSE){
            $query = $this->db->get('profiles');
            return $query->result_array();
        }
        $query = $this->db->get_where('profiles',array(slug => $slug));
        return $query->row_array();
    }
    
}