<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class LoginAPI extends REST_Controller {    
    function LoginAPI()
    {
    	header('Access-Control-Allow-Origin:*');
		header("Access-Control-Allow-Methods: GET,POST,DELETE");
		parent::__construct();
		// $this->load->model('GeneralMod');
    }
    
	

	function candidateRegister_post(){
		// $id=$this->post('reg_id');
		// $data['name']=$this->post('reg_name');
		// $data['email']=$this->post('reg_email');
		// $data['phone']=$this->post('reg_phone');
		// $data['pass']=$this->post('reg_pass');
		// $data['confirm_pass']=$this->post('reg_confirm_pass');
		print_r($this->post());exit;
	}

	function login_get(){
		$id=$this->get('reg_name');
	}
	
}