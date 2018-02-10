<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {


	public function contact_page(){
        
        $this->load->model('admin/dashboard_model');
        $this->load->model('admin/pages_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $data['page_list'] = $this->dashboard_model->get_page_list();
        $page = 'contact-page';
        $data['contact_data'] = $this->pages_model->get_page_for_edit($page);
        $data['page_title'] = 'Edit Contact Page';
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/edit_contact_page',$data);
        $this->load->view('admin/templates/footer');
	}
    
    public function update_contact_page(){
        
        $this->form_validation->set_rules('id', 'Id', 'required'); 
        $this->form_validation->set_rules('mob', 'Mobile', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required'); 
        $this->form_validation->set_rules('email', 'Email', 'required'); 
        
        if ($this->form_validation->run() == FALSE){
            $this->load->model('admin/dashboard_model');
            $this->load->model('admin/pages_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page_list'] = $this->dashboard_model->get_page_list();        
            $page = 'contact-page';
            $data['contact_data'] = $this->pages_model->get_page_for_edit($page);
            $data['page_title'] = 'Edit Contact Page';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/edit_contact_page',$data);
            $this->load->view('admin/templates/footer');    
        }else{
            $id = $this->security->xss_clean($this->input->post('id'));
            $tel = $this->security->xss_clean($this->input->post('tel'));
            $mob = $this->security->xss_clean($this->input->post('mob'));
            $address = $this->input->post('address');
            $email = $this->security->xss_clean($this->input->post('email'));
        }
        //Check for data
        if(!isset($mob) || !isset($address) || !isset($email)){
           $check = 0; 
        }else{
            $check = 1;
        }
        
        //Send to the database
        if($check == TRUE){
        $contact_data = array("id"=>$id,"tel"=>$tel,"mob"=>$mob,"address"=>$address,"email"=>$email);
        $this->load->model('admin/pages_model');
        $this->pages_model->update_contact_page($contact_data);
        header('Location:' . BASE_URL . 'pages/contact_page');
        }       
    }
    
	public function about_page(){
        
        $this->load->model('admin/dashboard_model');
        $this->load->model('admin/pages_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $data['page_list'] = $this->dashboard_model->get_page_list();
        $page = 'about-page';
        $data['about_data'] = $this->pages_model->get_page_for_edit($page);
        $data['page_title'] = 'Edit About Page';
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/edit_about_page',$data);
        $this->load->view('admin/templates/footer');
	}
    

     public function update_about_page(){
        
        $this->form_validation->set_rules('id', 'Id', 'required'); 
        $this->form_validation->set_rules('about_content', 'Page Content', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->model('admin/dashboard_model');
            $this->load->model('admin/pages_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $data['page_list'] = $this->dashboard_model->get_page_list();        
            $page = 'about-page';
            $data['about_data'] = $this->pages_model->get_page_for_edit($page);
            $data['page_title'] = 'Edit About Page';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/edit_about_page',$data);
            $this->load->view('admin/templates/footer');    
        }else{
            $id = $this->security->xss_clean($this->input->post('id'));
            $content = $this->security->xss_clean($this->input->post('about_content'));
        }
        //Check for data
        if(!isset($id) || !isset($content)){
           $check = 0; 
        }else{
            $check = 1;
        }
        
        //Send to the database
        if($check == TRUE){
        $about_data = array("id"=>$id,"content"=>$content);
        $this->load->model('admin/pages_model');
        $this->pages_model->update_about_page($about_data);
        header('Location:' . BASE_URL . 'pages/about_page');
        }       
    }   
    
	public function welfare_page(){
        
        $this->load->model('admin/dashboard_model');
        $this->load->model('admin/pages_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $data['page_list'] = $this->dashboard_model->get_page_list();
        $page = 'welfare-page';
        $data['welfare_data'] = $this->pages_model->get_page_for_edit($page);
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/edit_welfare_page',$data);
        $this->load->view('admin/templates/footer');
	}
 
	public function info_page(){
        
        $this->load->model('admin/dashboard_model');
        $this->load->model('admin/pages_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $data['page_list'] = $this->dashboard_model->get_page_list();
        $page = 'info-page';
        $data['info_data'] = $this->pages_model->get_page_for_edit($page);
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/edit_info_page',$data);
        $this->load->view('admin/templates/footer');
	}
    
	public function donate_page(){
        
        $this->load->model('admin/dashboard_model');
        $this->load->model('admin/pages_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $data['page_list'] = $this->dashboard_model->get_page_list();
        $page = 'donate-page';
        $data['donate_data'] = $this->pages_model->get_page_for_edit($page);
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/edit_donate_page',$data);
        $this->load->view('admin/templates/footer');
	}
    
    public function shop_page(){
        
        $this->load->model('admin/dashboard_model');
        $this->load->model('admin/pages_model');
        $data['admin_links'] = $this->dashboard_model->get_admin_links();
        $data['page_list'] = $this->dashboard_model->get_page_list();
        $page = 'shop-page';
        $data['shop_data'] = $this->pages_model->get_page_for_edit($page);
        $this->load->view('admin/templates/header',$data);
        $this->load->view('admin/edit_shop_page',$data);
        $this->load->view('admin/templates/footer');
	}   
    
}