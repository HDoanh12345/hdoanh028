<?php
    if (is_array($nguoidung)) {
        extract($nguoidung);
    }
?>
<div class="row">
    <div class="row them">
        <h1>CẬP NHẬP THÔNG TIN KHÁCH HÀNG</h1>
    </div>
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
						<input type="text" name="email" value="<?=$Ten_TK;?>">
					</div>
					<div class="row mb10">
                    <input type="hidden" name="id" value="<?=$ID_ND?>">
						<input type="submit" name="capnhatad" value="Cập nhật">
						<input type="reset" value="Nhập lại">
                        <a href="index.php?action=ttadmin"><input type="button" value="Danh sách"></a>
					</div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao
                    ?>
				</form>
			</div>
</div>