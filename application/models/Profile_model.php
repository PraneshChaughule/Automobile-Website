<?php 
class Profile_model extends CI_Model{
		
	public function  __construct(){
		parent::__construct();
		$this->load->database();
	}
	

/*
	| -------------------------------------------------------------------
	| check unique fields
	| -------------------------------------------------------------------
	|
	*/
	public function isUnique($table, $field, $value,$id='')
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field,$value);
		if($id!='')
		{
			$this->db->where("id != ",$id);
		}
		$query = $this->db->get();
		// echo "<pre>";
		// print_r($query);exit();
		$data = $query->num_rows();
		return ($data > 0)?FALSE:TRUE;
	}

		/*
	| -------------------------------------------------------------------
	| Insert data
	| -------------------------------------------------------------------
	|
	| general function to insert data in table
	|
	*/
	public function insertData($table, $data)
	{
		
		$result = $this->db->insert($table, $data);

		if($result == 1){

			$id=$this->db->insert_id();
			return  $id;

		}else{
			return false;
		}
	}
	
	/* Verify the login info with database 
	public function logInfo($table, $username, $password)
	{ 	
		//$result=$this->db->select("select * from 'registration' where username='".$username."' and password='".$password."'");
		$query=$this->db->where(['email_id'=>$username,'user_pass'=>$password])
							->get('registration');
		if($query->num_rows()){
			echo 'Successfully logged In';
		}else{
			echo 'Incorrect username/password.';
		}
	}*/
	
	public function logInfo()
	{	
		$query=$this->db->where(['email_id'=>$username,'user_pass'=>$password])
							->get('registration');
		if($query->num_rows()){
			return true;
		}else{
			return false;
		}
	}
	public function insertInfo($data)
	{	
		$this->db->insert('carinfo', $data);
	}
	
	
	public function insertUsed($data)
	{	
		$this->db->insert('carused', $data);
	}


/*	public function insertData_batch($table, $data)
	{
		
		$this->db->insert_batch($table, $data);
		return true;
	}
	
	
	/*
	| -------------------------------------------------------------------
	| Update data
	| -------------------------------------------------------------------
	|
	| general function to update data
	|
	*/
	
/*	public function updateData($table, $data, $where)
	{

		$this->db->where($where);
		if($this->db->update($table, $data)){

			return 1;

		}else{

			return 0;
		}
	}
	
	
	
	/*
	| -------------------------------------------------------------------
	| Select data
	| -------------------------------------------------------------------
	|
	| general function to get result by passing nesessary parameters
	|
	*/
	public function selectData($table, $fields='*', $where='')
	{
		$this->db->select($fields);
		$this->db->from($table);
		if ($where != "") {
			$this->db->where($where);
		}

		$query = $this->db->get();

		//if ($type == "rowcount") {
			//$data = $query->num_rows();
		//}else{
			$data = $query->result();
		//}

		#echo "<pre>"; print_r($this->db->queries); exit;
		$query->result();

		return $data;
	}
}