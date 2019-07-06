<?php
class Frontend_Model extends Model{
	function __construct()
	{
		parent::__construct();
	}
	//san pham moi nhat
	public function m_getNewProducts(){
		$sql="SELECT * FROM products where trash=0 order by created_at DESC limit 0,8";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	//phan trang tat ca san pham
	public function getProductsByPager($page){ 
		$sql = "SELECT * FROM products WHERE status = 1 LIMIT ".(($page-1)*12).",12";    
		$result = $this->getQueryAll($sql); 
		return $result; 
	} 
	//tat ca san pham
	public function getAllProducts(){ 
		$sql = "SELECT * FROM products WHERE status = 1"; 
		$result = $this->getQueryAll($sql); 
		return $result; 
	} 
	//san pham giam gia
	public function m_PromotionProducts(){
		$sql="SELECT * FROM `products` where sale=1 and trash=0;";
		$result = $this->getQueryAll($sql);
		return $result;
		
	}
	//chi tiet san pham
	public function detail_product($id){
		$sql="SELECT * FROM products WHERE id=$id";
		$result = $this->QueryOne($sql);
		return $result;
	}
	//thanh menu
	public function menu(){
		$sql="SELECT * FROM menu";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	//danh sach category
	public function category(){
		$sql="SELECT * FROM category where trash=0";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	public function boloc_category(){
		$sql="SELECT * FROM category where status=1 and trash=0 order by parent desc";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	
	//tim kiem san pham
	public function Sreach($key){
		$sql="SELECT * from products where product_name like '%".$_GET['key']."%'";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	// thêm phụ kiện gần subfooter 
	public function phukien(){
		$sql="SELECT * FROM products where product_category=11 or product_category=12";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	// san pham tuong tu trong product_detail
	public function sanphamtuongtu($catid){
		$sql="SELECT * FROM products where product_category=$catid and status=1 limit 0,10";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	public function from1to5(){
		$sql="SELECT * FROM products where price>1000000 and price<5000000";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	public function from5to10(){
		$sql="SELECT * FROM products where price>5000000 and price<10000000";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	public function from10to15(){
		$sql="SELECT * FROM products where price>10000000 and price<15000000";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	public function from15to20(){
		$sql="SELECT * FROM products where price>15000000 and price<20000000";
		$result = $this->getQueryAll($sql);
		return $result;
	}public function over20(){
		$sql="SELECT * FROM products where price>20000000";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	public function allnews(){
		$sql="SELECT * from fnews where status=1";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	public function getAllnewsByPager($page){
		$sql="SELECT * from fnews where status=1 LIMIT ".(($page-1)*5).",5";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	public function detail_news($id){
		$sql="SELECT * FROM fnews WHERE id=$id";
		$result = $this->QueryOne($sql);
		return $result;
	}

//ham lay san pham theo category
	
	public function categoryName($catid){
		$sql="SELECT * from products,category where category.id=products.product_category and product_category=$catid";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	public function getProductCategoryByPager($page,$catid){ 
		$sql = "SELECT * FROM products WHERE product_category=$catid and status = 1 LIMIT ".(($page-1)*4).",4";    
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function listcategory($catid){
		$sql="SELECT * from products where product_category=$catid and status=1 and trash=0";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	public function listcategory1($catid){
		$sql="SELECT * from products where product_category=$catid and status=1 and trash=0";
		$result = $this->getOne($sql);
		return $result;
	}
	public function cart_product($id){
		$sql="SELECT * from products where id=$id";
		$result = $this->getQueryAll($sql);
		return $result;
	}

	public function lienhe(){

		$n=$_SESSION['user'];
		$e=$_SESSION['email'];
		$p=$_SESSION['phone'];
		$t=$_POST['contacttittle'];
		$detail=$_POST['contactdetail'];
		date_default_timezone_set("Asia/Bangkok");
		$d = date('Y-m-d h:i:s');

		
		$sql="INSERT INTO contacts(contactfullname,contactemail,contactphone,contacttittle,contactdetail,created_at)
		VALUES('$n','$e','$p','$t','$detail','$d')";
		
		$this->NoneQuery($sql);
		return 1;

	}
	public function UpdateCart(){
		$cart=$_SESSION['cart'];

		
		$amount=$_POST['amount'];
		$id=$_POST['id'];

		// echo "<pre>";
		// var_dump($id);
		// echo "</pre>";
		// die;
		$ipt=array();
		foreach ($id as $k => $v) {
			$row['id']=$v;
			$row['qty']=$amount[$k];
			$hihi[]=$row;

		}
		
		foreach ($hihi as $keyipt => $valueipt) {
			foreach ($cart as $keycart => $valuecart) {

				if($keycart==$hihi[$keyipt]['id']){
					$_SESSION['cart'][$keycart]['qty']=$hihi[$keyipt]['qty'];
					header("Location:../giohang");

				}
				
			}
		}



		// echo "<pre>";
		// var_dump($_SESSION['cart']);
		// echo "</pre>";
		// die;

	}

	public function addthanhtoan(){
		//var_dump($_POST);
		$a=$_POST['address'];
		$p=$_POST['order_date'];
		$f=$_POST['fullname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$c=$_SESSION['id'];
		
		$sql="INSERT INTO orders(fullname,customer_id,address,email,phone ,order_date)
		VALUES('$f',$c,'$a','$email','$phone',$p)";
		
		$this->NoneQuery($sql);

		$sql="select id from orders order by id desc limit 1 ";
		$id=$this->getOne($sql);
		$cart=$_SESSION['cart'];
		//var_dump($cart);
		foreach ($cart as $keycart => $valuecart) {
			//printf($valuecart['qty']);die;
			$sql_p_id='select price from products where id='.$keycart.' limit 1';
			$id_p=$this->getOne($sql_p_id);
			// var_dump($id_p);
			$sql='INSERT INTO order_details(order_id,product_id,qty,product_price,total ,trash,status)
			VALUES('.$id["id"].','.$keycart.',('.$valuecart["qty"].'),('.$id_p["price"].'),'.''.$valuecart["qty"].'*'.$id_p["price"].',0,1)';
//die;
			$this->NoneQuery($sql);
		}
	}


	public function banchay(){
		$sql="SELECT * FROM order_details GROUP by product_id ORDER by sum(qty) DESC LIMIT 0,8";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	public function product(){
		$sql="SELECT * FROM products";
		$result = $this->getQueryAll($sql);
		return $result;
	}
	public function comment($id){
		$u=$_SESSION['id'];
		date_default_timezone_set("Asia/Bangkok");
		$cm = date('Y-m-d h:i:s');
		$cc=$_POST['comment_content'];
		// $s=$_POST['status'];
		// $t=$_POST['trash'];
		$sql="INSERT INTO comment(user_id,product_id,comment_date,comment_content,status ,trash)
		VALUES($u,$id,'$cm','$cc',1,0)";
		// print_r($sql);
		// die;
		$this->NoneQuery($sql);
		// print_r($sql);
		// die;
		return 1;

	}
	public function listcomment($id){
		$sql="SELECT name,comment_content,avatar FROM comment,users WHERE users.id=comment.user_id and $id=product_id and comment.status=1";
		$result = $this->getQueryAll($sql);
		return $result;
	}

	// public function listuser(){
	// 	$sql="SELECT * FROM users";
	// 	$result = $this->getQueryAll($sql);
	// 	return $result;
	// }




































}
?>