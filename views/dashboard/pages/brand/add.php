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
<form action="<?php echo URL?>index.php/brand/add" method="POST">
	<label>brand Name</label><br />
	<input type="text" name="brand_name">



	<label>Trash</label><br />
	<select name="trash">
		<option value="0">0</option>
		<option value="1">1</option>
	</select><br />


	<label>Status</label><br />
	<select name="status"> 
		<option value="0">0</option>
		<option value="1">1</option>
	</select><br /><br />

	<button type="submit" class="btn btn-primary mb-2">Thêm</button>
</form>