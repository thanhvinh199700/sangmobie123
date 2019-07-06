<?php 

if(!isset($_SESSION['admin'])){
	$url=URL.'index.php/login';
	header('location:'.$url);
	
}
?>
<?php 


class User extends Controller{
	public function __construct(){
		parent::__construct();

	}

	public function index($page=1){
		$data['listusers']=$this->model->getAlluser($page);
		$data['total_rows']=count($this->model->countgetAlluser());
		$data["page"]="dashboard/pages/user/list";
		$this->load->view("dashboard/index",$data);
	}
	public function listusers($page=1){
		$data['listusers']=$this->model->getAlluser($page);
		$data['total_rows']=count($this->model->countgetAlluser());
		$data["page"]="dashboard/pages/user/list";
		$this->load->view("dashboard/index",$data);
	}
	public function deluser($id){
		$this->model->deleteUser($id);	
		header("Location:../listusers");
	}
	public function changeStatus($id){
		$this->model->changeStatus("users");
	}



	

}
?>

