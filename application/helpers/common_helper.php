<?php

function public_path($type="www"){
	return base_url()."public/";
}

function is_login()
{
	$CI =& get_instance();
	$session = $CI->session->userdata('user_session');
	/*if(!isset($session[])){
		redirect(base_url());
	}*/
}
?>