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
<form action="<?php echo URL?>index.php/category/add" method="POST">
	<label>Category Name</label><br />
	<input type="text" name="catname">

	<label>Parent</label><br />
	<select name="parent">
		<option value="0">-----</option>
		<?php 
		foreach ($data['category'] as $value) {
			echo "<option value='".$value['id']."'>".$value['category_name']."</option>";
		}
		?>
	</select><br />


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