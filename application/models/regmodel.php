<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class regmodel extends CI_Model {
	
	public function insert(){
		$data = array(
		
			"username" => $this->input->post('username'),
			"email_id" => $this->input->post('email_id'),
			"contact" => $this->input->post('contact'),
			"user_pass" => $this->input->post('user_pass'),	
		);
		
		if($this->db->insert('registration',$data)){
			return true;
		}else{
			return false;
		}
	}
}
