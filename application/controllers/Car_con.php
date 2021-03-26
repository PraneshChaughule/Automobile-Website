<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require ("common/Index_Controller.php");
class Car_con extends Index_Controller {

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
	
	public function carsec()
	{	
		$data['success'] = 'No';
		$data['username'] = "";
		$data['cars'] = $this->Profile_model->selectData('carinfo','*');
		//print_r($data['cars']);exit();
		$this->load->view('carsec', $data);
	}
	
	
	public function get_cardetails()
	{
		$carname = $this->input->post('carname');
		$cars = $this->Profile_model->selectData('carinfo','*',array('cname'=>$carname));
		$carsinfo = (array) $cars[0];
		
		echo json_encode($carsinfo);
	}
	
	/*public function check()
	{
		
		if(isset($status)){ 
				if($status == 'Active') { 
					if (isset($_SESSION['success']) && $_SESSION['success'] == true) {
						echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
					}
					else {
						echo "Please log in first to see this page.";
					}
				}
			}	
	}*/
}	