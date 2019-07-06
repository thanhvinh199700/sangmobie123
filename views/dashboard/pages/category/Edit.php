

<style >
	select{
		min-width: 100%;
		min-height: 40px;
	}
	input{
		min-width: 100%;
		min-height: 40px;
	}
</style>

<form action="<?php echo URL?>index.php/category/editCategory/<?php echo $data['edit']['id']?>" method="POST">
	<label>Category Name</label><br />
	<input name="catname" type="text" value="<?php echo $data['edit']['category_name']?>">

	<label for="parent">Parent</label><br />
	<select name="parent">
		<?php
		$c =$data['edit']; 
		if($c['parent']==0){
			echo "<option selected='selected' value='0'>-------------</option>";
		}
		else{
			echo "<option value='0'>----------</option>";
		}
		foreach ($data['category'] as $value) {
			if($value['id'] == $c['parent']){
				echo "<option selected='selected' value='".$value['id']."'>".$value['category_name']."</option>";
			}
			else {
				echo "<option value='".$value['id']."'>".$value['category_name']."</option>";
			}
		}

		?>
		
	</select><br />


	<label>Trash</label><br />
	<select name="trash">
		<?php
		$c=$data['edit'];
		if($c['trash']==1)
		{
			echo "<option value='1'>1</option>";
			echo "<option value='0'>0</option>";
		}
		else 
		{
			echo "<option value='0'>0</option>";
			echo "<option value='1'>1</option>";	
		}
		?>
	</select><br />


	<label>Status</label><br />
	<select name="status"> 
		<?php
		$c=$data['edit'];
		if($c['status']==1)
		{
			echo "<option value='1'>1</option>";
			echo "<option value='0'>0</option>";
		}
		else 
		{
			echo "<option value='0'>0</option>";
			echo "<option value='1'>1</option>";	
		}
		?>

	</select><br /><br />

	<button type="submit" class="btn btn-primary mb-2">Update</button>
</form>