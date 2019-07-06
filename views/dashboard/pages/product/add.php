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
<form action="<?php echo URL?>index.php/product/add" method="POST" enctype="multipart/form-data" >
	<label>product Name</label><br />
	<input type="text" name="product_name">

	<label>product_category</label><br />
	<select name="product_category">
		<option value="0">-----</option>
		<?php 
		foreach ($data['category'] as $value):
			?>
			<option value="<?php echo $value['id']?>"><?php echo $value['category_name']?></option>
		<?php endforeach;?>
	</select><br />


	<label>product_brand</label><br />
	<select name="product_brand">
		<option value="0">-----</option>
		<?php 
		foreach ($data['brand'] as $value):
			?>
			<option value="<?php echo $value['id']?>"><?php echo $value['brand_name']?></option>
		<?php endforeach;?>
	</select><br />

	<label>image</label><br />
	<input type="file" name="image" />

	<label>Detail_product</label><br />
	<textarea id="editor" name="detail"></textarea>
	<script>
		ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.then( editor => {
			console.log( editor );
		} )
		.catch( error => {
			console.error( error );
		} );
	</script>

	<label>price</label><br />
	<input type="text" name="price">

	<label>quantity</label><br />
	<input type="text" name="quantity">

	<label>gia_sale</label><br />
	<input type="text" name="sale_price">

	<label>sale</label><br />
	<select name="sale"> 
		<option value="0">0</option>
		<option value="1">1</option>
	</select><br /><br />

	<label>Status</label><br />
	<select name="status"> 
		<option value="0">0</option>
		<option value="1">1</option>
	</select><br /><br />



	<label>Trash</label><br />
	<select name="trash">
		<option value="0">0</option>
		<option value="1">1</option>
	</select><br />

	<button type="submit" class="btn btn-primary mb-2" style="margin-top: 10px;">Thêm</button>
</form>