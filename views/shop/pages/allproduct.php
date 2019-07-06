

<div class="col-md-10" style="">

	<div class="col-md-12" style="font-size: 20px; font-family:serif; background:white;color: black;width: 98.5%; border-radius: 3px;text-shadow: 2px 2px 5px red;text-align: center;margin-bottom: 5px">
		ALL PRODUCT
	</div>
	<?php
	$t="";
	foreach($data['all_products'] as $row){
		$t .="<div class='col-md-3' style='background:white;margin:4px 4px;width:24%;padding:50px 60px;border-radius:1px;box-shadow:0px 5px 5px 0px rgba(0,0,0,0.3);min-height:380px;'>";
		$t .="<div class='card text-center' style='width: 13rem;'>";
		$t .="<a href='".URL_detail .$row['id']."'>";
		$t .="<img class='img-responsive'
		src='".URL_image.$row["image"]."' 
		alt'Card image cap' style='border-radius:15px;margin-left:px;'>";
		$t .="</a>";
		$t .="<div class='card-body'>";
		$t .="<a class='link' href=''>";
		$t .="<p class='card-text'>".$row["product_name"]."</p>";
		$t .="</a>";
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



	<div class="col-md-12">
		<?php 

		$end = ceil($data['total_rows']/12); 
		$html = "<ul class='pagination' style='margin-left:40%;  margin-top:30px;  margin-bottom:50px;  height:20px;'>";  
		$html  .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center;background:white;border-radius:3px '><a href='".URL."index.php/frontend/all_products/1'>&laquo;</a></li>"; 
		for($i=1;$i<=$end;$i++)
		{ 
			$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border-radius:3px'><a href='".URL."index.php/frontend/all_products/$i'>$i</a></li>";
		} 
		$html .= "<li style='display:inline-block;  width:30px;  height:100%;  text-align:center; background:white;border-radius:3px;'><a  href='".URL."index.php/frontend/all_products/$end'>&raquo;</a></li>"; 
		$html .= "</ul>"; 

		echo $html; 
		?>
	</div>
	

</div>
<?php require "views/shop/modules/icon.php";?>