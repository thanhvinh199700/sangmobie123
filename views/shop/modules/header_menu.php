<section class="clearfix mainmenu" style="margin-top: 5px;margin-bottom: 5px;overflow: hidden;">

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12-xm-12-sm-12">
				<nav id="nav-1" style="height:50px;font-family: Raleway;box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);padding:10px;" >

					<?php foreach ($data["menu"] as $values):?>
						<a class="link-1" href="<?php echo URL ?><?php echo $values['menu_link']; ?>" style=""><?php echo $values['menu_name']; ?></a>
					<?php endforeach;?>

				</nav>
			</div>
		</div>
	</div>
</section>