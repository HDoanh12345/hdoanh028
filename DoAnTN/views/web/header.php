<?php
ob_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/giohang.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="jquery-3.6.0.min.js"></script>
	<script>
		var toancuc = 0;
		$(document).ready(function() {
			$("#xemthem").click(function() {
				toancuc = toancuc + 1;
				$.get("phantrang2.php", {
					trang: toancuc
				}, function(data) {
					$(".dssp").append(data);
				});
			});
		});
	</script>
	<title>DATN</title>
	<style>
		/* .search-container {
			float: right;
			margin: 0;
		}

		.search-container input[type=text] {
			padding: 0px;
			margin-top: 0px;
			font-size: 15px;
			border: 1px solid black;
			border-radius: 15px;
		}

		.search-container input[type=submit] {
			float: right;
			padding: 6px 10px;
			margin-top: 0px;
			margin-right: 16px;
			background: #ddd;
			font-size: 15px;
			border: none;
			cursor: pointer;
			border: 1px solid black;
			border-radius: 15px;
		}

		.search-container input[type=submit]:hover {
			background: #ccc;
			transition: all 0.4s ease;
		}

		@media screen and (max-width: 600px) {
			.search-container {
				float: none;
			}

			.search-container input[type=text],
			.search-container input[type=submit] {
				float: none;
				display: block;
				text-align: left;
				width: 100%;
				margin: 0;
				padding: 14px;
			}

			.search-container input[type=text] {
				border: 1px solid #ccc;
			}

		} */
	</style>
</head>

<body>

	<a name="dau"></a>
	<section class="top">
		<div class="container">
			<div class="sdt row justify-content" style="margin-top: 5px;">
				<div class="tt">
					<ul>
						<?php
						foreach ($allw as $hinh) {
							extract($hinh);

							echo ' <li><a href="#"><img src="../../img/phone.png" alt="" width="25px" height="25px"></a>' . $SDT_nh . '</li>
					<li><a href="#"><img src="../../img/gmail1.png" alt="" width="25px" height="25px"></a>' . $email_nh . '</li>';
						}
						?>
						<!-- <li><a href="#"><img src="img/phone.png" alt="" width="25px" height="25px"></a>03564007112</li>
						<li><a href="#"><img src="img/gmail1.png" alt="" width="25px" height="25px"></a>windsp@gamil.com</li> -->
					</ul>
				</div>
				<div class="menu-bar">

					<a style="margin-right: 10px;" href="index.php?action=themgiohang"><img src="../../img/cart.png" alt="" width="25px" height="25px"></a>
					<?php

					if (isset($_SESSION['Ten_ND'])) {
						extract($_SESSION['Ten_ND']);

					?>
						<a style="margin-right: 10px;" href="index.php?action=donhangkhachtv"><img src="../../img/bill.png" alt="" width="25px" height="25px"></a>
					<?php
					}
					?>

					<span>
						<!-- <a style="margin-right: 10px;" href=""><img src="img/user.png" alt=""width="25px" height="25px"></a> -->
						<img src="../../img/user.png" alt="" width="25px" height="25px">

					</span>
				</div>
				<div class="menu-items">
					<ul>
						<?php

						if (isset($_SESSION['Ten_ND'])) {
							extract($_SESSION['Ten_ND']);

						?>

							<div class="" style="color: white;">
								<?php
								echo "Xin chào" ?> <?= $Ten_ND ?>

							</div>
							<div class="">

								<li class="menu-item">
									<a href="index.php?action=capnhattk">Update tài khoản</a>
								</li>
								<li class="menu-item">
									<a href="index.php?action=dangxuat">Đăng xuất</a>
								</li>


							</div>
						<?php
						} else {
						?>
							<div class="dong">
								<ul>
									<li class="menu-item"><a href="index.php?action=dangnhap">Đăng nhập</a></li>
									<li class="menu-item"><a href="index.php?action=dangky">Đăng ký</a></li>
								</ul>
							</div>
						<?php
						}
						?>
					</ul>
				</div>
			</div>
			<div class="ac row" style="margin-bottom: 10px;">
				<ul>
					<li><img src="../../img/LOGO.png" alt="" width="50px" height="50px"></li>
					<li><a href="index.php">Trang chủ</a></li>
					<li><a href="#gt">Giới thiệu</a></li>
					<li><a href="#td">Thực đơn</a></li>
					<li><a href="#bl">Góp ý</a></li>
					<li><a href="index.php?action=hinh">Hình ảnh</a></li>
					<li><a href="">Tin tức</a></li>
					<li><a href="#lh">Liên hệ</a></li>
					<!-- <li><a href="index.php?action=themgiohang"><img src="img/search1.svg" alt="" width="20px" height="20px"></a></li> -->
					<li>

						<a>
							<!-- <div class="search-container" > -->
							<form id="tk" style="float: right; margin-top:-20px;" action="index.php?action=sanpham" method="post"><i class="fa fa-search"></i>
								<input style="border-radius: 10px; border: 1px solid #ccc;background: #f1f1f1;" type="text" placeholder=" Search..." name="kyw">
								<input hidden type="submit" value="Search" name="timkiem">

							</form>
							<!-- </div> -->
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>