<?php
class Product_Model extends Model{
	function __construct()
	{
		parent::__construct();
	}
	public function getAllproduct()
	{
		$sql = "SELECT * FROM products where trash = 0";
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function getProductPaper($page)
	{
		$sql = "SELECT * FROM products WHERE trash=0 ORDER BY id LIMIT ".(($page-1)*10).",10"; 
		$result = $this->getQueryAll($sql); 
		return $result; 
	}

	public function getProduct()
	{
		$sql = "SELECT * FROM products WHERE trash=0 ORDER BY id "; 
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function Detail($id){
		$sql="SELECT * from products where id=$id and trash=0";
		$result = $this->getOne($sql); 
		return $result;
	}
	public function getAllcategory($id)
	{
		$sql="SELECT * from products,category where category.id=products.product_category and products.id=$id";
		$result = $this->getOne($sql);
		return $result; 
	}
	public function getAllbrand($id)
	{
		$sql="SELECT * from products,brands where brands.id=products.brand_id and products.id=$id";
		$result = $this->getOne($sql);
		
		return $result; 
	}
	public function getTrashProductByPaper($page=1){
		$sql="SELECT * FROM products where trash=1 order by product_category LIMIT ".(($page-1)*5).",5";
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function countTrash(){
		$sql="SELECT * FROM products where trash=1";
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function delProduct($id)
	{
		$sql="DELETE FROM products WHERE id =".$id;
		$this->NoneQuery($sql);
		return 1;
	}
	public function getcategory()
	{
		$sql="SELECT * from category where trash=0";
		$result = $this->getQueryAll($sql);
		return $result; 
	}
	public function getbrand(){
		$sql="SELECT * from brands where trash=0";
		$result = $this->getQueryAll($sql);
		return $result; 
	}

	public function getOneProduct($id){
		$sql="SELECT * FROM products WHERE id=".$id;
		$p=$this->getOne($sql);
		return $p;
	}
	public function addproduct(){
		$n=$_POST['product_name'];
		$c=$_POST['product_category'];
		$p=$_POST['product_brand'];
		if($_FILES['image']['size']==0){
			$i="100.png";
		}
		else{
			$file = $_FILES["image"];
			$i=$file["name"];
			$u=new Upload();
			$u->doUpload($file);
		}
		$d=$_POST['detail'];
		$pr=$_POST['price'];
		$q=$_POST['quantity'];
		$sale=$_POST['sale'];
		$s_pr=$_POST['sale_price'];
		$s=$_POST['status'];
		$t=$_POST['trash'];
		date_default_timezone_set("Asia/Bangkok");
		$date = date('Y-m-d h:i:s');

		$check_sql="SELECT * FROM products where product_name ='".$n."'";
		$check_result = $this->getQueryAll($check_sql);
		if(count($check_result)>0){
			return 0;
		}
		$sql="INSERT INTO products(product_name,product_category,brand_id,image,quantity,price,sale,saleprice,product_detail,trash,status,created_at)
		VALUES('$n',$c,$p,'$i',$q,$pr,$sale,$s_pr,'$d',$t,$s,'$date')";
		
		$this->NoneQuery($sql);
		return 1;
	}


	public function updateproduct($id){
		$n=$_POST['product_name'];
		$c=$_POST['product_category'];
		$p=$_POST['product_brand'];
		$d=$_POST['detail'];
		$pr=$_POST['price'];
		$q=$_POST['quantity'];
		$sale=$_POST['sale'];
		$s_pr=$_POST['sale_price'];
		$s=$_POST['status'];
		$t=$_POST['trash'];
		date_default_timezone_set("Asia/Bangkok");
		$date = date('Y-m-d h:i:s');

		$check_sql="SELECT * FROM products where id !=$id and product_name ='$n'";

		$check_result = $this->getQueryAll($check_sql);
		if(count($check_result)>0){
			return 0;
		}
		if($_FILES['image']['size']==0){
			$sql="UPDATE products
			SET product_name='$n',product_category=$c,brand_id=$p,quantity=$q,price=$pr,sale=$sale,saleprice=$s_pr,product_detail='$d',trash=$t,status=$s,updated_at='$date' where id=$id";
		}
		else{
			$file = $_FILES["image"]; 
			$i = $file["name"]; 
			$u = new Upload(); 
			$u->doUpload($file); 
			$sql="UPDATE products
			SET product_name='$n',product_category=$c,brand_id=$p,image='$i',quantity=$q,price=$pr,sale=$sale,saleprice=$s_pr,product_detail='$d',trash=$t,status=$s,updated_at='$date' where id=$id";
		}
		$this->NoneQuery($sql);
		return 1;
	}


}
?>