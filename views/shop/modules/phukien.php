<div class="col-md-12">
	<div class="container-fluid">
		<div class=""style="background:#DDDDDD;height:40px;margin-left: -44px;margin-right:-44px;border-radius: 3px;padding: 1px;">
			<h4 style="color: red;">PHỤ KIỆN- ĐỒ CHƠI</h4>
		</div>
	</div>
</div>
<div class="col-md-12">
	<div class="container-fluid" style="margin-left: -30px;margin-right:-30px;">
		<div class="row">
			<?php
			$t="";

			foreach($data["phukien"] as $row){
				$t .="<div class='col-md-2' style='background:white;margin:1px 1px;width:19.82%;padding:40px 60px;border-radius:1px;'>";
				$t .="<div class='card text-center' style='width: 13rem;'>";
				$t .="<a href='".URL."index.php/frontend/detail_products/".$row['id']."'>";
				$t .="<img class='card-img-top'
				src='".URL."public/images/".$row["image"]."' 
				alt'Card image cap' style='border-radius:15px;width:80%;'>";
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

		</div>
	</div>
</div>	
<div class="col-md-12">
	<div class="container-fluid">
		<div class=""style="background:#DDDDDD; margin-bottom:2px;height:40px;margin-left: -44px;margin-right:-44px;border-radius: 1px;padding:-20px;margin-top: -10px;padding:1px;">
			<h4 style="color: red;"> CÁC CHƯƠNG TRÌNH KHÁC TRONG THÁNG</h4>
		</div>
		
		<div class=""style="background:#DDDDDD; margin-bottom:2px;margin-left: -44px;margin-right:-44px;border-radius: 3px;">
			<img src="<?php echo URL; ?>public/images/1111.jpg" alt="img-fluid" width="100%">	
		</div>
	</div>
</div>


