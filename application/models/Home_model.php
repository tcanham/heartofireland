<?php
class Home_model extends CI_Model {
    
        public function about_page_data()
        {
            $query = $this->db->get('about-page');
            return $query->row_array();    
        }

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
        public function get_links($id = FALSE){
            if($id === FALSE){
                //$this->db->order_by("id", "desc");
                $query = $this->db->get('links');
                return $query->result_array();
            }
            //Get single user
            $query = $this->db->get_where('links',array("id" => $id));
            return $query->row_array();
    }
}