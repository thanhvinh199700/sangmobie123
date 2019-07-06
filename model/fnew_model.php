<?php
class Fnew_Model extends Model{
	function __construct()
	{
		parent::__construct();
	}
	public function getAllfNews($page){
		$sql="SELECT * from fnews where trash=0 order by id limit ".(($page-1)*5).",5";
		$result= $this->getQueryAll($sql);
		return $result;
	}
	public function countgetAllNews(){
		$sql="SELECT * from fnews where trash=0";
		$result=$this->getQueryAll($sql);
		return $result;
	}

	public function getTrashNewsByPaper($page=1){
		$sql="SELECT * FROM fnews where trash=1 order by id LIMIT ".(($page-1)*5).",5";
		$result = $this->getQueryAll($sql); 
		return $result; 
	}
	public function countTrash(){
		$sql="SELECT * FROM fnews where trash=1";
		$result = $this->getQueryAll($sql); 
		return $result; 
	}

	public function deleteFew($id){
		$sql="DELETE FROM fnews WHERE id =".$id;
		$this->NoneQuery($sql);
		return 1;
	}

	public function getOnefnews($id){
		$sql="SELECT * FROM fnews WHERE id=".$id;
		$p=$this->getOne($sql);
		return $p;
	}


	public function addfnew(){
		$title=$_POST['title'];
		$short=$_POST['short_description'];
		
		if($_FILES['avatar']['size']==0){
			$i="100.png";
		}
		else{
			$file = $_FILES["avatar"];
			$avatar=$file["name"];
			$u=new Upload();
			$u->doUpload($file);
		}
		$content=$_POST['content'];
		$s=$_POST['status'];
		$t=$_POST['trash'];
		date_default_timezone_set("Asia/Bangkok");
		$date = date('Y-m-d h:i:s');

		$check_sql="SELECT * FROM fnews where title ='".$n."'";
		$check_result = $this->getQueryAll($check_sql);
		if(count($check_result)>0){
			return 0;
		}
		$sql="INSERT INTO fnews(title,short_description,content,avatar,status,trash,created_at)
		VALUES('$title','$short','$content','$avatar',$s,$t,'$d')";
		$this->NoneQuery($sql);
		// print_r($sql);
		// die;
		return 1;
	}

public function editfnew($id){
		$title=$_POST['title'];
		$short=$_POST['short_description'];
		$content=$_POST['content'];
		$s=$_POST['status'];
		$t=$_POST['trash'];
		date_default_timezone_set("Asia/Bangkok");
		$date = date('Y-m-d h:i:s');

		$check_sql="SELECT * FROM fnews where title ='".$n."'";
		$check_result = $this->getQueryAll($check_sql);
		if(count($check_result)>0){
			return 0;
		}
		if($_FILES['avatar']['size']==0){
			$sql="UPDATE fnews
			SET  title='$title',short_description='$short',content='$content',status=$s,trash=$t where id=$id";
		}
		else{
			$file = $_FILES["avatar"]; 
			$avatar = $file["name"]; 
			$u = new Upload(); 
			$u->doUpload($file); 
			$sql="UPDATE fnews
			SET  title='$title',short_description='$short',content='$content',avatar='$avatar',status=$s,trash=$t where id=$id";
		}
		$this->NoneQuery($sql);
		// print_r($sql);
		// die;
		return 1;
	}


}
?>