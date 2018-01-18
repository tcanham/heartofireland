<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Links extends CI_Controller {
    
        public function add_link(){
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();      
            $data['page'] = 'Add Link';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/add_link',$data);
            $this->load->view('admin/templates/footer');    
    }
    
        public function save_link(){
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');   
        $this->form_validation->set_rules('add_link_text', 'Add link text', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page'] = 'Add Link';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/add_link',$data);
            $this->load->view('admin/templates/footer');    
        }else{
            $title = $this->security->xss_clean($this->input->post('title'));
            $link = $this->security->xss_clean($this->input->post('link'));
            $text = $this->security->xss_clean($this->input->post('add_link_text'));

        }
        //Check for data
        if(!isset($title) || !isset($link)){
           $check = 0; 
        }else{
            $check = 1;
        }
        
        //Send to the database
        if($check == TRUE){
        $link_data = array("title"=>$title,"link"=>$link,"text"=>$text);
        $this->load->model('admin/links_model');
        $this->links_model->add_link($link_data);
        header('Location:' . BASE_URL . 'admin/links');
        }
     }
    
        
        public function edit_link($id = false){
        $this->load->model('admin/links_model');
        $data['get_link'] = $this->links_model->get_links($id);
        //Check if valid page data
        if(empty($data['get_link'])){
            header('Location:' . BASE_URL . 'links');
        } 
        $this->load->model('admin/dashboard_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $this->load->model('admin/links_model');
        $data['links'] = $this->links_model->get_links($id);   
        $data['page'] = $data['links']['title'];
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/edit_link',$data);
        $this->load->view('admin/templates/footer');  
    }
    
    public function update_link(){
        $this->form_validation->set_rules('id', 'Id', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');   
        $this->form_validation->set_rules('add_link_text', 'Add link text', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page'] = 'Add Link';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/add_link',$data);
            $this->load->view('admin/templates/footer');    
        }else{
            $id =  $this->security->xss_clean($this->input->post('id'));
            $title = $this->security->xss_clean($this->input->post('title'));
            $link = $this->security->xss_clean($this->input->post('link'));
            $text = $this->input->post('add_link_text');

        }
        //Check for data
        if(!isset($title) || !isset($link)){
           $check = 0; 
        }else{
            $check = 1;
        }
        
        //Send to the database
        if($check == TRUE){
        $link_data = array("id"=>$id,"title"=>$title,"link"=>$link,"text"=>$text);
        $this->load->model('admin/links_model');
        $this->links_model->update_link($link_data);
        header('Location:' . BASE_URL . 'admin/links');
        }
     }
    
     public function check_delete_link($id){
            $this->load->model('admin/links_model');
            $data['link'] = $this->links_model->check_delete_link($id);
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $this->load->view('admin/templates/header');
            $this->load->view('admin/check_delete_link',$data);
            $this->load->view('admin/templates/footer'); 
    }
    
    public function delete_link($id){
         if($_SESSION['level'] != 'admin'){
           header('Location:' . BASE_URL . 'links');  
         }else{ 
            $this->load->model('admin/links_model');
            $this->links_model->delete_link($id);
            header('Location:' . BASE_URL . 'admin/links');
    }
    }
}