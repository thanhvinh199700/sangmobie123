<?php 

if(!isset($_SESSION['admin'])){
	$url=URL.'index.php/login';
	header('location:'.$url);
	
}
?>
<?php
class Product extends Controller{
	public function __construct(){
		parent::__construct();
		
	}

	public function index($page=1){
		
		$data['product'] = $this->model->getProductPaper($page);
		$data['total_rows'] = count($this->model->getAllproduct());
		$data['category']=$this->model->getcategory();
		$data['brand']=$this->model->getbrand();
		$data['trash'] = $this->model->getNumberOfTrashItem('products');
		$data["page"]="dashboard/pages/product/list";
		$this->load->view("dashboard/index",$data);
	}
	public function ListProduct($page=1)
	{
		$data['product'] = $this->model->getProductPaper($page);
		$data['total_rows'] = count($this->model->getAllproduct());  
		$data['category']=$this->model->getcategory();
		$data['brand']=$this->model->getbrand();
		$data['trash'] = $this->model->getNumberOfTrashItem('products');
		$data["page"]="dashboard/pages/product/list";
		$this->load->view("dashboard/index",$data);
	}

	public function listPro()
	{
		$data['product'] = $this->model->getProduct();
		$data['category']=$this->model->getcategory();
		$data['brand']=$this->model->getbrand();
		$data['trash'] = $this->model->getNumberOfTrashItem('products');
		$data["page"]="dashboard/pages/product/list1";
		$this->load->view("dashboard/index",$data);
	}

	public function detail($id){
		$data['category'] = $this->model->getAllcategory($id);

		$data['brand'] = $this->model->getAllbrand($id);

		$data['detail']=$this->model->Detail($id);
		$data["page"]="dashboard/pages/product/detail";
		$this->load->view("dashboard/index",$data);
	}
	public function changeStatus($id){
		$this->model->changeStatus("products");
	}

	public function sendToTrash($id){
		$this->model->TrashItem("products",$id);
		header("Location:../ListProduct/1");
	}
	public function trashProduct($page=1){
		$data['trash']=$this->model->getTrashProductByPaper($page);
		$data['total_rows'] = count($this->model->countTrash()); 
		$data['page']="dashboard/pages/product/listtrash";
		$this->load->view("dashboard/index",$data);
	}
	public function restore($id){
		$this->model->restoreItem("products",$id);
		header("Location:../trashProduct/1");
	}
	public function del($id){
		$this->model->delProduct($id);
		header("Location:../trashProduct/1");
		
	}
	public function frmadd(){
		$data['category']=$this->model->getcategory();
		$data['brand']=$this->model->getbrand();
		$data['page']="dashboard/pages/product/add";
		$this->load->view("dashboard/index",$data);
	}

	public function frmEdit($id){
		$data['category']=$this->model->getcategory();
		$data['brand']=$this->model->getbrand();
		$data['edit'] = $this->model->getOneProduct($id);
		$data["page"]="dashboard/pages/product/Edit";
		$this->load->view("dashboard/index",$data);
	} 
	public function add(){
		$a=$this->model->addproduct();
		if($a==0){
			$data["page"]="dashboard/pages/error";
			$data["error"]="product da ton tai";
			$this->load->view("dashboard/index",$data);
		}
		else{
			header("Location:../product/ListProduct/4");
		}
	}
	public function Edit($id){
		$a=$this->model->updateproduct($id);
		if($a==0){
			$data["page"]="dashboard/pages/error";
			$data["error"]="product da ton tai";
			$this->load->view("dashboard/index",$data);
		}
		else{

			header("Location:../ListProduct/1");
		}
	}


}
?>