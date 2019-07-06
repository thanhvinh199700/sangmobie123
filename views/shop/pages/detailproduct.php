


<div class="container-fluid">
	<div class="row">
		
		<div class="details col-lg-3" style="overflow: hidden;">
			<img class="card-img-top" src="<?php echo URL_image; ?><?php echo $data['detail_products']['image'];?>" alt="Card image cap" style ="width: 85%; margin-top: 20px;">
			<img class="card-img-top" src="<?php echo URL_image; ?><?php echo $data['detail_products']['image'];?>" alt="Card image cap" style ="width:90px; margin-top: 20px;border:3px solid #603C3C">
			<img class="card-img-top" src="<?php echo URL_image; ?><?php echo $data['detail_products']['image'];?>" alt="Card image cap" style ="width:90px; margin-top: 20px;;border:3px solid #4D0707">
			<img class="card-img-top" src="<?php echo URL_image; ?><?php echo $data['detail_products']['image'];?>" alt="Card image cap" style ="width:90px; margin-top: 20px;;border:3px solid #DC0F0F">
		</div>
		<div class="col-lg-3" style="margin-bottom: 20px;">
			<h2 class="text-left" ><?php echo $data['detail_products']['product_name']; ?></h2>
			<div class="card-body">
				<h3 class="text-left" ><b style="color: red;"> GIÁ BÁN 	:<?php echo number_format($data['detail_products']['price']); ?></b>
					<a href=""> VNĐ</a>
				</h3>
			</div>
			<h4 class="text"> <b style="font-family:bebasneue; font-size:15px;color: black"><?php echo $data['detail_products']['product_detail']; ?></h4>
				<div class="button" style="width:100% ;margin-top:15px;" >
					<div class="buttonleft" >
						<a href="<?php echo URL?>index.php/frontend/countcart/<?php echo $data['detail_products']['id']?>">
							<button type="button" class="btn btn-primary" style="">
								<i class="fas fa-shopping-cart" style="margin-right: 5px;"></i>ADD TO CART
							</button>
						</a>
					</div>
				</div>
			</div>
			<?php //endforeach; ?>

			<div class="col-lg-3"style="margin-bottom: 20px;border: 5px double black;background: #BC9C9C">
				<div class="tieudebaohanh">
					<h3> <b>Chế độ bảo hành </b></h3>
				</div>
				<div class="baohanh">
					<div class="form-group">
						<input type="hidden" id="dst_bhs" value="6tg">
						<p><strong>dCare (Gói Mặc Định)</strong></p>
						<div class="dc_mk"><ul><li><span class="doi_may"><span>1 đổi 1, 15 ngày</span></span></li><li><span class="bh_thang"><span>Bảo hành 6 tháng</span></span></li><li><span class="xl_ngag"><span>Xử lý trong 30 ngày</span></span></li></ul></div>
						<img src="<?php echo URL;?>public/images/dcare.png"style="width:70%;" class="dcare">
						<div class="bhv-content"><p><b>Bảo hành phần cứng mặc định, không bao gồm nguồn, màn hình, vân tay, rơi móp, vào nước </b></p></div>
						<div class="mg">
							<h3> <b>THÔNG TIN BẢO HÀNH CAO CẤP </b></h3>
							<a id="btn-pack-bh" href="#" target="_blank" title="Thông tin chi tiết gói bảo hành"> <b>Xem chi tiết</b></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<form action="<?php echo URL?>index.php/frontend/comment/<?php echo $data['detail_products']['id']?>"method="POST">
					<textarea type="text" name="comment_content" required style="width: 100%" id="binhluan"></textarea>
					<input class="btn-primary btn"type="submit" value="Bình luận">
				</form>

			</div>
			
<!-- 			<script>
				ClassicEditor
				.create( document.querySelector( '#binhluan' ) )
				.then( editor => {
					console.log( editor );
				} )
				.catch( error => {
					console.error( error );
				} );
			</script> -->
			<?php foreach($data['comment'] as $key):?>	
				<div class="col-lg-9" style="margin-top: 20px;">
					<div class="col-lg-1">
						<img src="<?php echo URL?>public/images/<?php echo $key['avatar']?>" alt="" width="50px" height="55px">
					</div>
					<div class="col-lg-8" style="border-radius:2px;margin-left:-15px;">
						<i style="color:#5624A9"><?php echo $key['name']?></i>
						<p><?php echo $key['comment_content']?></p>
					</div>	
				</div>
				
				
			<?php endforeach;?>		
			

			
			<?php require "views/shop/modules/icon.php";?>

			<div class="col-md-12" style="font-size: 20px; font-family:serif; background:white;color: black; border-radius: 3px;text-align: center;width:100%;margin-left:;margin-right: 0px;">
				<p style="color: red;">danh sách sản phẩm tương tự</p>
			</div>
			<div class="col-md-12">
				<?php

				$t="";
				foreach($data['sanphamtuongtu'] as $row){
					$t .="<div class='col-md-3' style='background:white;margin:3px 3px;width:24%;padding:50px 60px;border-radius:1px;box-shadow:0px 5px 5px 0px rgba(0,0,0,0.3);min-height:350px;'>";
					$t .="<div class='card text-center' style='width: 13rem;'>";
					$t .="<a href='".URL."index.php/frontend/detail_products/".$row['id']."'>";
					$t .="<img class='card-img-top'
					src='".URL."public/images/".$row["image"]."' 
					alt'Card image cap' style='border-radius:15px;width:85%;'>";
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
			</div>



		</div>



	</div>







