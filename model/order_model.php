<?php
class Order_Model extends Model{
	function __construct()
	{
		parent::__construct();
	}
	public function getAllorder($page){
		$sql="SELECT * from orders where trash=0 order by id limit ".(($page-1)*5).",5";
		$result= $this->getQueryAll($sql);
		return $result;
	}
	public function countgetorder(){
		$sql="SELECT * from orders where trash=0";
		$result=$this->getQueryAll($sql);
		return $result;
	}
	public function Customer_detail($id){
		$sql="SELECT * from orders where id=$id";
		$result=$this->getOne($sql);
		return $result;
	}
	public function detail_order($id){
		$sql="SELECT * from order_details where order_id=$id";
		$result=$this->getQueryAll($sql);
		return $result;
	}

	public function product_name(){
		$sql="SELECT * from products";
		$result=$this->getQueryAll($sql);
		return $result;
	}

	public function delorder($id){
		$check_sql="SELECT * FROM order_details where order_id =".$id;
		$check_result=$this->getQueryAll($check_sql);
		if(count($check_result)>0){
			return 0;
		}
		$sql="DELETE FROM orders WHERE id =".$id;
		$this->NoneQuery($sql);
		return 1;
	}
	public function sum($id){
		$sql="SELECT sum(total) FROM order_details WHERE order_id=$id";	
		$result=$this->getOne($sql);

		return $result;
	}

}