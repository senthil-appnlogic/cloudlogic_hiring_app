<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class GeneralAPI extends REST_Controller {    
    function GeneralAPI()
    {
    	header('Access-Control-Allow-Origin:*');
		header("Access-Control-Allow-Methods: GET,POST,DELETE");
		parent::__construct();
		$this->load->model('GeneralMod');
    }
    
	

	function candidateRegister_post(){
		$id=$this->post('reg_id');
		$data['name']=$this->post('reg_name');
		$data['email']=$this->post('reg_email');
		$data['phone']=$this->post('reg_phone');
		$data['pass']=$this->post('reg_pass');
		$data['confirm_pass']=$this->post('reg_confirm_pass');
		if($id==null){
			$result=$this->GeneralMod->addCandidateDetails($data);
			if (!empty($result)){
				$this->set_response(['status' =>TRUE,'message'=>'Category Inserted Successfully'], REST_Controller::HTTP_OK); 
			}
			else
			{
				$this->set_response(['status' =>FALSE,'message'=>'Data not found'], REST_Controller::HTTP_OK);
			}
		}else{
			$result=$this->GeneralMod->editCandidateDetails($id,$data);
			if (!empty($result)){
				$this->set_response(['status' =>TRUE,'message'=>'Category Updated Successfully'], REST_Controller::HTTP_OK);
			}
			else
			{
				$this->set_response(['status' =>FALSE,'message'=>'Data not found'], REST_Controller::HTTP_OK);
			}
		}
	}

	function login_get(){
		$id=$this->get('reg_name');
	}
	
}