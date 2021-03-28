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
	public function insertInfo($data, $filename)
	{	
		$this->db->insert('carinfo', $data, $filename);
	}
	
	
	public function insertUsed($data, $filename)
	{	
		$this->db->insert('carused', $data, $filename);
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
	/*function upload_org_filename($input = "", $folder="default", $allowd="", $thumb="")
  	{
	    $this->load->library('upload');
	    $this->load->library('image_lib');
	    $structure = DOC_ROOT_UPLOAD_PATH;
	    $folders = explode("/", $folder);
	    foreach($folders as $dir)
	    {
		    if($dir != "")
			{
			     if (!file_exists($structure.$dir))
				{
				      mkdir($structure.$dir, 0777, true);
				      chmod($structure.$dir, 0777);
			     }
			     else{
				      chmod($structure.$dir, 0777);
			     }
			     $structure .= $dir."/";
			     $folder = $dir;
	      	}
		}
   		if (!file_exists($structure.'thumbs'))
		{
		    mkdir($structure.'thumbs', 0777, true);
		    chmod($structure.'thumbs', 0777);
		}
		 else{
			 chmod($structure.'thumbs', 0777);
		}
		   $config['upload_path'] = $structure;
		   $config['allowed_types'] = $allowd;
		   $config['max_size'] = 20048;   //$config['file_name'] = date('YmdHis').rand(0,999);
		   $this->upload->initialize($config);
		   if($this->upload->do_upload($input))
		   {
			    $data = $this->upload->data();
			    if($thumb != "" && isset($thumb['width']) && isset($thumb['height']))
			    {
				  $thumbconfig = array(   'image_library' => 'gd2',   'source_image' => $data ['full_path'],   'new_image' => $data ['file_path']."thumbs",   'maintain_ratio' => TRUE,   'create_thumb' => TRUE,   'thumb_marker' => "",   'width' => $thumb['width'],   'height' => $thumb['height']  );
				  $this->image_lib->initialize($thumbconfig);
				  if(!$this->image_lib->resize())
				  {   $error = $this->image_lib->display_errors();   //print_r($error);  }    }    return $data;   }   else  {   $error = $this->upload->display_errors();
				   //print_r($error); 
				   return false;
				  }
  				return false;*/
}