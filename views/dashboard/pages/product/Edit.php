

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
<?php 
$a=$data['edit'];
?>
<form action="<?php echo URL?>index.php/product/Edit/<?php echo $a['id']?>" method="POST" enctype="multipart/form-data" >
	<label>product Name</label><br />
	<input type="text" name="product_name" value="<?php echo $a['product_name']?>">

	<label>product_category</label><br />
	<select name="product_category">

		<?php
		
		if($a['product_category']==0){
			echo "<option selected='selected' value='0'>-------------</option>";
		}
		else{
			echo "<option value='0'>----------</option>";
		}
		foreach ($data['category'] as $value) {
			if($value['id'] == $a['product_category']){
				echo "<option selected='selected' value='".$value['id']."'>".$value['category_name']."</option>";
			}
			else {
				echo "<option value='".$value['id']."'>".$value['category_name']."</option>";
			}
		}

		?>
		
	</select><br />


	<label>product_brand</label><br />
	<select name="product_brand">
		<?php
		
		if($a['brand_id']==0){
			echo "<option selected='selected' value='0'>-------------</option>";
		}
		else{
			echo "<option value='0'>----------</option>";
		}
		foreach ($data['brand'] as $value) {
			if($value['id'] == $a['brand_id']){
				echo "<option selected='selected' value='".$value['id']."'>".$value['brand_name']."</option>";
			}
			else {
				echo "<option value='".$value['id']."'>".$value['brand_name']."</option>";
			}
		}

		?>
	</select><br />

	<label>image</label><br />
	<img src="<?php echo URL_image?><?php echo $a['image']?>" style="width: 50px;">
	<input type="file" name="image" style="width:100px;"/>

	<label>Detail_product</label><br />
	<textarea id="editor" name="detail"><?php echo $a['product_detail']?></textarea>
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
	<input type="text" name="price" value="<?php echo $a['price']?>">

	<label>quantity</label><br />
	<input type="text" name="quantity" value="<?php echo $a['quantity']?>">

	<label>gia_sale</label><br />
	<input type="text" name="sale_price" value="<?php echo $a['saleprice']?>">

	<label>sale</label><br />
	<select name="sale">
		<?php
		$c=$data['edit'];
		if($c['sale']==1)
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


	<button type="submit" class="btn btn-primary mb-2" style="margin-top: 10px;">Update</button>
</form>