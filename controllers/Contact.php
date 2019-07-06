<?php 

if(!isset($_SESSION['admin'])){
	$url=URL.'index.php/login';
	header('location:'.$url);
	
}
?>
<?php
class Contact extends Controller{
	public function index($page=1){
		$data['listcontact']=$this->model->getAllcontact($page);
		$data['total_rows']=count($this->model->countgetAllcontact());
		$data["page"]="dashboard/pages/contact/list";
		$this->load->view("dashboard/index",$data);
	}
	public function listcontact($page=1){
		$data['listcontact']=$this->model->getAllcontact($page);
		$data['total_rows']=count($this->model->countgetAllcontact());
		$data["page"]="dashboard/pages/contact/list";
		$this->load->view("dashboard/index",$data);
	}
	public function deletecontact($id){
		$this->model->deletecontact($id);	
		header("Location:../listcontact");
	}

}