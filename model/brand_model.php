<?php
class Brand_Model extends Model{
	function __construct()
	{
		parent::__construct();
	}
	public function getAllBrand()
	{
		$sql = "SELECT * FROM brands where trash = 0";
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function getBrandPaper($page)
	{
		$sql = "SELECT * FROM brands WHERE trash=0 ORDER BY id LIMIT ".(($page-1)*4).",4"; 
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function addNewBrand(){
		$n=$_POST['brand_name'];
		$s=$_POST['status'];
		$t=$_POST['trash'];
		$check_sql="SELECT * FROM brands where brand_name ='".$n."'";
		$check_result = $this->getQueryAll($check_sql);
		if(count($check_result)>0){
			return 0;
		}
		$sql="INSERT INTO brands(brand_name,status,trash)
		VALUES('$n',$s,$t)";
		// print_r($sql);
		// die;
		$this->NoneQuery($sql);
		return 1;
	}

	public function getOneBrand($id){
		$sql="SELECT * FROM brands WHERE id=".$id;
		$p=$this->getOne($sql);
		return $p;
	}
	public function editBrand($id){
		$n=$_POST['brand_name'];
		$s=$_POST['status'];
		$t=$_POST['trash'];

		$check_sql="SELECT * FROM brands where id !=$id and brand_name ='$n'";

		$check_result = $this->getQueryAll($check_sql);
		if(count($check_result)>0){
			return 0;
		}
		$sql="UPDATE brands
		SET brand_name='$n',status=$s ,trash=$t  where id=$id";
		 // print_r($sql);
		 // die;
		$this->NoneQuery($sql);
		
		return 1;
	}
	public function getTrashBrandByPaper($page=1){
		$sql="SELECT * FROM brands where trash=1 order by id LIMIT ".(($page-1)*3).",3";
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function countTrash(){
		$sql="SELECT * FROM brands where trash=1";
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function delBrand($id){
		$check_sql="SELECT * FROM products where brand_id =".$id;
		$check_result=$this->getQueryAll($check_sql);
		if(count($check_result)>0){
			return 0;
		}
		$sql="DELETE FROM brands WHERE id =".$id;
		$this->NoneQuery($sql);
		return 1;
	}

}
?>