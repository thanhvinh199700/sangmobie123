

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

<form action="<?php echo URL?>index.php/brand/editBrand/<?php echo $data['edit']['id']?>" method="POST">
	<label>Brand Name</label><br />
	<input name="brand_name" type="text" value="<?php echo $data['edit']['brand_name']?>">




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