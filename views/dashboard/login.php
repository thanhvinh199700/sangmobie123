
<!DOCTYPE html >
<html>
<head>
	<title>LOGIN</title>
	<script src="<?php echo URL; ?>public/css/fontawesome.min.css"></script>
</head>

<body>
	<style >

		body{
			margin:0px;
			padding: 0px;
			font-family: sans-serif;
			background:url('../public/images/login.jpg'); 
			background-size:cover;
		}
		div.loginadmin{
			width: 280px;
			position: absolute;
			top:50%;
			left: 50%;
			transform: translate(-50%,-50%);
			color: black;
		}
		h2{
			text-align: center;
			font-size: 40px;
			border-bottom: 6px solid #38C73B;
			margin-bottom:30px;
			padding: 13px 0;
		}
		.textbox{
			width: 100%;
			overflow: hidden;
			font-size: 20px;
			margin-top: 10px;
			margin-bottom: 10px;
			
		}
		.textbox input{
			border-radius: 15px;
			border:none;
			outline: none;
			width:100%;
			min-height: 30px;
			border: 2px solid #4caf50;
			color:white;
			background: black;
			opacity: 0.5;
		}
		.submit input{
			width: 100%;
			background: none;
			border:2px solid #4caf50;
			color: white;
			padding: 5px;
			font-size: 18px;
			cursor: pointer;
			margin: 12px 0;
		}
	</style>
	<div class="loginadmin">
		<h2>Đăng nhập</h2>
		<form action="<?php echo URL;?>index.php/login/runLoginAdmin" method="POST">
			<div class="textbox">
				<input type="text" name="name" placeholder="User Name" />
			</div>
			<div class="textbox">
				<i class="fas fa-unlock-alt"></i>
				<input type="passWord" name="pass" placeholder="PassWord" />
			</div>
			<div class="submit">
				<input type="reset" value="reset" />
				<input type="submit" name="submit" value="Login" />
			</div>
		</form>
	</div>

</body>
</html>


