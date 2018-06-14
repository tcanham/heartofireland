<?php
class News_model extends CI_Model {
    
    //Function to fetch the news items from the database
    public function get_news($id = FALSE){
        if($id === FALSE){
            $this->db->order_by("id", "desc");
            $query = $this->db->get('news_items');
            return $query->result_array();
        }
        //Get single item
        $query = $this->db->get_where('news_items',array('id' => $id));
        return $query->row_array();
    }
    
    //Function to add a news item to the database
    public function add_news_item($news_data){
        $slug = strtolower($news_data['title']);
        $slug = str_replace(' ', '', $slug);
        $data = array(
        'title' => $news_data['title'],
        'slug'  => $slug,   
        'text'  => $news_data['text'],
        'author' => $_SESSION['user_name'],
        );

        $this->db->insert('news_items', $data);
    }
    
    //Function to update a news item in the database
    public function update_news_item($news_item_data){
        $query = $this->db->get_where('news_items',array("id" => $news_item_data['id']));
        $slug = strtolower($news_item_data['title']);
        $slug = str_replace(' ', '', $slug);
        $data = array(
        'title' => $news_item_data['title'],
        'slug'  => $slug,   
        'text'  => $news_item_data['text'],
        'author' => $_SESSION['user_name'],
        );

        $this->db->where('id',$news_item_data['id']);
        $this->db->update('news_items', $data);

    } 
    
        public function check_delete_news($id){
            $query = $this->db->get_where('news_items',array("id" => $id));
            return $query->row_array();
        }
    
        public function delete_news($id){
            $this->db->where('id',$id);
            $this->db->delete('news_items');
    }

}