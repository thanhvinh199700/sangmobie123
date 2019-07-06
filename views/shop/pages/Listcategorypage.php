<div class="col-md-10" style="border-left:  3px double white;">

	<div class="col-md-12" style="font-size: 20px; font-family:serif;color: black;width: 98%; border-radius: 3px;text-shadow: 2px 2px 5px red;text-align: center;background: white;">
		
		LIST CATEGORY 
		<?php foreach ($data["name"] as $value):?>
			<?php echo $value['category_name']?>
			<?php break;?>
		<?php endforeach;?>
	</div>
	<div class="col-md-12" style="font-size: 20px; font-family:serif;color: black;width: 96.6%; border-radius: 10px;">
		đã tìm thấy được <?php echo count($data["listcategory"])?> sản phẩm thuộc nhóm 
		<?php foreach ($data["name"] as $value):?>
			<?php echo $value['category_name']?>
			<?php break;?> 
		<?php endforeach;?>
	</div>
	<?php
	$t="";
	foreach($data["listcategory"] as $row){
		$t .="<div class='col-md-3' style='background:white;margin:3px 3px;width:24%;padding:50px 60px;border-radius:1px;box-shadow:0px 5px 5px 0px rgba(0,0,0,0.3);'>";
		$t .="<div class='card text-center' style='width: 13rem;'>";
		$t .="<a href='".URL."index.php/frontend/detail_products/".$row['id']."'>";
		$t .="<img class='card-img-top'
		src='".URL."public/images/".$row["image"]."' 
		alt'Card image cap' style='border-radius:15px;width:170%;margin-left:-40px;'>";
		$t .="</a>";
		$t .="<div class='card-body'>";
		$t .="<p class='card-text'>".$row["product_name"]."</p>";
		$t .="<h3 class='card-title'>Giá :".number_format($row["price"])."</h3>";
		$t .="</div>";
		$t .="<div class='buttonleft'>";
		$t .="<a href='".URL."index.php/frontend/countcart/".$row['id']."'>";
		$t .="<button type='button' class='btn btn-primary'>";
		$t .="<i class='fas fa-shopping-cart' style='margin-right:5px;'></i>ADD TO CART";
		$t .="</button>";
		$t .="</a>";
		$t .="</div>";
		$t .="</div>";
		$t .="</div>";

	}
	echo $t;
	?>

	?>
	<div class="col-md-12">
		<?php 
		$c=$data["phantrang"]['product_category'];
		
		$end = ceil($data['total_rows']/4); 
		$html = "<ul class='pagination' style='margin-left:40%;  margin-top:30px;  margin-bottom:50px;  height:20px;'>";  
		$html  .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center;background:white;border-radius:3px '><a href='".URL."index.php/frontend/listcategorypage/1/".$c."'>&laquo;</a></li>"; 
		for($i=1;$i<=$end;$i++)
		{ 
			$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border-radius:3px'><a href='".URL."index.php/frontend/listcategorypage/$i/".$c."'>$i</a></li>";
		} 
		$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border-radius:3px;'><a  href='".URL."index.php/frontend/listcategorypage/$end/".$c."'>&raquo;</a></li>"; 
		$html .= "</ul>"; 

		echo $html; 
		?>
	</div>

</div>
<?php require "views/shop/modules/icon.php";?>