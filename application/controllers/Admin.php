<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {


	public function index()
	{
            $this->load->model('admin/dashboard_model');

            $this->load->view('admin/templates/header');
            $this->load->view('admin/dashboard');
            $this->load->view('admin/templates/footer');
	}
    

}

