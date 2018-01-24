<?php
class Pages_model extends CI_Model {


    //Function to fetch the pages from the database
    public function get_pages($page_id = FALSE){
        if($page_id === FALSE){
            $this->db->order_by("page_id", "desc");
            $query = $this->db->get('pages');
            return $query->result_array();
        }
    }
    

    
    public function get_page_for_edit($page){
        $query = $this->db->get($page);
        return $query->row_array();
    }
    
    //Function to update a page in the database
    public function update_contact_page($contact_data){

        $data = array(
        'tel'      => $contact_data['tel'],
        'mob'      => $contact_data['mob'],   
        'address'  => $contact_data['address'],
        'email'    => $contact_data['email'],
        );

        $this->db->where('id',$contact_data['id']);
        $this->db->update('contact-page', $data);
    }  
    
}