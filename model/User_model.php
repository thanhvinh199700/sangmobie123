<?php
class User_Model extends Model{
	function __construct()
	{
		parent::__construct();
	}
	public function getAlluser($page){
		$sql="SELECT * from users where trash=0 order by id limit ".(($page-1)*5).",5";
		$result= $this->getQueryAll($sql);
		return $result;
	}
	public function countgetAlluser(){
		$sql="SELECT * from users where trash=0";
		$result=$this->getQueryAll($sql);
		return $result;
	}
	public function deleteUser($id){
		$sql="DELETE FROM users WHERE id =".$id;
		$this->NoneQuery($sql);
		return 1;
	}
}