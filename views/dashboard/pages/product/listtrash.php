
<style>
	table{
		border:3px solid black;
		width: 90%;
		
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

<div class="container">
	<h2>List Trash Category</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Category_name</th>
				<th>Parent</th>	
				<th>Restore</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data['trash'] as $value): ?>
				<tr>
					<td><?php echo $value['id']?></td>
					<td><?php echo $value['product_name']?></td>
					<td><img src="<?php echo URL;?>public/images/<?php echo $value['image']?>" width="50px"></td>
					<td><a href="<?php echo URL?>index.php/product/restore/<?php echo $value['id']?>"><img src="<?php echo URL_image?>restore.png" style="width: 20px;"></a></td>
					<td> <a href="<?php echo URL?>index.php/product/del/<?php echo $value['id']?>"><img src="<?php echo URL_image?>delete.png" style="width: 20px;"></a></td>
					
				</tr>
			<?php endforeach;?>     
		</tbody>
	</table>
</div>


<?php 

$end = ceil($data['total_rows']/5); 
$html = "<ul class='paginator' style='margin-left:40%;  margin-top:30px;  margin-bottom:50px;  height:20px;'>";  
$html  .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center;background:white;border:1px solid black;border-radius:3px '><a href='".URL."index.php/Product/trashProduct/1'>&laquo;</a></li>"; 
for($i=1;$i<=$end;$i++)
{ 
	$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border:1px solid black;border-radius:3px'><a href='".URL."index.php/Product/trashProduct/$i'>$i</a></li>";
} 
$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border:1px solid black;border-radius:3px;'><a  href='".URL."index.php/Product/trashProduct/$end'>&raquo;</a></li>"; 
$html .= "</ul>"; 

echo $html; 
?>