
<style>
	table{
		border:3px solid black;
		width: 95%;
		height: 200px;
	}
	
	td{
		border: 1px solid black;

		border-radius: 3px;
		height: 100px;
		width: 200px;
		text-align: center;
	}
	tr{
		border: 1px solid black;
		border-radius: 10px;

	}
	a{
		margin-left: 15px;
	}
</style>
<div class="container">
	<h2>Chi Tiết Của Sản Phẩm : <?php echo '<strong>'.$data['detail']['product_name'].'</strong>'?></h2>
	<table>
		
		<tr>

			<td>product_name</td>
			<td>brand</td>	
			<td>product_category</td>
			<td>detail_product</td>
			<td>image</td>
			<td>quantity</td>
			<td>price</td>
			<td>sale_price</td>
			<td>status</td>
			<td>created_at</td>
			<td>update_at</td>
			

		</tr>
		
		

		<tr>
			<?php
			$a=$data['detail'];
			$b=$data['category'];
			$c=$data['brand'];
			?>
			<td><h3><?php echo $a['product_name']?></h3></td>

			<td>
				<?php echo $c['brand_name']?>

			</td>
			<td>
				<?php echo $b['category_name']?>

			</td>

			<td>
				<?php echo $b['product_detail']?>

			</td>
			<td><img src="<?php echo URL ;?>public/images/<?php echo $a['image']?>" width="50px"></td>
			<td><?php echo number_format($a['quantity'])?></td>
			<td><?php echo number_format($a['price'])?> VNĐ</td>
			<td><?php echo number_format($a['saleprice'])?> VNĐ</td>
			<td>
				<?php 
				if($a['status']==1){ 
					echo 'hiện';
				}
				else{
					echo 'ẫn';
					?>

				<?php }?>

			</td>
			<td><?php echo $b['created_at']?></td>
			<td><?php echo $b['updated_at']?></td>

		</tr>

		
	</table>
</div>


