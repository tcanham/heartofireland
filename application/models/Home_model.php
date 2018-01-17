<?php
class Home_model extends CI_Model {

        public function contact_page_data()
        {
            $query = $this->db->get('contact-page-data');
            return $query->row_array();    
        }
}