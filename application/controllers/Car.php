<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->model('Profile_model');
		$this->load->library('session');
		is_login();
		$this->user_session=$this->session->userdata('user_session');
	}
	
	public function index()
	{
		$this->load->view('home');
	}
	/*public function index()
	{
		$data = $this->session->userdata('user_session');
		$data['cars'] = $this->Profile_model->selectData('carinfo','*');
		$this->load->view('carsec',$data);
	}*/
	
	public function get_cardetails()
	{
		$carname = $this->input->post('carname');
		$cars = $this->Profile_model->selectData('carinfo','*',array('cname'=>$carname));
		$carsinfo = (array) $cars[0];
		
		echo json_encode($carsinfo);
	}
	
	public function login()
	{
		$this->load->view('login');
	}
	public function signup()
	{
		$this->load->view('reg');
	}
	public function home()
	{
		//$session=$this->session->userdata('user_session');
		$data = $this->session->userdata('user_session');
		$this->session->set_flashdata('success', "SUCCESS_MESSAGE_HERE");
		$this->load->view('home', $data);
	}
	public function carsec()
	{	
		$data['success'] = 'No';
		$data['username'] = "";
		$data['cars'] = $this->Profile_model->selectData('carinfo','*');
		//print_r($data['cars']);exit();
		$this->load->view('carsec', $data);
	}
	public function used()
	{	
		$data['success'] = 'No';
		$data['username'] = "";
		$this->load->view('used_car', $data);
	}
	public function rent()
	{	
		$data['success'] = 'No';
		$data['username'] = "";
		$this->load->view('rental_car', $data);
	}
	public function service()
	{	
		$data['success'] = 'No';
		$data['username'] = "";
		$this->load->view('service', $data);
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
	 public function validation()  
    { 
        if ($this->Profile_model->logInfo()){   
			echo 'Successfully logged In';
        } else {  
			echo 'Incorrect username/password.';
        }  
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
	
	public function get_userdata()
	{
		$user_id = 0;
		$user_info = $this->Profile_model->selectData("registration",'*',array("reg_id"=>$user_id));
		//print_r($user_info); exit();
	}
	
	/* Inserting new car info */
	
	public function insert_car(){
		$car_id=0;
		$data = array();
		$data = $_POST;
		$data['car_id'] = $car_id;
		//print_r($data); exit();
		$this->Profile_model->insertInfo($data);
		//$get_admin_id = $this->Profile_model->insertData('carinfo',$data);
	}
	
	/* Inserting used car info */
	public function insert_used(){
		$used_id=0;
		$data = array();
		$data = $_POST;
		$data['used_id'] = $used_id;
		//print_r($data); exit();
		//$this->Profile_model->insertUsed($data);
		$get_admin_id = $this->Profile_model->insertData('carused',$data);
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

		redirect('https://'.$_SERVER['HTTP_HOST'].'/index.php/Car');
	}
}