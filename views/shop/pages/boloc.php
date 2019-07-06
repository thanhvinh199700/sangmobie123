
<div class="col-md-2">
	<ul class="nav nav-pills nav-stacked" style="border:1px dashed #33FFFF">
		<li class="active none-border"><a href="#">Danh Mục Sản Phẩm</a></li>
		
		<li style="width:100%;"><a href="<?php echo URL?>index.php/frontend/from1to5">TỪ 1 ĐẾN 5 TRIỆU</a></li>
		
		<li style="border-top:1px dashed #33FFFF;width:100%;"><a href="<?php echo URL?>index.php/frontend/from5to10">TỪ 5 ĐẾN 10 TRIỆU</a></li>
		
		<li style="border-top:1px dashed #33FFFF;width:100%;"><a href="<?php echo URL?>index.php/frontend/from10to15">TỪ 10 ĐẾN 15 TRIỆU</a></li>
		
		<li style="border-top:1px dashed #33FFFF;width:100%;"><a href="<?php echo URL?>index.php/frontend/from15to20">TỪ 15 ĐẾN 20 TRIỆU</a></li>
		
		<li style="border-top:1px dashed #33FFFF;width:100%;"><a href="<?php echo URL?>index.php/frontend/over20">TRÊN 20 TRIỆU</a></li> 
		
		<?php foreach ($data['boloc_category'] as $value):?>
			<li style="border-top:1px dashed #33FFFF;width:100%;"><a href="<?php echo URL?>index.php/frontend/listcategorypage/1/<?php echo $value['id']?>"><?php echo $value['category_name']?></a></li> 
			
			<?php endforeach;?>
	</ul>
	<div id="fb-root" style="margin-top:10px;margin-left: -10px;"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2"></script>
	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdidongthongminh.vn%2F&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
</div>