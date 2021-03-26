<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require ("common/Index_Controller.php");
class Signin extends Index_Controller {

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
	
	public function user_log()
	{
		$this->load->view('login');
	}
	
	public function insert_userlogin()
	{/*
		//$reg_id = $this->session->userdata['user_session']['reg_id'];
		//$bus_id = $this->session->userdata['user_session']['bus_id'];
		$register_data = array();
		$register_data = $_POST;	
		$exist_email = $this->Profile_model->logInfo('registration',$register_data);
		//print_r($register_data['Uname']); exit();
		//$this->load->view('home');
		*/
		$session = $this->session->userdata('user_session');
		
		if (isset($session['reg_id'])) {
			//&& $session['status']=="Active"
			$redirectId = $this->GetRedirectURL1($session['reg_id'],$session['bus_id']);

			redirect($redirectId);
		}
		
		$where = array();
		$string_post = implode(',', $_POST);
		//parse_str($_POST, $where);
		//print_r($where); exit();
		$where = $_POST;
		$remember = $where;
		$data = array();
		$email = $where['uname'];
		$password = $where['user_pass'];
		$data['success'] = 'Yes';
		
		if ($where) {
			$error = array();
			$e_flag=0;
			if(trim($where['uname']) == ''){
				$error['userid'] = 'Username cannot be blank.';
				$e_flag=1;
			}
			if(trim($where['user_pass']) == ''){
				$error['password'] = 'Password cannot be blank.';
				$e_flag=1;
			}
			
			if ($e_flag == 0) {
				$where = array(
				'email_id'		=>	$email,
				//'reg_password'	=>	md5($password),
				'user_pass'	=>	$password,
			);
				
			$chekUserEmail = $this->Profile_model->selectData('registration', '*', array('email_id'=>$email));
			if(!$chekUserEmail)
			{
				echo 'InvalidEmail';
				exit();
			}
			
			$user = $this->Profile_model->selectData('registration', '*', $where);
			//print $this->db->last_query(); exit();
			$data['username'] = $user[0]->username;
			if (count($user) > 0) {
			$session_data = array(
				'reg_id' => $user[0]->reg_id,
				'bus_id' => $user[0]->bus_id,
				'email'	 => $user[0]->email_id,
				'mobile' => $user[0]->contact,
				'username' => $user[0]->username,
				'status'=> $user[0]->status,
			);
			}
			$this->session->unset_userdata('user_session');
			$this->session->unset_userdata('client_session');
			$this->session->set_userdata('user_session',$session_data);
			//$query=$this->Profile_model->logInfo('registration', $username, $password);
			$redirectId = $this->findRedirectPath($session_data['reg_id'],$session_data['bus_id']);
			//echo $redirectId."/".$session_data['reg_id'];
			//exit;
			
			//$this->session->set_flashdata('success',"Profile has been created successfully");
			//$this->load->view('home', $data);
			}	
		}	
		
	}
	
	public function GetRedirectURL1($reg_id,$bus_id)
	{

		$redirectId = $this->findRedirectPath($reg_id,$bus_id);
		
		return 'Car/home';

	}
	
	function findRedirectPath($reg_id,$bus_id)
	{
		return 'Car/home';
	}
	
	public function logout()
	{

		$this->session->sess_destroy();

		redirect ('Car/home'); //('http://'.$_SERVER['HTTP_HOST'].'/index.php/Car');
	}
}
