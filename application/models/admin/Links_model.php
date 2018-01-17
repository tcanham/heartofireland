<?php
class Links_model extends CI_Model {

        public function get_links()
        {
            $query = $this->db->get('links');
            return $query->result_array();      
        }
}