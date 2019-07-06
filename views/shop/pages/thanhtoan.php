<?php if(!isset($_SESSION['user']))

echo "<script>alert('bạn chưa đăng nhập!');location.href=('".URL."index.php/login/login')</script>";
else 
{
	?>
	<?php include('views/shop/modules/header.php');?>
	<section class="col-sm-12 col-md-9 col-xs-12 col-lg-9 margin" style="padding-bottom: 10px;background-color: white; color: black">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-xs-9 col-sm-9">
				<form action="<?php echo URL?>index.php/frontend/addthanhtoan" method="POST" class="form-horizontal" role="form">
					<div class="form-group">
						<legend>Thanh Toán</legend>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-1">
							<label>Họ Tên Khách Hàng</label>
							<input class="form-control" type="text" name="fullname" value="<?php echo $_SESSION['user']?>"><br>
							<label>Địa Chỉ Giao Hàng</label>
							<textarea name="address" class="form-control" cols="5" ><?php echo $_SESSION['address']?></textarea><br>
							<label>Ngày Nhận</label>
							<input type="date" name="order_date" id="input" class="form-control" value="" required="required" title=""><br>
							<label>Số ĐT</label>
							<input class="form-control" type="tel" name="phone" value="<?php echo $_SESSION['phone']?>"><br>
							<label>Email</label>
							<input class="form-control" type="email" name="email" value="<?php echo $_SESSION['email']?>"><br>
							<button type="submit" name="THANHTOAN" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
<?php } ;?>

<?php include('views/shop/modules/footer.php');?>

