
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		});
	</script>
	<a href="<?php echo URL?>index.php/product/frmadd" type="button" class="btn btn-success">Add</a>
	<a href="<?php echo URL?>index.php/product/trashProduct"type="button" class="btn btn-warning">trash(<?php echo $data['trash']?>)</a>
	<div class="container">
		<h2>List Product</h2>
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="90%">
			<thead>
				<tr>

					<th>product_name</th>
					<th>brand</th>	
					<th>product_category</th>
					<th>image</th>
					<th>price</th>
					<th>status</th>
					<th>edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$a=$data['brand'];
				$b=$data['category'];
				?>
				<?php foreach ($data['product'] as $value): ?>
					<tr>

						<td><a href="<?php echo URL?>index.php/product/detail/<?php echo $value['id']?>"><?php echo $value['product_name']?></a></td>

						<td>
							<?php


							foreach ($a as $value1) {
								if($value1['id']==$value['brand_id']){
									echo $value1['brand_name'];
								}
							}


							?>


						</td>
						<td>
							<?php


							foreach ($b as $value1) {
								if($value1['id']==$value['product_category']){
									echo $value1['category_name'];
								}
							}


							?>


						</td>
						<td><img src="<?php echo URL ;?>public/images/<?php echo $value['image']?>" width="60px"></td>
						<td><?php echo number_format($value['price'])?> VNĐ</td>
						<td>
							<?php 
							if($value['status']==1){ 
								?>

								<img src="<?php echo URL?>public/images/200.jpg" id='status<?php echo $value['id']; ?>' data='1' width='20px' onclick="changeStatus('product',this,<?php echo $value['id'] ;?>)"/>	
								<?php
							}
							else{
								?>
								<img src="<?php echo URL?>public/images/100.png" id='status<?php echo $value['id']; ?>' data='0' width='20px' onclick="changeStatus('product',this,<?php echo $value['id'] ;?>)"/>
							<?php }?>

						</td>
						<td><a href="<?php echo URL?>index.php/product/frmEdit/<?php echo $value['id']?>"class="glyphicon glyphicon-edit btn-md" style="text-decoration: none"></a></td>
						<td><a class="btn btn-warning" href="<?php echo URL?>index.php/product/sendToTrash/<?php echo $value['id'];?>">Delete</a></td>
					</tr>
				<?php endforeach;?>     
			</tbody>
		</table>
	</div>



