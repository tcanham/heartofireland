<?php
class Links_model extends CI_Model {


    public function get_links($id = FALSE){
        if($id === FALSE){
            $this->db->order_by("id", "desc");
            $query = $this->db->get('links');
            return $query->result_array();
        }
        //Get single user
        $query = $this->db->get_where('links',array("id" => $id));
        return $query->row_array();
    }
    
    //Function to add a link to the database
    public function add_link($link_data){
        $data = array(
        'title' => $link_data['title'], 
        'link' => $link_data['link'],
        'text'  => $link_data['text']            
        );

        $this->db->insert('links', $data);
    }
    
    //Function to update a link in the database
    public function update_link($link_data){
        $query = $this->db->get_where('links',array("id" => $link_data['id']));
        $data = array(
        'title' => $link_data['title'],
        'link' => $link_data['link'], 
        'text'  => $link_data['text']
        );

        $this->db->where('id',$link_data['id']);
        $this->db->update('links', $data);

    }  
    
    public function check_delete_link($id){
            $query = $this->db->get_where('links',array("id" => $id));
            return $query->row_array();
    }
    
    public function delete_link($id){
            $this->db->where('id',$id);
            $this->db->delete('links');
    }
    
}