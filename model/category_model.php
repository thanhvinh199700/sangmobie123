<?php
class Category_Model extends Model{
	function __construct()
	{
		parent::__construct();
	}
	public function getAllCategory()
	{
		$sql = "SELECT * FROM category where trash = 0";
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function getCategoryPaper($page)
	{
		$sql = "SELECT * FROM category WHERE trash=0 ORDER BY id LIMIT ".(($page-1)*5).",5"; 
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function addNewCategory(){
		$n=$_POST['catname'];
		$p=$_POST['parent'];
		$s=$_POST['status'];
		$t=$_POST['trash'];
		date_default_timezone_set("Asia/Bangkok");
		$d = date('Y-m-d h:i:s');

		$check_sql="SELECT * FROM category where category_name ='".$n."'";
		$check_result = $this->getQueryAll($check_sql);
		if(count($check_result)>0){
			return 0;
		}
		$sql="INSERT INTO category(category_name,parent,status,trash,created_at)
		VALUES('$n',$p,$s,$t,'$d')";
		
		$this->NoneQuery($sql);
		return 1;
	}

	public function getOneCategory($id){
		$sql="SELECT * FROM category WHERE id=".$id;
		$p=$this->getOne($sql);
		return $p;
	}
	public function editCategory($id){
		$n=$_POST['catname'];
		$p=$_POST['parent'];
		$s=$_POST['status'];
		$t=$_POST['trash'];
		date_default_timezone_set("Asia/Bangkok");
		$d = date('Y-m-d h:i:s');

		$check_sql="SELECT * FROM category where id !=$id and category_name ='$n'";

		$check_result = $this->getQueryAll($check_sql);
		if(count($check_result)>0){
			return 0;
		}
		$sql="UPDATE category
		SET category_name='$n',parent =$p,status=$s ,trash=$t , updated_at='$d' where id=$id";
		 // print_r($sql);
		 // die;
		$this->NoneQuery($sql);
		
		return 1;
	}
	public function getTrashCategoryByPaper($page=1){
		$sql="SELECT * FROM category where trash=1 order by parent LIMIT ".(($page-1)*3).",3";
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function countTrash(){
		$sql="SELECT * FROM category where trash=1";
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function delCategory($id){
		$check_sql="SELECT * FROM products where product_category =".$id;
		$check_result=$this->getQueryAll($check_sql);
		if(count($check_result)>0){
			return 0;
		}
		$sql="DELETE FROM category WHERE id =".$id;
		$this->NoneQuery($sql);
		return 1;
	}

}
?>