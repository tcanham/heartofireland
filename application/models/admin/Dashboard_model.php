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
    public function get_donations_section()
        {
            $query = $this->db->get('donations_section');
            return $query->row_array();  
        }
    public function update_donations_section($donations_data){
        $data = array(
        'content'      => $donations_data['content']   
        );

        $this->db->where('id',$donations_data['id']);
        $this->db->update('donations_section', $data); 
    }
}