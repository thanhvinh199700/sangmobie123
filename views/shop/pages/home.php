<div class="col-md-10" style="border-left:  3px double white;">

	<div class="col-md-12" style="font-size: 20px; font-family:serif; background:white;color: black;width: 98%; border-radius: 3px;text-shadow: 2px 2px 5px red;text-align: center;">
		8 SẢN PHẨM MỚI NHẤT
	</div>
	<?php
	$t="";
	foreach($data["new_products"] as $row){
		$t .="<div class='col-md-3' style='background:white;margin:2px 2px;width:24%;padding:50px 60px;border-radius:1px;box-shadow:0px 5px 5px 0px rgba(0,0,0,0.3);'>";
		$t .="<div class='card text-center' style='width: 13rem;'>";
		$t .="<a href='".URL."index.php/frontend/detail_products/".$row['id']."'>";
		$t .="<img class='card-img-top'
		src='".URL."public/images/".$row["image"]."' 
		alt'Card image cap' style='border-radius:15px;width:150%;margin-left:-30px;'>";
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

	<div class="col-md-12" style="font-size: 20px; font-family:serif; background:white;color: black;width: 98%; border-radius: 3px;text-shadow: 2px 2px 5px red;text-align: center;">
		TẤT CẢ SẢN PHẨM KHUYẾN MÃI
	</div>
	<?php
	$t="";
	foreach($data["sale_products"] as $row){
		$t .="<div class='col-md-3' style='background:white;margin:2px 2px;width:24%;padding:50px 60px;border-radius:1px;box-shadow:0px 5px 5px 0px rgba(0,0,0,0.3);'>";
		$t .="<div class='card text-center' style='width: 14rem;'>";
		$t .="<a href='".URL."index.php/frontend/detail_products/".$row['id']."'>";
		$t .="<img class='card-img-top'
		src='".URL."public/images/".$row["image"]."' 
		alt'Card image cap' style='border-radius:15px;width:150%;margin-left:-30px;'>";
		$t .="</a>";
		$t .="<div class='card-body'>";
		$t .="<p class='card-text'>".$row["product_name"]."</p>";
		$t .="<h3 class='card-title' style='text-decoration: line-through;'>Giá :".number_format($row["price"])."</h3>";
		$t .="<h3 class='card-title'>sale :".number_format($row["saleprice"])."</h3>";
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

<?php require "views/shop/modules/icon.php";?>