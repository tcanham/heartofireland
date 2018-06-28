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
    
    //Functions to update a pages in the database
    public function update_about_page($about_data){

        $data = array(
        'id'       => $about_data['id'],
        'content'  => $about_data['content']  

        );

        $this->db->where('id',$about_data['id']);
        $this->db->update('about-page', $data);
    } 
    
    public function update_welfare_page($welfare_data){

        $data = array(
        'id'       => $welfare_data['id'],
        'content'  => $welfare_data['content']  

        );

        $this->db->where('id',$welfare_data['id']);
        $this->db->update('welfare-page', $data);
    } 
        public function update_info_page($info_data){

        $data = array(
        'id'       => $info_data['id'],
        'content'  => $info_data['content']  

        );

        $this->db->where('id',$info_data['id']);
        $this->db->update('info-page', $data);
    } 
    
    
}