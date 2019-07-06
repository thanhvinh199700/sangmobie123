<div class="col-md-10" style="border-left:  3px double white;">

	<div class="col-md-12" style="font-size: 20px; font-family:serif; background:white;color: black;width: 96.6%; border-radius: 3px;text-shadow: 2px 2px 5px red;text-align: center;">
		DANH SÁCH SẢN PHẨM TÌM KIẾM ĐƯỢC
	</div>
	<div class="col-md-12" style="font-size: 20px; font-family:serif;color: black;width: 96.6%; border-radius: 10px;">
		đã tìm thấy <?php  echo count($data["sreach"])?> sản phẩm
	</div>
	<?php
	
	$t="";
	foreach($data["sreach"] as $row){
		$t .="<div class='col-md-3' style='background:white;margin:3px 3px;width:24%;padding:60px;border-radius:1px;box-shadow:0px 5px 5px 0px rgba(0,0,0,0.3);min-height:450px;'>";
		$t .="<div class='card text-center' style='width: 14rem;'>";
		$t .="<a href='".URL."index.php/frontend/detail_products/".$row['id']."'>";
		$t .="<img class='card-img-top'
		src='".URL."public/images/".$row["image"]."' 
		alt'Card image cap' style='border-radius:15px;width:120%;margin-left:-10px;'>";
		$t .="</a>";
		$t .="<div class='card-body'>";
		$t .="<p class='card-text'>".$row["product_name"]."</p>";
		$t .="<h3 class='card-title' style=''>Giá :".number_format($row["price"])."</h3>";
		
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

	

</div>


