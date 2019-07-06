<?php 

if(!isset($_SESSION['admin'])){
	$url=URL.'index.php/login';
	header('location:'.$url);
	
}
?>
<?php
class Fnew extends Controller{
	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		
	}
	public function fnewList($page=1){
		$data['fnew']=$this->model->getAllfNews($page);
		$data['total_rows'] = count($this->model->countgetAllNews());  
		$data['trash'] = $this->model->getNumberOfTrashItem('fnews');
		$data["page"]="dashboard/pages/fnew/list";
		$this->load->view("dashboard/index",$data);
	}
	public function changeStatus($id){
		$this->model->changeStatus("fnews");
	}

	public function del($id){
		$this->model->deleteFew($id);	
		header("Location:../trashfnews/1");
	
	}
	public function sendToTrash($id){
		$this->model->TrashItem("fnews",$id);
		header("Location:../fnewList/1");
	}
	public function trashfnews($page){
		$data['trash']=$this->model->getTrashNewsByPaper($page);
		$data['total_rows'] = count($this->model->countTrash()); 
		$data['page']="dashboard/pages/fnew/listtrash";
		$this->load->view("dashboard/index",$data);
	}

	public function restore($id){
		$this->model->restoreItem("fnews",$id);
		header("Location:../trashfnews/1");
	}

	public function frmAdd(){
		$data['page']="dashboard/pages/fnew/add";
		$this->load->view("dashboard/index",$data);
	}
	public function frmedit($id){
		$data['edit']=$this->model->getOnefnews($id);
		$data['page']="dashboard/pages/fnew/edit";
		$this->load->view("dashboard/index",$data);
	}
	public function addfnew(){
		$a=$this->model->addfnew();
		if($a==0){
			$data["page"]="dashboard/pages/error";
			$data["error"]="tin tức da ton tai";
			$this->load->view("dashboard/index",$data);
		}
		else{
			header("Location:../fnew/fnewList/1");
		}
	}
	public function editfnew($id){
		$a=$this->model->editfnew($id);
		if($a==0){
			$data["page"]="dashboard/pages/error";
			$data["error"]="tin tức da ton tai";
			$this->load->view("dashboard/index",$data);
		}
		else{
			header("Location:../fnewList/1");
		}
	}


}
?>