<style type="text/css">
	td{
		height: 50px;
	}
	th{
		height: 50px;
		text-align: center;
	}
</style>
<div class="container">
	<h2>List Contact</h2>
	<table class="table-bordered" id="table_id" width="95%" style="text-align: center;">
		<thead>
			<tr>
				<th>ID</th>
				<th>ContactFullname</th>
				<th>ContactEmail</th>	
				<th>ContactPhone</th>
				<th>ContactTittle</th>
				<th>ContactDetail</th>
				<th>Created_at</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data['listcontact'] as $value): ?>
				<tr>
					<td><?php echo $value['id']?></td>
					<td><?php echo $value['contactfullname']?></td>
					<td><?php echo $value['contactemail']?></td>	
					<td><?php echo $value['contactphone']?></td>
					<td><?php echo $value['contacttittle']?></td>
					<td><?php echo $value['contactdetail']?></td>		
					<td><?php echo $value['created_at']?></td>	
					<td><a class="btn btn-warning" href="<?php echo URL?>index.php/contact/deletecontact/<?php echo $value['id']?>">Delete</a></td>
				</tr>
			<?php endforeach;?>     
		</tbody>
	</table>
</div>


<?php 

$end = ceil($data['total_rows']/5); 
$html = "<ul class='pagination' style='margin-left:40%;  margin-top:30px;  margin-bottom:50px;  height:20px;'>";  
$html  .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center;background:white;border-radius:3px '><a href='".URL."index.php/contact/listcontact'>&laquo;</a></li>"; 
for($i=1;$i<=$end;$i++)
{ 
	$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border-radius:3px'><a href='".URL."index.php/contact/listcontact/$i'>$i</a></li>";
} 
$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border-radius:3px;'><a  href='".URL."index.php/contact/listcontact/$end'>&raquo;</a></li>"; 
$html .= "</ul>"; 

echo $html; 
?>