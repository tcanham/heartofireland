<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {


	public function index()
	{
            $this->load->model('home_model');
            $this->load->model('profiles_model');
            $data['profiles'] = $this->profiles_model->get_profiles();
            $data['page'] = 'Home';
            $this->load->view('templates/homeHeader',$data);
            $this->load->view('home',$data);
            $this->load->view('templates/footer');
	}
    
}
