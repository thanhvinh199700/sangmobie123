
<!DOCTYPE html>
<html>
<head>
	<title>Sangmobile - Hệ thống bán lẻ điện thoại di động</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/myweb.css">
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/all.min.css">
	<script src="<?php echo URL; ?>public/js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo URL; ?>public/js/bootstrap.min.js"></script>
	<script src="<?php echo URL; ?>public/js/all.min.js"></script>
	<script src="<?php echo URL; ?>public/css/fontawesome.min.css"></script>
	<script src="<?php echo URL; ?>public/css/all.min.css"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	 <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
	<script >
		$(document).ready(function(){
			$(".dropdown-menu li a").mouseenter(function(){
				$(this).css("background-color","yellow");
			});
			$(".dropdown-menu li a").mouseleave(function(){
				$(this).css("background-color","white");
			});
			
			
		});
	</script>
	
</head>
<body>
	

	<section class="clearfix header ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="background-image: url('<?php echo URL?>public/images/213.jpg');overflow: hidden;">	
					<div class="col-md-12" >
						<div class="col-md-5"style="float: right;margin-right: -45px;">	
							<?php 
							if(isset($_SESSION['user']))
								{	?>

									<i class="fas fa-registered" style="margin-left: 10px;color: white"></i>
									<b  style="text-decoration: none;color: #00CCFF">xin chào : 
										<?php echo $_SESSION['user'];?>
										

									</b>
									<i class="fas fa-user" style="color: white"></i>						
									<a href="<?php echo URL?>index.php/frontend/Logout" style="text-decoration: none;color: #00CCFF">đăng Xuất
										
									</a>
									<?php	
								}
								else {
									?>
									<i class="fas fa-user" style="color: white"></i>						
									<a href="<?php echo URL?>index.php/login/Login" style="text-decoration: none;color: #00CCFF">đăng nhập</a>
									<i class="fas fa-registered" style="margin-left: 10px;color: white"></i>
									<a href="<?php echo URL?>index.php/login/registration" style="text-decoration: none;color: #00CCFF">đăng ký</a>
									
									
								<?php }?>



								<a href="<?php echo URL?>index.php/frontend/giohang" style="margin-right:-5px;border-radius:15px;text-decoration: none;width: 100%;margin-left: 10px;margin-right: 5px;">
									<i class="fas fa-cart-plus"></i>
								</a>
								<b style="color: red;">
									Giỏ Hàng

									(
										<?php 

										if(isset($_SESSION['cart'])){
											echo 'Có '.count($_SESSION['cart']).' mặt hàng';

										}
										else{
											echo 'trống';
											?>
										<?php };?>
										)

									</b>

								</div>

							</div>
							<div class="col-md-4" style="margin-left: -15px; margin-top: 10px;">
								<a href="<?php echo URL?>index.php">
									<img src="<?php echo URL?>public/images/logo1.png" alt="img-fluid">
								</a>
								<form class="form-inline my-2 my-lg-0" method="GET" action="<?php echo URL?>index.php/frontend/Sreach_product/" style="display: inline-block;margin-left:10px;"> 
									<input  class="form-control mr-sm-2" type="search" placeholder="bạn tìm gì ..." required aria-label="Search" name="key" / style="min-width: 270px;background: #2A2929">
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
										<i class="fas fa-search"></i>
									</button>
								</form>	
							</div>


							<?php require "views/shop/modules/header_icon.php";?>





						</div>
					</div>
				</div>

			</section>






