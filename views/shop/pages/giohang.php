<?php 
if(!isset($_SESSION['cart']))
	echo "<script>alert('Giỏ Hàng Đang Trống!');location.href=('".URL."	index.php')</script>";
else
{
	?>
	<?php require "views/shop/modules/header.php";?>
	<?php require "views/shop/modules/header_menu.php";?>
	<?php require "views/shop/modules/quangcao.php";?>
	<section class="col-sm-12 col-md-12 col-xs-12 col-lg-12 margin" style="padding-bottom: 10px;background-color: white; color: black">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
				<h5 class="text-left"><i>Xin Chào : <b class="text-danger">
					<?php if(isset($_SESSION['user']))
					{	
						?>
						<?php echo $_SESSION['user'];?>

					<?php };?>
				</b></i></h5>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="row">
					<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						<form name="shopcart" method="post" action="<?=URL?>index.php/Frontend/EditCart/" id="shopcart">
							<div class="panel panel-default ">
								<!-- Default panel contents -->

								<div class="panel-heading">Thông Tin Giỏ Hàng</div>
								<!-- Table -->
								<table class="table table-bordered table-hovertext-justify table-responsive table-condensed table-striped" style="text-align: center;">
									<thead>
										<tr class="text-info">
											<th>STT</th>
											<th>Sản Phẩm</th>
											<th>hình ảnh</th>
											<th>Giá</th>
											<th>Số Lượng</th>
											<th>Tổng tiền</th>
											<th><!-- <input type="submit" name="" value="Cập nhật Tất Cả" class="btn-success btn"></th> -->
											<th><a class="btn btn-danger" href="<?=URL?>index.php/Frontend/delCart/">Xóa Tất Cả</a></th>


										</tr>
									</thead>
									<tbody>
										<?php $stt=1;$sum=0;
									// 	echo "<pre>";
									// 	print_r($data['order']);
									// 	echo "</pre>";
									// die;
										foreach ($data['order'] as $value):
											?>
											<tr>
												<input type="hidden" name="id[]" value="<?=$value[0]['id']?>">
												<td><?php echo $stt; ?></td>
												<td><?php echo $value[0]['product_name']?></td>
												<td><img src="<?php echo URL_image;?><?php echo $value[0]['image']?>" style="width:50px;"/>
													<td><?php echo number_format($value[0]['price']).'vnd'?></td>
													<td><input class="form-control" type="number" min="1"name="amount[]" value="<?php echo $value['slotuong']?>" onchange="shopcart.submit();" size="5"></td>
													<td><?php 
													echo number_format($value[0]['price']*$value['slotuong']) ;
													$sum+=$value[0]['price']*$value['slotuong'];
													$_SESSION['tongtien']=$sum;
													?></td>

													<td colspan="2">
														<a href="<?=URL?>index.php/Frontend/delCart/<?=$value[0]['id']?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> Xóa</a>

													</td>
												</tr>
												<?php $stt++; endforeach; ?>
											</tbody>
										</table>
									</div>
								</form>
							</div>
							<div class="col-xs-3 col-sm-3 col-lg-3">
								<ul class="list-group" style="margin-top: -18px;">
									<li class="btn-primary"><h3><i>Thông Tin Đơn Hàng</i></h3></li>
									<li class="list-group-item bg-info">Số Mặt Hàng
										<h3 class="label label-default">
											<?php echo $stt-1; ?>
										</h3>
									</li>
									<li class="list-group-item bg-info" style="">
										Thuế VAT
										<h3 class="label label-default ">
											10%
										</h3>
									</li>
									<li class="list-group-item bg-info" style="">
										Số Tiền
										<h3 class="label label-default ">
											<?php echo number_format($_SESSION['tongtien']) ?>
										</h3>
									</li>
									<li class="list-group-item bg-info" style="">
										Số Tiền(Gồm VAT)
										<h3 class="label label-default ">
											<?php 
											$a=($_SESSION['tongtien']);
											echo number_format($a*1.1)
											?>
										</h3>
									</li>
									<div class="text-center" style="padding:10px 0px ">
										<a href="<?php echo URL?>index.php" class="btn btn-xs btn-warning">Tiếp Tục Mua Hàng</a>	
										<a href="<?php echo URL?>index.php/frontend/frmthanhtoan" class="btn btn-xs btn-success">Thanh Toán</a>
									</div>

								</ul>
							</div>
						</div>
					</div>

				</div>
			</section>
		<?php } ?>
		<?php require "views/shop/modules/footer.php";?>