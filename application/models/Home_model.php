<?php
class Home_model extends CI_Model {

        public function contact_page_data()
        {
            $query = $this->db->get('contact-page');
            return $query->row_array();    
        }
    
        public function welfare_page_data()
        {
            $query = $this->db->get('welfare-page');
            return $query->row_array();    
        }
    
        public function info_page_data()
        {
            $query = $this->db->get('info-page');
            return $query->row_array();    
        }
    
        public function donate_page_data()
        {
            $query = $this->db->get('donate-page');
            return $query->row_array();    
        }
    
        public function shop_page_data()
        {
            $query = $this->db->get('shop-page');
            return $query->row_array();    
        }

}