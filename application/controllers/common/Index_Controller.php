<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index_Controller extends CI_Controller {

	protected $currentController;
	protected $currentAction;
	

	
	
	function __construct(){
		parent::__construct();
		$this->load->model('Profile_model');
		$this->user_session = $this->session->userdata('user_session');
		$this->msg_session=$this->session->userdata('msg_session');
		
		  
		if (isset($this->user_session['status']) && $this->user_session['status']!="Active") {

			
           $this->session->sess_destroy();

		   redirect('https://'.$_SERVER['HTTP_HOST'].'/automobile/');
		}

		global $languages;
		/*$this->lang_session = $this->session->userdata('lang_session');
		#pr($this->lang_session,1);
		if(isset($_GET) && isset($_GET['lang']) && isset($this->lang_session['lang']))
		{
			if(in_array($_GET['lang'],$languages))
			{
				$language=$_GET['lang'];
			}
			else
			{
				$language='english';
			}
			$this->session->set_userdata('lang_session',array('lang'=>$language));
			$this->lang_session = $this->session->userdata('lang_session');
		}
		else
		{
			if(!isset($this->lang_session['lang']))
			{
			$this->session->set_userdata('lang_session',array('lang'=>'english'));
			$this->lang_session = $this->session->userdata('lang_session');
			}
		}*/
		
		//$this->lang->load($this->lang_session['lang'],$this->lang_session['lang']);
		$controller_name=$this->router->fetch_class();
		$method=$this->router->fetch_method();
		
	}
	
}