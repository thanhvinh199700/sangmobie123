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
<form action="<?php echo URL?>index.php/fnew/addfnew" method="POST" enctype="multipart/form-data">
	<label>title</label><br />
	<input type="text" name="title">

	<label>	short_description</label><br />
	<textarea id="short_description" name="short_description"></textarea>
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
	<textarea id="content" name="content"></textarea><br />
	<script>
		ClassicEditor
		.create( document.querySelector( '#content' ) )
		.then( editor => {
			console.log( editor );
		} )
		.catch( error => {
			console.error( error );
		} );
	</script>
	<label>avatar</label><br />
	<input type="file" name="avatar" />


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