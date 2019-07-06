<?php

class Model{
	function __construct(){
		$this->db = new Database;
		$this->c = $this->db->conn; 

	}
	//lay het du lieu co dang assoc
	//return null lun do neu k co a thi dung ct
	// public function getAll($sql){
	// 	$result = $this->db->conn->query($sql);
	// 	if($result->num_rows>0){
	// 		$a[]= $result->fetch_all(MYSQLI_ASSOC);
	// 		return $a;
	// 	}
	// 	return null;
	// }
	function QueryOne($sql)
    {
    	$result=mysqli_query($this->c,$sql);
    	$row=mysqli_fetch_assoc($result);
    	return $row;
    }
//hàm truy vấn trả về tất cả mẩu tin
    function getQueryAll($sql)
    {
    	$result=mysqli_query($this->c,$sql);
    	$a=array();
    	while($row=mysqli_fetch_assoc($result))
    	{
    		$a[]=$row;
    	}
    	return $a;
    }
    //hàm truy vấn không trả về mẩu tin
    //theem sua, xoa,...
    function NoneQuery($sql)
    {
    	mysqli_query($this->c,$sql);
    }
//hàm truy vấn đếm
    function QueryCount($sql)
    {
    	$result=mysqli_query($this->c,$sql);
    	$a=array();
    	while($row=mysqli_fetch_assoc($result))
    	{
    		$a[]=$row;
    	}
    	return count($a);
    }
    public function getNumberOfTrashItem($table){
        $sql = "SELECT * FROM ".$table." WHERE trash = 1";
        $result = $this->getQueryAll($sql);
        $n= count($result);
        return $n;
    }
    public function TrashItem($table,$id){
        $sql="UPDATE ".$table." SET trash = 1 WHERE id =".$id;
        $this->NoneQuery($sql);

    }
    public function getOne($sql){ 
       $result = $this->c->query($sql); 
       if($result->num_rows>0){ 
          $a = $result->fetch_assoc(); 
          return $a; 
      } 
      return null; 
  } 
  public function restoreItem($table,$id){
    $sql="UPDATE ".$table." SET trash=0 WHERE id= ".$id;
    $this->NoneQuery($sql);
}
    public function changeStatus($table){
        $s= $_POST['status'];
        $id= $_POST['pid'];
        if($s==1){
            $sql="UPDATE ".$table." SET status = 0 WHERE id =".$id;
        }
        else{
            $sql="UPDATE ".$table." SET status = 1 WHERE id =".$id;
        }
        $this->NoneQuery($sql);
    }
}

?>