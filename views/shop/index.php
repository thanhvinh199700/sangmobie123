<?php  $this->view("shop/modules/header")?>
<?php  $this->view("shop/modules/header_menu",$data)?>
<?php  $this->view("shop/pages/slide")?>
<?php  $this->view("shop/modules/quangcao")?>
<?php  $this->view("shop/pages/menu",$data)?>
<div class="container-fluid">
	<div class="row">
		
		<?php  $this->view("shop/pages/boloc",$data)?>
		<?php  $this->view($data['page'],$data)?>


		
		<div class="col-md-12">
			<?php  $this->view("shop/modules/phukien",$data)?>

		</div>
		
	</div>
</div>
<?php  $this->view("shop/modules/footer")?>
