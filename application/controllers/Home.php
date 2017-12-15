<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {


	public function index()
	{
            $this->load->model('home_model');
        
            $this->load->view('templates/homeHeader');
            $this->load->view('home');
            $this->load->view('templates/footer');
	}
}
