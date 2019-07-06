
<style>
	table{
		border:3px solid black;
		width: 90%;
		height: 200px;
	}
	th{
		border: 3px solid red;
		height: 50px;
		text-align: center;
	}
	td{
		border: 1px solid black;
		border-radius: 3px;
		height: 50px;
		text-align: center;
		width:100px;
	}
	tr{
		border: 1px solid black;
		border-radius: 3px;
	}
	a{
		margin-left: 15px;
	}
</style>
<div class="panel-heading"><h2>Thông tin chi tiết đơn hàng</h2></div>
<!-- Table -->
<b style="color: red;font-size: 20px;">Tên Khách Hàng :<i style="color: black;font-size: 13px;"><?php echo $data['customer']['fullname']?></i></b><br />
<b style="color: red;font-size: 20px;">Địa chỉ : <i style="color: black;font-size: 13px;"><?php echo $data['customer']['address']?></i></b><br />
<b style="color: red;font-size: 20px;">Số Điện thoại : <i style="color: black;font-size: 13px;"><?php echo $data['customer']['phone']?></i></b><br />
<b style="color: red;font-size: 20px;">Địa Chỉ Email :<i style="color: black;font-size: 13px;"><?php echo $data['customer']['email']?></i></b><br />
<div class="container">
	<h2>Chi tiết các sản phẩm</h2>
	<table class="table-bordered" id="table_id" width="95%">
		<thead>
			<tr>
				<th>order_ID</th>
				<th>Product_id</th>
				<th>qty</th>
				<th>product_price</th>	
				<th>total</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data['detail'] as $value): ?>
				<tr>
					<td><?php echo $value['order_id']?></td>

					<td>
						<?php

						
						foreach ($data['name'] as $value1) {
							if($value1['id']==$value['product_id']){
								echo $value1['product_name'];
							}
						}
						
						
						?>


					</td>
					<td><?php echo $value['qty']?></td>	
					<td><?php echo number_format($value['product_price']).'VND'?></td>	
					<td><?php echo number_format($value['total']).'VND'?></td>		
				</tr>
			<?php endforeach;?>     
		</tbody>
	</table>
</div>
<div class="tongtien">
	<h3 class="text-center">
		tổng tiền :<b> <?php print_r(number_format($data['sum']['sum(total)']).' VND');
		?>
	</b>
	</h3>

	<h3 class="text-center">
		tổng tiền sau thuế 10%: <b><?php print_r(number_format($data['sum']['sum(total)']*1.1).' VND');
		?></b>
	</h3>

</div>
