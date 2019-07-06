
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
	}
	tr{
		border: 1px solid black;
		border-radius: 3px;
	}
	a{
		margin-left: 15px;
	}
</style>
<a href="<?php echo URL?>index.php/brand/frmAdd" type="button" class="btn btn-success">Add Brand</a>
<a href="<?php echo URL?>index.php/brand/trashBrand/1"type="button" class="btn btn-warning">trash(<?php echo $data['trash']?>)</a>
<div class="container">
	<h2>List brand</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>brand_name</th>
				<th>status</th>
				<th>trash</th>
				<th>edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data['brand'] as $value): ?>
				<tr>
					<td><?php echo $value['id']?></td>
					<td><?php echo $value['brand_name']?></td>

					<td>
						<?php 
						if($value['status']==1){ 
						?>

							<img src="<?php echo URL?>public/images/200.jpg" id='status<?php echo $value['id']; ?>' data='1' width='20px' onclick="changeStatus('brand',this,<?php echo $value['id'] ;?>)"/>	
							<?php
						}
						else{
							?>
							<img src="<?php echo URL?>public/images/100.png" id='status<?php echo $value['id']; ?>' data='0' width='20px' onclick="changeStatus('brand',this,<?php echo $value['id'] ;?>)"/>
						<?php }?>

					</td>
					<td><?php echo $value['trash']?></td>
					<td><a href="<?php echo URL?>index.php/brand/frmEdit/<?php echo $value['id']?>"class="glyphicon glyphicon-edit btn-md" style="text-decoration: none"></a></td>
					
					<td><a class="btn btn-warning" href="<?php echo URL?>index.php/brand/sendToTrash/<?php echo $value['id']?>">Delete</a></td>
				</tr>
			<?php endforeach;?>     
		</tbody>
	</table>
</div>


<?php 

$end = ceil($data['total_rows']/4); 
$html = "<ul class='pagination' style='margin-left:40%;  margin-top:30px;  margin-bottom:50px;  height:20px;'>";  
$html  .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center;background:white;border-radius:3px '><a href='".URL."index.php/brand/brandlist/1'>&laquo;</a></li>"; 
for($i=1;$i<=$end;$i++)
{ 
	$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white0;border-radius:3px'><a href='".URL."index.php/brand/brandlist/$i'>$i</a></li>";
} 
$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border-radius:3px;'><a  href='".URL."index.php/brand/brandlist/$end'>&raquo;</a></li>"; 
$html .= "</ul>"; 

echo $html; 
?>