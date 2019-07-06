<?php
class Contact_Model extends Model{
	function __construct()
	{
		parent::__construct();
	}

	public function getAllcontact($page){
		$sql="SELECT * from contacts order by id limit ".(($page-1)*5).",5";
		$result= $this->getQueryAll($sql);
		return $result;
	}
	public function countgetAllcontact(){
		$sql="SELECT * from contacts";
		$result=$this->getQueryAll($sql);
		return $result;
	}
	public function deletecontact($id){
		$sql="DELETE FROM contacts WHERE id =".$id;
		$this->NoneQuery($sql);
		return 1;
	}
}