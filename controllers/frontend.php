<?php
class Frontend extends Controller{
	public function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->model= new Frontend_Model;
		$data["menu"]=$this->model->menu();
		$data["category"]=$this->model->category();
		$data["boloc_category"]=$this->model->boloc_category();
		$data["phukien"]=$this->model->phukien();
		$data["sale_products"]=$this->model->m_PromotionProducts();
		$data["new_products"]=$this->model->m_getNewProducts();
		$data["page"]="shop/pages/home";
		$this->load->view("shop/index",$data);
	}
	public function all_products($page)
	{ 
		//$this->model= new Frontend_Model;
		$data['all_products'] = $this->model->getProductsByPager($page);
		$data["boloc_category"]=$this->model->boloc_category();
		$data['total_rows'] = count($this->model->getAllProducts());  
		$data["category"]=$this->model->category();
		$data["menu"]=$this->model->menu();
		$data["phukien"]=$this->model->phukien();
		$data['page'] = "shop/pages/allproduct"; 	
		$this->load->view("shop/index",$data);  
	} 
	public function new_products()
	{
		//$this->model= new Frontend_Model;
		$data["new_products"]=$this->model->m_getNewProducts();
		$data["boloc_category"]=$this->model->boloc_category();
		$data["category"]=$this->model->category();
		$data["menu"]=$this->model->menu();
		$data["phukien"]=$this->model->phukien();
		$data["page"]="shop/pages/newproduct";
		$this->load->view("shop/index",$data);
	}
	public function sale_products()
	{
		//$this->model= new Frontend_Model;
		$data["sale_products"]=$this->model->m_PromotionProducts();
		$data["boloc_category"]=$this->model->boloc_category();
		$data["category"]=$this->model->category();
		$data["menu"]=$this->model->menu();
		$data["phukien"]=$this->model->phukien();
		$data["page"]="shop/pages/saleprice";
		$this->load->view("shop/index",$data);
	}

	public function detail_products($id)
	{
		//$this->model= new Frontend_Model;
		$data["detail_products"]=$this->model->detail_product($id);
		$data["boloc_category"]=$this->model->boloc_category();
		$data["comment"]=$this->model->listcomment($id);
		// $data["user"]=$this->model->listuser();
		// echo "<pre>";
		// print_r();
		// echo "</pre>";exit();
		$catid=$data['detail_products']['product_category'];
		//echo $catid;die;
		$data["sanphamtuongtu"]=$this->model->sanphamtuongtu($catid);
		$data["category"]=$this->model->category();
		$data["menu"]=$this->model->menu();
		$data["phukien"]=$this->model->phukien();
		$data["page"]="shop/pages/detailproduct";
		$this->load->view("shop/index",$data);

	}

	public function Sreach_product($key)
	{
		
		if(isset($_GET['key'])){
			$data["sreach"]=$this->model->Sreach($key);
		}
		else{
			//echo "khog co"; die;
		}
		$data["category"]=$this->model->category();
		$data["boloc_category"]=$this->model->boloc_category();
		$data["menu"]=$this->model->menu();
		$data["phukien"]=$this->model->phukien();
		$data["page"]="shop/pages/Sreach";
		$this->load->view("shop/index",$data);
	}
	public function from1to5(){
		$data["sreach"]=$this->model->from1to5();
		$data["category"]=$this->model->category();
		$data["boloc_category"]=$this->model->boloc_category();
		$data["menu"]=$this->model->menu();
		$data["phukien"]=$this->model->phukien();
		$data["page"]="shop/pages/theogia";
		$this->load->view("shop/index",$data);
	}
	public function from5to10(){
		$data["sreach"]=$this->model->from5to10();
		$data["category"]=$this->model->category();
		$data["boloc_category"]=$this->model->boloc_category();
		$data["menu"]=$this->model->menu();
		$data["phukien"]=$this->model->phukien();
		$data["page"]="shop/pages/theogia";
		$this->load->view("shop/index",$data);
	}
	public function from10to15(){
		$data["sreach"]=$this->model->from10to15();
		$data["category"]=$this->model->category();
		$data["boloc_category"]=$this->model->boloc_category();
		$data["menu"]=$this->model->menu();
		$data["phukien"]=$this->model->phukien();
		$data["page"]="shop/pages/theogia";
		$this->load->view("shop/index",$data);
	}
	public function from15to20(){
		$data["sreach"]=$this->model->from15to20();
		$data["category"]=$this->model->category();
		$data["boloc_category"]=$this->model->boloc_category();
		$data["menu"]=$this->model->menu();
		$data["phukien"]=$this->model->phukien();
		$data["page"]="shop/pages/theogia";
		$this->load->view("shop/index",$data);
	}
	public function over20(){
		$data["sreach"]=$this->model->over20();
		$data["category"]=$this->model->category();
		$data["boloc_category"]=$this->model->boloc_category();
		$data["menu"]=$this->model->menu();
		$data["phukien"]=$this->model->phukien();
		$data["page"]="shop/pages/theogia";
		$this->load->view("shop/index",$data);
	}
	public function baohanh(){
		$data["menu"]=$this->model->menu();
		$this->load->view("shop/modules/baohanh",$data);
	}

	public function lienhe(){
		if(isset($_SESSION['user'])){
			$data["category"]=$this->model->category();
			$data["boloc_category"]=$this->model->boloc_category();
			$data["menu"]=$this->model->menu();
			$data["phukien"]=$this->model->phukien();
			$data["page"]="shop/modules/lienhe";
			$this->load->view("shop/index",$data);
		}
		else {
			echo "<script>alert('bạn chưa đăng nhập!');location.href=('".URL."index.php/login/login')</script>";
		}
		
	}
	public function gioithieu(){
		
		$data["menu"]=$this->model->menu();	
		$this->load->view("shop/modules/gioithieu",$data);
	}
	public function allNews($page){
		$data["category"]=$this->model->category();
		$data["boloc_category"]=$this->model->boloc_category();
		$data["menu"]=$this->model->menu();
		$data["phukien"]=$this->model->phukien();
		$data["all_news"]=$this->model->getAllnewsByPager($page);
		$data['total_rows'] = count($this->model->allnews());  
		$data["page"]="shop/pages/allNews";
		$this->load->view("shop/index",$data);
	}
	public function detail_news($id){
		$data["detail_news"]=$this->model->detail_news($id);
		$data["menu"]=$this->model->menu();	
		$this->load->view("shop/pages/detail_news",$data);
	}
	public function countcart($id){
		//var_dump($id);
		// $a=$_SESSION['cart']='hello';
		// echo $a;die;
//$_SESSION['carts']='th';


		if(isset($_GET['id']))
			$id=$_GET['id'];

		if(isset($_SESSION['cart'][$id]))
		{
			

			$_SESSION['cart'][$id]['qty']+=1;
			
		}
		else 
		{
			
			
			$_SESSION['cart'][$id]['qty']='1';
			

		}
		
		
		echo "<script>alert('Thêm Thành Công!');location.href=('".URL."index.php')</script>";
		

		
	}
	public function Logout(){	
		$this->load->view("shop/modules/Logout");
		header("Location:../Frontend")	;
	}
	public function listcategorypage($page,$catid)
	{
		$data["listcategory"]=$this->model->getProductCategoryByPager($page,$catid);
		$data["total_rows"]=count($this->model->listcategory($catid));
		$data["phantrang"]=$this->model->listcategory1($catid);
		$data["name"]=$this->model->categoryName($catid);
		$data["boloc_category"]=$this->model->boloc_category();
		$data["category"]=$this->model->category();
		$data["menu"]=$this->model->menu();
		$data["phukien"]=$this->model->phukien();
		$data["page"]="shop/pages/listcategorypage";
		$this->load->view("shop/index",$data);
	}
	public function giohang(){

		$data["menu"]=$this->model->menu();
		foreach ($_SESSION['cart'] as $key => $value) {
			$data['order'][$key]=$this->model->cart_product($key);
			$data['order'][$key]['slotuong']=$value['qty'];

		}
		//var_dump(expression)
	// echo "<pre>";
	// print_r($data['order']);
	// echo "<pre>";
	// die();
		$this->load->view("shop/pages/giohang",$data);
	}
	public function delCart($id=null){
		if($id!=null)
			{unset($_SESSION['cart'][$id]);
		header("Location:../giohang");
	}
	else{
		unset($_SESSION['cart']);
		header("Location:../");
		
	}

}
public function frmthanhtoan(){
	$this->load->view("shop/pages/thanhtoan");
}

public function addlienhe(){
	$a=$this->model->lienhe();
	if($a==1)
	{
		echo "<script>alert('Gửi liên hệ thành công');location.href=('".URL."index.php')</script>";
		//header("Location:../frontend");
	}

}
public function EditCart(){
	$this->model->UpdateCart();

}
public function addthanhtoan(){
	$this->model->addthanhtoan();

	echo "<script>alert('Thanh Toán Thành Công!');location.href=('".URL."index.php')</script>";
	unset($_SESSION['cart']);
}
public function banchay(){
	$data["category"]=$this->model->category();
	$data["boloc_category"]=$this->model->boloc_category();
	$data["menu"]=$this->model->menu();
	$data["phukien"]=$this->model->phukien();
	$data["banchay"]=$this->model->banchay();
	$data["product_banchay"]=$this->model->product();
	$data["page"]="shop/pages/banchay";
	$this->load->view("shop/index",$data);
}


public function comment($id){

	if(!isset($_SESSION['user'])){
		echo "<script>alert('gửi bình luận thất bại.bạn cần phải đăng nhập!');location.href=('".URL."index.php/login/login')</script>";
	}
	else {
		$a=$this->model->comment($id);
		if($a==1){
			echo "<script>alert('gửi bình luận thành công!');location.href=('".URL."index.php/frontend/detail_products/$id')</script>";
		}
		else{
			echo "<script>alert('gửi bình luận thất bại!');location.href=('".URL."index.php/frontend/detail_products/".$id."')</script>";
		}
	}	
}

























}
?>