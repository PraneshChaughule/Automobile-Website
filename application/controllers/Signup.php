<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require ("common/Index_Controller.php");
class Signup extends Index_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){

		parent::__construct();
		$this->load->model('Profile_model');

		is_login();

		$this->user_session = $this->session->userdata('user_session');
	}
	
	public function sign()
	{
		$this->load->view('reg');
	}
	
	/* Insert register data */
	public function insert_userdata(){
		$reg_id = 0;
		$bus_id = 0;
		
		$register_data = array();
		$register_data = $_POST;	
		$register_data['bus_id'] = $bus_id;
		$register_data['reg_id'] = $reg_id;
		$exist_email = $this->Profile_model->isUnique('registration','email_id',$register_data['email_id']);
		//print_r($exist_email);
		if($exist_email==TRUE){
		$get_admin_id = $this->Profile_model->insertData('registration',$register_data);
		$this->session->set_flashdata('success',"Profile has been created successfully");
		$register_data['success'] = 'Yes';
		//print_r($register_data);exit();
		$this->load->view('home',$register_data);
		}else{
			exit();
		}
	}
}
