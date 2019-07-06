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
<form action="<?php echo URL?>index.php/fnew/editfnew/<?php echo $data['edit']['id']?>" method="POST" enctype="multipart/form-data">
	<label>title</label><br />
	<input type="text" name="title" value="<?php echo $data['edit']['title']?>">

	<label>	short_description</label><br />
	<textarea id="short_description" name="short_description"><?php echo $data['edit']['short_description']?></textarea>
	<script>
		ClassicEditor
		.create( document.querySelector( '#short_description' ) )
		.then( editor => {
			console.log( editor );
		} )
		.catch( error => {
			console.error( error );
		} );
	</script>
	<br />
	<label>	content</label><br />
	<textarea id="content" name="content"><?php echo $data['edit']['content']?></textarea><br />
	<script>
		ClassicEditor
		.create( document.querySelector('#content') )
		.then( editor => {
			console.log( editor );
		} )
		.catch( error => {
			console.error( error );
		} );
	</script>
	<label>avatar</label><br />
	<input type="file" name="avatar" />
	<img src="<?php echo URL?>public/images/fnew/<?php echo $data['edit']['avatar']?>"><br />


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