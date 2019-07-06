<?php 

if(!isset($_SESSION['admin'])){
	$url=URL.'index.php/login';
	header('location:'.$url);
	
}
?>
<?php
class Brand extends Controller{
	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		
		$data['brand'] = $this->model->getBrandPaper($page);
		$data['total_rows'] = count($this->model->getAllBrand());  
		$data['trash'] = $this->model->getNumberOfTrashItem('brands');
		$data["page"]="dashboard/pages/brand/list";
		$this->load->view("dashboard/index",$data);
	}
	public function brandlist($page){
		
		$data['brand'] = $this->model->getBrandPaper($page);
		$data['total_rows'] = count($this->model->getAllBrand());  
		$data['trash'] = $this->model->getNumberOfTrashItem('brands');
		$data["page"]="dashboard/pages/brand/list";
		$this->load->view("dashboard/index",$data);
	}
	public function frmAdd(){
		$data['brand'] = $this->model->getAllBrand();
		$data["page"]="dashboard/pages/brand/add";
		$this->load->view("dashboard/index",$data);
	} 
	public function add(){
		$a=$this->model->addNewBrand();
		if($a==0){
			$data["page"]="dashboard/pages/error";
			$data["error"]="brand da ton tai";
			$this->load->view("dashboard/index",$data);
		}
		else{
			
			header("Location:../brand/brandlist/1");
		}
	}

	public function frmEdit($id){
		$data['brand'] = $this->model->getAllBrand();
		$data['edit'] = $this->model->getOneBrand($id);
		$data["page"]="dashboard/pages/brand/Edit";
		$this->load->view("dashboard/index",$data);
	} 

	public function editBrand($id){
		$a=$this->model->editBrand($id);
		if($a==0){
			$data["page"]="dashboard/pages/error";
			$data["error"]="brand da ton tai";
			$this->load->view("dashboard/index",$data);
		}
		else{

			header("Location:../brandlist/1");
		}
	}

	public function sendToTrash($id){
		$this->model->TrashItem("brands",$id);
		header("Location:../brandlist/1");
	}

	public function trashBrand($page){
		$data['trash']=$this->model->getTrashBrandByPaper($page);
		$data['total_rows'] = count($this->model->countTrash()); 
		$data['page']="dashboard/pages/brand/listtrash";
		$this->load->view("dashboard/index",$data);
	}
	public function restore($id){
		$this->model->restoreItem("brands",$id);
		header("Location:../trashBrand/1");
	}

	public function del($id)
	{
		$a=$this->model->delBrand($id);
		if($a==0){
			$data["page"]="dashboard/pages/error";
			$data["error"]="brand co san pham khong duoc xoa";
			$this->load->view("dashboard/index",$data);
		}
		else{
			header("Location:../trashBrand/1");
		}
	}

	public function changeStatus($id)
	{
		$this->model->changeStatus("brands");
	}
}
?>