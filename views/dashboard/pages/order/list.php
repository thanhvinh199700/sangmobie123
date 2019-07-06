 
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
<div class="container">
	<h2>List Order</h2>
	<table class="table-bordered" id="table_id">
		<thead>
			<tr>
				<th>ID</th>
				<th>fullname</th>
				<th>address</th>
				<th>email</th>	
				<th>phone</th>
				<th>Status</th>
				<th>Detail</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data['listusers'] as $value): ?>
				<tr>
					<td><?php echo $value['id']?></td>
					<td><?php echo $value['fullname']?></td>
					<td><?php echo $value['address']?></td>	
					<td><?php echo $value['email']?></td>	
					<td><?php echo $value['phone']?></td>		
					<td>
						<?php 
						if($value['status']==1){ 
							?>

							<img src="<?php echo URL?>public/images/200.jpg" id='status<?php echo $value['id']; ?>' data='1' width='20px' onclick="changeStatus('order',this,<?php echo $value['id'] ;?>)"/>	
							<?php
						}
						else{
							?>
							<img src="<?php echo URL?>public/images/100.png" id='status<?php echo $value['id']; ?>' data='0' width='20px' onclick="changeStatus('order',this,<?php echo $value['id'] ;?>)"/>
						<?php }?>

					</td>
					<td><a href="<?php echo URL?>index.php/order/detail/<?php echo $value['id']?>">xem chi tiết</a></td>

					<td><a class="btn btn-warning" href="<?php echo URL?>index.php/order/del/<?php echo $value['id']?>">Delete</a></td>
				</tr>
			<?php endforeach;?>     
		</tbody>
	</table>
</div>


<?php 

$end = ceil($data['total_rows']/5); 
$html = "<ul class='pagination' style='margin-left:40%;  margin-top:30px;  margin-bottom:50px;  height:20px;'>";  
$html  .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center;background:white;border-radius:3px '><a href='".URL."index.php/order/listorders/1'>&laquo;</a></li>"; 
for($i=1;$i<=$end;$i++)
{ 
	$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border-radius:3px'><a href='".URL."index.php/order/listorders/$i'>$i</a></li>";
} 
$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border-radius:3px;'><a  href='".URL."index.php/order/listorders/$end'>&raquo;</a></li>"; 
$html .= "</ul>"; 

echo $html; 
?>