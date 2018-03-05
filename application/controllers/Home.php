<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {


	public function index()
	{
            $data['profiles'] = $this->profiles_model->get_profiles();
            $data['contact_data'] = $this->home_model->contact_page_data();
            $data['footer_links'] = $this->home_model->get_links();
            $data['footer_donations'] = $this->dashboard_model->get_donations_section();               
            $data['page_title'] = 'Home';
            $this->load->view('templates/homeHeader',$data);
            $this->load->view('home',$data);
            $this->load->view('templates/footer',$data);
	}
      public function about(){
            $data['about_data'] = $this->home_model->about_page_data();
            $data['contact_data'] = $this->home_model->contact_page_data();   
            $data['footer_links'] = $this->home_model->get_links();
            $data['footer_donations'] = $this->dashboard_model->get_donations_section();          
            $data['page_title'] = 'About us';
            $this->load->view('templates/header',$data);
            $this->load->view('about',$data);
            $this->load->view('templates/footer',$data);
    }  
    public function contact(){
            $data['contact_data'] = $this->home_model->contact_page_data();
            $data['footer_links'] = $this->home_model->get_links();
            $data['footer_donations'] = $this->dashboard_model->get_donations_section();       
            $data['page_title'] = 'Contact us';
            $this->load->view('templates/header',$data);
            $this->load->view('contact',$data);
            $this->load->view('templates/footer',$data);
    }
    
    public function links(){
            $data['links'] = $this->links_model->get_links(); 
            $data['contact_data'] = $this->home_model->contact_page_data();       
            $data['page_title'] = 'Useful Links';
            $this->load->view('templates/header',$data);
            $this->load->view('links',$data);
            $this->load->view('templates/footer',$data);        
    }
     
    public function welfare(){
            $data['welfare_data'] = $this->home_model->welfare_page_data();
            $data['contact_data'] = $this->home_model->contact_page_data();  
            $data['footer_links'] = $this->home_model->get_links();
            $data['footer_donations'] = $this->dashboard_model->get_donations_section();        
            $data['page_title'] = 'Animal welfare';
            $this->load->view('templates/header',$data);
            $this->load->view('welfare',$data);
            $this->load->view('templates/footer');
    } 
    
    public function info(){
            $data['info_data'] = $this->home_model->info_page_data();
            $data['contact_data'] = $this->home_model->contact_page_data(); 
            $data['footer_links'] = $this->home_model->get_links();
            $data['footer_donations'] = $this->dashboard_model->get_donations_section();         
            $data['page_title'] = 'Information';
            $this->load->view('templates/header',$data);
            $this->load->view('info',$data);
            $this->load->view('templates/footer',$data);
    } 
    
    public function donations(){
            $data['donate_data'] = $this->home_model->donate_page_data();
            $data['contact_data'] = $this->home_model->contact_page_data();
            $data['footer_links'] = $this->home_model->get_links();
            $data['footer_donations'] = $this->dashboard_model->get_donations_section();         
            $data['page_title'] = 'Donate';
            $this->load->view('templates/header',$data);
            $this->load->view('donations',$data);
            $this->load->view('templates/footer',$data);
    } 
    
    public function shop(){
            $data['shop_data'] = $this->home_model->shop_page_data();
            $data['contact_data'] = $this->home_model->contact_page_data();
            $data['footer_links'] = $this->home_model->get_links();
            $data['footer_donations'] = $this->dashboard_model->get_donations_section(); 
            $data['page_title'] = 'Items for sale';
            $this->load->view('templates/header',$data);
            $this->load->view('shop',$data);
            $this->load->view('templates/footer',$data);
    } 
    
}
