<?php 

if(!isset($_SESSION['admin'])){
	$url=URL.'index.php/login';
	header('location:'.$url);
	
}
?>
<?php
class Category extends Controller{
	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data['category'] = $this->model->getCategoryPaper($page);
		$data['total_rows'] = count($this->model->getAllCategory());  
		$data['trash'] = $this->model->getNumberOfTrashItem('category');
		$data["page"]="dashboard/pages/category/list";
		$this->load->view("dashboard/index",$data);
		
	}
	public function categoryList($page){
		$data['category'] = $this->model->getCategoryPaper($page);
		$data['total_rows'] = count($this->model->getAllCategory());  
		$data['trash'] = $this->model->getNumberOfTrashItem('category');
		$data["page"]="dashboard/pages/category/list";
		$this->load->view("dashboard/index",$data);
	} 
	public function frmAdd(){
		$data['category'] = $this->model->getAllCategory();
		$data["page"]="dashboard/pages/category/add";
		$this->load->view("dashboard/index",$data);
	} 
	public function add(){
		$a=$this->model->addNewCategory();
		if($a==0){
			$data["page"]="dashboard/pages/error";
			$data["error"]="category da ton tai";
			$this->load->view("dashboard/index",$data);
		}
		else{
			
			header("Location:../category/categoryList/1");
		}
	}

	public function frmEdit($id){
		$data['category'] = $this->model->getAllCategory();
		$data['edit'] = $this->model->getOneCategory($id);
		$data["page"]="dashboard/pages/category/Edit";
		$this->load->view("dashboard/index",$data);
	} 
	public function editCategory($id){
		$a=$this->model->editCategory($id);
		if($a==0){
			$data["page"]="dashboard/pages/error";
			$data["error"]="category da ton tai";
			$this->load->view("dashboard/index",$data);
		}
		else{

			header("Location:../categoryList/1");
		}
	}
	public function sendToTrash($id){
		$this->model->TrashItem("category",$id);
		header("Location:../categoryList/1");
	}
	public function trashCategory($page){
		$data['trash']=$this->model->getTrashCategoryByPaper($page);
		$data['total_rows'] = count($this->model->countTrash()); 
		$data['page']="dashboard/pages/category/listtrash";
		$this->load->view("dashboard/index",$data);
	}
	public function restore($id){
		$this->model->restoreItem("category",$id);
		header("Location:../trashCategory/1");
	}
	public function del($id){
		$a=$this->model->delCategory($id);
		if($a==0){
			$data["page"]="dashboard/pages/error";
			$data["error"]="category co san pham khong duoc xoa";
			$this->load->view("dashboard/index",$data);
		}
		else{
			header("Location:../trashCategory/1");
		}
	}
	public function changeStatus($id){
		$this->model->changeStatus("category");
	}
}

?>