<div class="container-fluid" style="width: 100%; background-image: url('<?php echo URL?>public/images/213.jpg');" >
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs">

				<li class="nav-item"style="" >
					<a class="nav-link" href="<?php echo URL;?>index.php/frontend/all_products/1" style="color:#eee;font-size: 19px">Tất Cả Sản Phẩm</a>
				</li> 
				<li class="nav-item"style="" >
					<a class="nav-link" href="<?php echo URL;?>index.php/frontend/new_products" style="color:#eee;font-size: 19px">Sản Phẩm Mới Nhất</a>
				</li> 
				<li class="nav-item"style="" >
					<a class="nav-link" href="<?php echo URL;?>index.php/frontend/sale_products" style="color:#eee;font-size: 19px">Sản Phẩm Khuyến Mãi</a>
				</li>

				<li class="nav-item"style="" >
					<a class="nav-link" href="<?php echo URL;?>index.php/frontend/banchay" style="color:#eee;font-size: 19px">Sản Phẩm Bán Chạy</a>
				</li>
				
				<?php
				$t="";
				foreach ($data["category"] as $row){
					if($row['parent']==0){
						$t.="<li class='dropdown' style='padding:4px;'><a class='nav-link dropdown-toggle' data-toggle='dropdown'role='button' aria-haspopup='true' aria-expanded='false' href='' style='color:#eee'>".$row['category_name']."<i class='fas fa-caret-down'></i></a>";
						$t.="<ul class='dropdown-menu'>";
						foreach ($data["category"] as $row1){
							if($row1['parent']==$row['id']){
								$t.="<li><a style=''class='text-center' href='".URL."index.php/frontend/listcategorypage/1/".$row1['id']."'>".$row1['category_name']."</a></li>";
							}
						}
						$t.="</ul>";
						$t.="</li>";
					}
				}
				echo $t;
				?>				
			</ul>
		</div>
	</div>
</div>