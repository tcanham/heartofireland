<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {


	public function index()
	{
            $this->load->model('home_model');
            $data['page'] = 'Home';
            $this->load->view('templates/homeHeader',$data);
            $this->load->view('home',$data);
            $this->load->view('templates/footer');
	}
}
