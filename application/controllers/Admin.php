<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {


	public function index()
	{
        $this->load->model('admin/dashboard_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $data['page_list'] = $this->dashboard_model->get_page_list();
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/dashboard',$data);
        $this->load->view('admin/templates/footer');
	}
    
    // Function to get the links for the links admin page
    
    public function links(){
        $this->load->model('admin/dashboard_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $data['page_list'] = $this->dashboard_model->get_page_list();
        $this->load->model('admin/links_model');
        $data['links'] = $this->links_model->get_links();
        $data['page_title'] = 'Links';
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/links',$data);
        $this->load->view('admin/templates/footer');        
    }
    
    public function donations(){
        $this->load->model('admin/dashboard_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $data['page_list'] = $this->dashboard_model->get_page_list();
        $this->load->model('admin/dashboard_model');
        $data['donations_data'] = $this->dashboard_model->get_donations_section();
        $data['page_title'] = 'Donations Section';
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/donations_section',$data);
        $this->load->view('admin/templates/footer');       
    }
    
         public function update_donations_section(){
        
        $this->form_validation->set_rules('id', 'Id', 'required'); 
        $this->form_validation->set_rules('donations_content', 'Donations Content', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->model('admin/dashboard_model');
            $this->load->model('admin/pages_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page_list'] = $this->dashboard_model->get_page_list();        
            $data['donations_data'] = $this->dashboard_model->get_donations_section();
            $data['page_title'] = 'EdiDonations Section';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/donations_section',$data);
            $this->load->view('admin/templates/footer');    
        }else{
            $id = $this->security->xss_clean($this->input->post('id'));
            $content = $this->security->xss_clean($this->input->post('donations_content'));
        }
        //Check for data
        if(!isset($id) || !isset($content)){
           $check = 0; 
        }else{
            $check = 1;
        }
        
        //Send to the database
        if($check == TRUE){
        $donations_data = array("id"=>$id,"content"=>$content);
        $this->load->model('admin/dashboard_model');
        $this->dashboard_model->update_donations_section($donations_data);
        header('Location:' . BASE_URL . 'admin/donations');
        }       
    } 
}

