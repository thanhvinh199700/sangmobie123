<?php
class Login_model extends Model{
	function __construct()
	{
		parent::__construct();
	}
	public function m_runLoginAdmin(){
		$u =$_POST['name'];
		$p =$_POST['pass'];
		$sql="SELECT * FROM  users WHERE name = '$u' and password = '$p' and role='admin' and status=1";
		$result = $this->getOne($sql);
		if(count($result)>0){
			$_SESSION['admin'] = $result['name'];
			return 1;
		}
		else {

			return 0;

		}
		
	}


	public function runRegistration(){
		$name=$_POST['fname'];
		$pass= sha1($_POST['pwd']);
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		if($_FILES['image']['size']==0){
			$i="100.png";
		}
		else{
			$file = $_FILES["image"];
			$i=$file["name"];
			$u=new Upload();
			$u->doUpload($file);
		}
		$address=$_POST['address'];
		date_default_timezone_set("Asia/Bangkok");
		$d = date('Y-m-d h:i:s');

		$check_sql="SELECT * FROM users where email='$email'";
		$check_result = $this->getQueryAll($check_sql);
		if(count($check_result)>0){
			return 0;
		}
		$sql="INSERT INTO users(name,password,email,avatar,phone,address,created_at)
		VALUES('$name','$pass','$email','$i','$phone','$address','$d')";
		print_r($sql);
		die;
		$this->NoneQuery($sql);
		return 1;
	}
	public function runLogin(){
		$u=$_POST['user'];
		$p= sha1($_POST['pwd']);
		$sql="SELECT * FROM  users WHERE status=1 and email= '$u' and password='$p' ";
		$result=$this->getOne($sql);
		if(count($result)>0)
		{
			$_SESSION['id'] = $result['id'];
			$_SESSION['user'] = $result['name'];
			$_SESSION['email'] = $result['email'];
			$_SESSION['phone'] = $result['phone'];
			$_SESSION['address'] = $result['address'];
			return 1;
		}
		else
		{
			return 0;
		}
		
	}
	
}
?>