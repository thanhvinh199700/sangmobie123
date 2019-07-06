
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
				<th>brand_name</th>
				<th>Restore</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data['trash'] as $value): ?>
				<tr>
					<td><?php echo $value['id']?></td>
					<td><?php echo $value['brand_name']?></td>
					<td><a href="<?php echo URL?>index.php/brand/restore/<?php echo $value['id']?>"><img src="<?php echo URL_image?>restore.png" style="width: 20px;"></a></td>
					<td> <a href="<?php echo URL?>index.php/brand/del/<?php echo $value['id']?>"><img src="<?php echo URL_image?>delete.png" style="width: 20px;"></a></td>
					
				</tr>
			<?php endforeach;?>     
		</tbody>
	</table>
</div>


<?php 

$end = ceil($data['total_rows']/4); 
$html = "<ul class='paginator' style='margin-left:40%;  margin-top:30px;  margin-bottom:50px;  height:20px;'>";  
$html  .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center;background:white;border:1px solid black;border-radius:3px '><a href='".URL."index.php/brand/trashBrand/1'>&laquo;</a></li>"; 
for($i=1;$i<=$end;$i++)
{ 
	$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border:1px solid black;border-radius:3px'><a href='".URL."index.php/brand/trashBrand/$i'>$i</a></li>";
} 
$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border:1px solid black;border-radius:3px;'><a  href='".URL."index.php/brand/trashBrand/$end'>&raquo;</a></li>"; 
$html .= "</ul>"; 

echo $html; 
?>