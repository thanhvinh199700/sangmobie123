<?php 

if(!isset($_SESSION['admin'])){
	$url=URL.'index.php/login';
	header('location:'.$url);
	
}
?>
<?php 


class Order extends Controller{
	public function __construct(){
		parent::__construct();

	}

	public function index($page=1){
		$data['listusers']=$this->model->getAllorder($page);
		$data['total_rows']=count($this->model->countgetorder());
		$data["page"]="dashboard/pages/order/list";
		$this->load->view("dashboard/index",$data);
	}
	public function listorders($page=1){
		$data['listusers']=$this->model->getAllorder($page);
		$data['total_rows']=count($this->model->countgetorder());
		$data["page"]="dashboard/pages/order/list";
		$this->load->view("dashboard/index",$data);
	}
	public function changeStatus($id){
		$this->model->changeStatus("orders");
	}
	public function detail($id){
		$data['customer']=$this->model->Customer_detail($id);
		$data['detail']=$this->model->detail_order($id);
		$data['sum']=$this->model->sum($id);
		
		$data['name']=$this->model->product_name();
		$data["page"]="dashboard/pages/order/detail";
		$this->load->view("dashboard/index",$data);
			
	}

	public function del($id){
		$a=$this->model->delorder($id);
		if($a==0){
			$data["page"]="dashboard/pages/error";
			$data["error"]="order không thể xóa";
			$this->load->view("dashboard/index",$data);
		}
		else{
			header("Location:../listorders/1");
		}
	}


	

}
?>
