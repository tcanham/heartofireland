<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News extends CI_Controller {

        public function index(){
            $data['page'] = 'News';
            $this->load->model('admin/news_model');
            $data['news_items'] = $this->news_model->get_news();
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page_list'] = $this->dashboard_model->get_page_list();
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/news_items',$data);
            $this->load->view('admin/templates/footer');
	}
    
        public function view_news_item($slug){
            $data['page_title'] = 'news';
            $this->load->model('admin/news_model');
            $data['contact_data'] = $this->home_model->contact_page_data();   
            $data['footer_links'] = $this->home_model->get_links();
            $data['footer_donations'] = $this->dashboard_model->get_donations_section();  
            $data['news_item'] = $this->news_model->get_news_item($slug);
            $this->load->view('templates/header',$data);
            $this->load->view('view_news_item',$data);
            $this->load->view('templates/footer');
	}
    
    
    
    public function add_news(){
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page_list'] = $this->dashboard_model->get_page_list();
            $data['page_title'] = 'Add News Item';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/add_news_item',$data);
            $this->load->view('admin/templates/footer');    
    }   
    
    public function save_news(){
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');   
        if ($this->form_validation->run() == FALSE){
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page_list'] = $this->dashboard_model->get_page_list();
            $data['page_title'] = 'Add Link';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/add_news_item',$data);
            $this->load->view('admin/templates/footer');    
        }else{
            $title = $this->security->xss_clean($this->input->post('title'));
            $text = $this->security->xss_clean($this->input->post('text'));

        }
        //Check for data
        if(!isset($title) || !isset($text)){
           $check = 0; 
        }else{
            $check = 1;
        }
        
        //Send to the database
        if($check == TRUE){
        $news_data = array("title"=>$title,"text"=>$text);
        $this->load->model('admin/news_model');
        $this->news_model->add_news_item($news_data);
        header('Location:' . BASE_URL . 'news');
        }
     }
    
        public function edit_news_item($id = false){
        $this->load->model('admin/news_model');
        $data['get_news_item'] = $this->news_model->get_news($id);
        //Check if valid page data
        if(empty($data['get_news_item'])){
            header('Location:' . BASE_URL . 'news');
        } 
        $this->load->model('admin/dashboard_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $data['page_list'] = $this->dashboard_model->get_page_list();    
        $this->load->model('admin/links_model');
        $data['news_item'] = $this->news_model->get_news($id);   
        $data['page_title'] = $data['news_item']['title'];
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/edit_news_item',$data);
        $this->load->view('admin/templates/footer');  
    }
    
        
    public function update_news_item(){
        $this->form_validation->set_rules('id', 'Id', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');   
        if ($this->form_validation->run() == FALSE){
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page_list'] = $this->dashboard_model->get_page_list();
            $data['page_title'] = 'Edit News Item';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/edit_news_item',$data);
            $this->load->view('admin/templates/footer');    
        }else{
            $id =  $this->security->xss_clean($this->input->post('id'));
            $title = $this->security->xss_clean($this->input->post('title'));
            $text = $this->input->post('text');

        }
        //Check for data
        if(!isset($title) || !isset($text)){
           $check = 0; 
        }else{
            $check = 1;
        }
        
        //Send to the database
        if($check == TRUE){
        $news_item_data = array("id"=>$id,"title"=>$title,"text"=>$text);
        $this->load->model('admin/news_model');
        $this->news_model->update_news_item($news_item_data);
        header('Location:' . BASE_URL . 'news');
        }
    }
        
    public function check_delete_item($id){
            $this->load->model('admin/news_model');
            $data['news'] = $this->news_model->check_delete_news($id);
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page_list'] = $this->dashboard_model->get_page_list();
            $this->load->view('admin/templates/header');
            $this->load->view('admin/check_delete_news',$data);
            $this->load->view('admin/templates/footer'); 
    }
    
    public function delete_news($id){
         if($_SESSION['level'] != 'admin'){
           header('Location:' . BASE_URL . 'news');  
         }else{ 
            $this->load->model('admin/news_model');
            $this->news_model->delete_news($id);
            header('Location:' . BASE_URL . 'news');
            }
    }
}