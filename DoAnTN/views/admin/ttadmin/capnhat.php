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
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thông tin tài khoản</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
<div class="row dangnhap">
<!-- <div class="row1 header_login">
			<H1>CẬP NHẬT TÀI KHOẢN</H1>			
</div> -->

<div class="row formcontent">
				<form action="index.php?action=capnhattk" method="post">
					<div class="row mb10">
						Mã khách hàng<br>
						<input type="text" name="id" disabled>
					</div>
					<div class="row mb10">
						Tên khách hàng<br>
						<input type="text" name="tennd" value="<?=$Ten_ND;?>">
					</div>
                    <div class="row mb10">
						Pass<br>
						<input type="text" name="pass" value="<?=$Pass;?>">
					</div>
					<div hidden class="row mb10">
						Quyền<br>
						<input type="text" name="level" value="<?=$Level;?>">
					</div>
                    <div class="row mb10">
						SĐT<br>
						<input type="text" name="sdt" value="<?=$Sdt_ND;?>">
					</div>
                    <div class="row mb10">
						Địa chỉ<br>
						<input type="text" name="dc" value="<?=$DC_ND;?>">
					</div>
                    <div class="row mb10">
						Email<br>
						<input type="text" name="email" value="<?=$Ten_ND;?>">
					</div>
					<div class="row mb10">
                    <input type="hidden" name="id" value="<?=$ID_ND?>">
						<input type="submit" name="capnhat" value="Cập nhật">
						<input type="reset" value="Nhập lại">
                        <!-- <a href="index.php?action=ttadmin"><input type="button" value="Danh sách"></a> -->
					</div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao
                    ?>
				</form>
			</div>
</div>
</body>
</html>
