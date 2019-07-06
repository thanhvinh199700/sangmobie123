
<?php
class Dashboard extends Controller{
	public function __construct()
	{
		parent::__construct();
		//session_start();		
	}
	public function index(){
		if(!isset($_SESSION['admin'])){
			$this->load->view("dashboard/login");
		}
		else {
			$data["page"]="dashboard/pages/home";
			$this->load->view("dashboard/index",$data);
		 }

		
	}	

}
?>