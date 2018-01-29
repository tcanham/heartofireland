<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {


	public function index()
	{
            $this->load->model('home_model');
            $this->load->model('profiles_model');
            $data['profiles'] = $this->profiles_model->get_profiles();
            $data['contact_data'] = $this->home_model->contact_page_data();
            $data['page_title'] = 'Home';
            $this->load->view('templates/homeHeader',$data);
            $this->load->view('home',$data);
            $this->load->view('templates/footer');
	}
      public function about(){
            $this->load->model('home_model');
            $data['about_data'] = $this->home_model->about_page_data();
            $data['contact_data'] = $this->home_model->contact_page_data();          
            $data['page_title'] = 'About us';
            $this->load->view('templates/header',$data);
            $this->load->view('about',$data);
            $this->load->view('templates/footer');
    }  
    public function contact(){
            $this->load->model('home_model');
            $data['contact_data'] = $this->home_model->contact_page_data();
            $data['page_title'] = 'Contact us';
            $this->load->view('templates/header',$data);
            $this->load->view('contact',$data);
            $this->load->view('templates/footer');
    }
    
    public function links(){
            $this->load->model('admin/links_model');
            $this->load->model('home_model');
            $data['links'] = $this->links_model->get_links(); 
            $data['contact_data'] = $this->home_model->contact_page_data();        
            $data['page_title'] = 'Useful Links';
            $this->load->view('templates/header',$data);
            $this->load->view('links',$data);
            $this->load->view('templates/footer');        
    }
     
    public function welfare(){
            $this->load->model('home_model');
            $data['welfare_data'] = $this->home_model->welfare_page_data();
            $data['contact_data'] = $this->home_model->contact_page_data();        
            $data['page_title'] = 'Animal welfare';
            $this->load->view('templates/header',$data);
            $this->load->view('welfare',$data);
            $this->load->view('templates/footer');
    } 
    
    public function info(){
            $this->load->model('home_model');
            $data['info_data'] = $this->home_model->info_page_data();
            $data['contact_data'] = $this->home_model->contact_page_data();       
            $data['page_title'] = 'Useful Information';
            $this->load->view('templates/header',$data);
            $this->load->view('info',$data);
            $this->load->view('templates/footer');
    } 
    
    public function donations(){
            $this->load->model('home_model');
            $data['donate_data'] = $this->home_model->donate_page_data();
            $data['contact_data'] = $this->home_model->contact_page_data();
            $data['page_title'] = 'Donate';
            $this->load->view('templates/header',$data);
            $this->load->view('donations',$data);
            $this->load->view('templates/footer');
    } 
    
    public function shop(){
            $this->load->model('home_model');
            $data['shop_data'] = $this->home_model->shop_page_data();
            $data['contact_data'] = $this->home_model->contact_page_data();
            $data['page_title'] = 'Items for sale';
            $this->load->view('templates/header',$data);
            $this->load->view('shop',$data);
            $this->load->view('templates/footer');
    } 
    
}
