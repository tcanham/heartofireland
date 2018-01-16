<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {


	public function index()
	{
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/dashboard',$data);
            $this->load->view('admin/templates/footer');
	}
    
    public function links(){
            $this->load->model('admin/dashboard_model');
            $data['admin_links'] = $this->dashboard_model->get_admin_links();       
            $data['page'] = 'Links';
            $this->load->view('admin/templates/header',$data);
            $this->load->view('admin/links',$data);
            $this->load->view('admin/templates/footer');        
    }
}

