

<div class="col-md-10" style="background: white;">
	<div class="col-md-12" style="font-size: 20px; font-family:serif;color: black;width: 100%; border-radius: 3px;text-shadow: 2px 2px 5px red;text-align: center;margin-bottom: 20px;">
		<h3 style="margin-top:0px;">Một số tin tức công nghệ nổi bật</h3>
	</div>
	<?php
	foreach ($data["all_news"] as $value):
		?>
		<div class="col-md-12" style="margin-bottom: 40px;">
			<div class="col-md-4" style="overflow: hidden;">
				<a href="<?php echo URL?>index.php/frontend/detail_news/<?php echo $value['id']?>">
					<img class="card-img-news"src="<?php echo URL?>public/images/fnew/<?php echo $value['avatar']?>" style="width:100%;">
				</a>
			</div>
			<div class="col-md-8">
				<a href="<?php echo URL?>index.php/frontend/detail_news/<?php echo $value['id']?>" style="text-decoration: none;">
					<strong><?php echo $value['title']?></strong>
				</a>
				<p><?php echo $value['short_description']?></p>
			</div>
			
		</div>
	<?php endforeach;?>


	<div class="col-md-12">
		<?php 

		$end = ceil($data['total_rows']/5); 
		$html = "<ul class='paginator' style='margin-left:40%;  margin-top:30px;  margin-bottom:50px;  height:20px;'>";  
		$html  .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center;background:white;border:1px solid black;border-radius:3px '><a href='".URL."index.php/frontend/allNews/1'>&laquo;</a></li>"; 
		for($i=1;$i<=$end;$i++)
		{ 
			$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border:1px solid black;border-radius:3px'><a href='".URL."index.php/frontend/allNews/$i'>$i</a></li>";
		} 
		$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border:1px solid black;border-radius:3px;'><a  href='".URL."index.php/frontend/allNews/$end'>&raquo;</a></li>"; 
		$html .= "</ul>"; 

		echo $html; 
		?>
	</div>
	

</div>