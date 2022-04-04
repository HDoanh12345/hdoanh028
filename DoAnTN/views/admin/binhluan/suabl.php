<?php
    if (is_array($binhluan)) {
        extract($binhluan);
    }
?>
<div class="row">
    <div class="row them">
        <h1>CẬP NHẬP BÌNH LUẬN</h1>
    </div>
    <div class="row formcontent">
				<form action="index.php?action=capnhatbl" method="post">
					<div class="row mb10">
						Mã BÌNH LUẬN<br>
						<input type="text" name="id" disabled>
					</div>
					<div class="row mb10">
						Tên người dùng<br>
						<input type="text" name="tennd" value="<?=$Ten_ND;?>">
					</div>
                    <div class="row mb10">
						Nội dung bình luận<br>
						<input type="text" name="noidung" value="<?=$ND_BL;?>">
					</div>
                    <div class="row mb10">
						Ngày bình luận<br>
						<input type="text" name="ngaybl" value="<?=$Ngay_BL;?>">
					</div>
                   
					<div class="row mb10">
                    <input type="hidden" name="idnd" value="<?=$ID_ND?>">
                    <input type="hidden" name="id" value="<?=$ID_BL?>">
						<input type="submit" name="capnhat" value="Cập nhật">
						<input type="reset" value="Nhập lại">
                        <a href="index.php?action=dsbl"><input type="button" value="Danh sách"></a>
					</div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao
                    ?>
				</form>
			</div>
</div>