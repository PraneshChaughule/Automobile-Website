<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require ("common/Index_Controller.php");
class admin extends Index_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('regmodel');
		//$this->user_session = $this->session->userdata('user_session');

	} 
	public function index()
	{
		$this->load->view('admin_car');
	}
}