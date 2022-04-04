<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
	<style>
		.header_login{
			margin-top: 150px;
            width: 480px;
		}
		.dangnhap{
			margin-bottom: 200px;
		}
	</style>
</head>
<body>
<div class="row dangnhap">
<div class="row1 header_login">
			<H1>CẬP NHẬT TÀI KHOẢN</H1>			
</div>
<div class="login-form">

	<form action="index.php?action=dangki" method="post">

		<div class="input-box">
			<i></i>
			<input type="text" name="tennd" value="<?= $Ten_ND ?>">
		</div>
		<div class="input-box">
			<i></i>
			<input type="text" name="pass" value="<?= $Pass ?>">
		</div>
		<div class="input-box">
			<i></i>
			<input type="text" name="sdt" value="<?= $Sdt_ND ?>">
		</div>
		<div class="input-box">
			<i></i>
			<input type="text" name="diachi" value="<?= $DC_ND ?>">
		</div>
		<div class="input-box">
			<i></i>
			<input type="email" name="email" value="<?= $Ten_TK ?>">
		</div>
		<div class="btn-box">
		<input type="hidden" name="id" value="<?= $ID_ND ?>">
			<button type="submit" name="capnhat" value="cap nhat">
			CẬP NHẬT
			</button>

			<button type="reset" name="reset">
				NHẬP LẠI
			</button>
		</div>
		<div class="thongbao">
			<?php
				if (isset($thongbao)&&($thongbao!="")) {
					echo $thongbao;
				}
			?>
		</div>
	</form>
</div>
</div>
</body>
</html>
