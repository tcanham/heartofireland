<?php
class Dashboard_model extends CI_Model {

    public function get_admin_links()
        {
            $query = $this->db->get('admin_links');
            return $query->result_array();  
        }
    
    public function get_page_list()
        {
            $query = $this->db->get('page_list');
            return $query->result_array();  
        }
}