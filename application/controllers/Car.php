<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require ("common/Index_Controller.php");
class Car extends Index_Controller {

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
		$this->load->view('admin_car');
	}/*
	public function index()
	{
		$data = $this->session->userdata('user_session');
		$data['cars'] = $this->Profile_model->selectData('carinfo','*');
		$this->load->view('home',$data);
	}*/
	
	
	
	/*public function signup()
	{
		$this->load->view('reg');
	}*/
	public function home()
	{
		//$session=$this->session->userdata('user_session');
		$data = $this->session->userdata('user_session');
		$this->session->set_flashdata('success', "SUCCESS_MESSAGE_HERE");
		$this->load->view('home', $data);
	}
	
	public function admin_used()
	{
		$this->load->view('admin_used');
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
	
	
	 /*public function validation()  
    { 
        if ($this->Profile_model->logInfo()){   
			echo 'Successfully logged In';
        } else {  
			echo 'Incorrect username/password.';
        }  
    } */ 
	
	
	
	public function get_userdata()
	{
		$user_id = 0;
		$user_info = $this->Profile_model->selectData("registration",'*',array("reg_id"=>$user_id));
		//print_r($user_info); exit();
	}
	
	/* Inserting new car info in db*/
	
	public function insert_car(){
		$car_id=0;
		$data = array();
		$data = $_POST;
		$info = pathinfo($_FILES['car_image']['name']);
		$ext = $info['extension']; // get the extension of the file
		$fname = $info['filename'];
		$newname = $fname.'.'.$ext; 
		$target = 'DB_Image/'.$newname;
		move_uploaded_file( $_FILES['car_image']['tmp_name'], $target);
		//print_r($filename);
		if (isset($_POST['submit'])) { 
			// Get all the submitted data from the form 
			$this->Profile_model->insertInfo($data, $filename);
			move_uploaded_file($tempname, $folder);
			// Get all the submitted data from the form
		} 
	}  
	
	/* Inserting used car info in db*/
	public function insert_used(){
		$used_id=0;
		$data = array();
		$data = $_POST;
		//$data['used_id'] = $used_id;
		$fname = $_FILES["cimg"]["name"];
		$tmpname = $_FILES["cimg"]["tmp_name"];
		$folder = "Used_img/".$fname;
		if(isset($_POST['submit'])){
			move_uploaded_file($tmpname, $folder);
			$this->Profile_model->insertUsed($data, $fname);
		}
		//print_r($data); exit();
		//$this->Profile_model->insertUsed($data);
		//$get_admin_id = $this->Profile_model->insertData('carused',$data);
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
	
	
	/*$profile_image=$this->Profile_model->upload_org_filename('bus_company_logo','company_logos/'.$id,$allowd="jpg|jpeg|png",array('width'=>200,'height'=>300));*/
}