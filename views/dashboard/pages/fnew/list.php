
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
<a href="<?php echo URL?>index.php/fnew/frmAdd" type="button" class="btn btn-success">Add</a>
<a href="<?php echo URL?>index.php/fnew/trashfnews/1" type="button" class="btn btn-warning">trash(<?php echo $data['trash']?>)</a>
<div class="container">
	<h2>List fnew</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>short_description</th>	
				<th>Avata</th>
				<th>status</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data['fnew'] as $value): ?>
				<tr>
					<td><?php echo $value['id']?></td>
					<td><?php echo $value['title']?></td>
					<td><?php echo $value['short_description']?></td>
					<td><img src="<?php echo URL;?>public/images/fnew/<?php echo $value['avatar']?>" /></td>
					<td>
						<?php 
						if($value['status']==1){ 
						?>

							<img src="<?php echo URL?>public/images/200.jpg" id='status<?php echo $value['id']; ?>' data='1' width='20px' onclick="changeStatus('Fnew',this,<?php echo $value['id'] ;?>)"/>	
							<?php
						}
						else{
							?>
							<img src="<?php echo URL?>public/images/100.png" id='status<?php echo $value['id']; ?>' data='0' width='20px' onclick="changeStatus('Fnew',this,<?php echo $value['id'] ;?>)"/>
						<?php }?>

					</td>
					<td><a href="<?php echo URL?>index.php/fnew/frmedit/<?php echo $value['id']?>"class="glyphicon glyphicon-edit btn-md" style="text-decoration: none"></a></td>
					<td><a class="btn btn-warning" href="<?php echo URL?>index.php/fnew/sendToTrash/<?php echo $value['id']?>">Delete</a></td>
				</tr>
			<?php endforeach;?>     
		</tbody>
	</table>
</div>


<?php 

$end = ceil($data['total_rows']/5); 
$html = "<ul class='pagination' style='margin-left:40%;  margin-top:30px;  margin-bottom:50px;  height:20px;'>";  
$html  .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center;background:white;border-radius:3px '><a href='".URL."index.php/fnew/fnewList/1'>&laquo;</a></li>"; 
for($i=1;$i<=$end;$i++)
{ 
	$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border-radius:3px'><a href='".URL."index.php/fnew/fnewList/$i'>$i</a></li>";
} 
$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border-radius:3px;'><a  href='".URL."index.php/fnew/fnewList/$end'>&raquo;</a></li>"; 
$html .= "</ul>"; 

echo $html; 
?>