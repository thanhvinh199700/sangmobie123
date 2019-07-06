<?php require "views/shop/modules/header.php";?>
<?php require "views/shop/modules/header_menu.php";?>

<div class="col-md-12" style="margin-bottom: 50px;">
	<div class="container">
		<h1 style="color: #54540F"><?php echo $data["detail_news"]['title']?></h1>
		
		<div class="col-md-6">
			<img src="<?php echo URL?>public/images/fnew/<?php echo $data["detail_news"]['avatar']?>" style="max-width: 550px;min-height:400px;">
			<p style="color: black;font-size: 12px;"><?php echo $data["detail_news"]['short_description']?></p>
		</div>
		
		<div class="col-md-6">
			<p style="color:#1C1A1A;"><?php echo $data["detail_news"]['content']?></p>
		</div>
		
	</div>
</div>
<div class="col-md-12" style="min-height: 5px;background: #939393">
	
</div>

<?php require "views/shop/modules/footer.php";?>