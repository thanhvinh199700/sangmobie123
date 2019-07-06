<?php
class Login extends Controller{
	public function __construct()
	{
		parent::__construct();
	
	}
	public function index(){
		$this->load->view("dashboard/login");
	}
	public function runLoginAdmin(){
		$a=$this->model->m_runLoginAdmin();
		
		header('location:../dashboard');

		
	}

	public function registration(){ 

		// $_SESSION['thongbao']="Email/SDT đã tồn tại";
		$this->load->view("shop/pages/registrantion"); 
	} 
	public function runRegistration(){
		$a=$this->model->runRegistration();
		if($a == 0){
			
			header('location:../login/registration');
		}
		else
		{
			header('location:../frontend');
		}
	}

	public function Login(){
		$this->load->view("shop/pages/Login"); 
	}
	public function runLogin(){
		$a =$this->model->runLogin();
		if($a == 1){
			header('location:../frontend');
		}
		else{
			header('location:../Login/Login');
		}
	}

}
?>