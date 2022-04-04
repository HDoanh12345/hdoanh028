<?php
    if (is_array($donhang)) {
        extract($donhang);
		$ttdh=get_ttdh($donhang['TrangThai']);
		$kh=$donhang["Ten_DH"].'			
			<br> '.$donhang["email_DH"].'
			<br> '.$donhang["DC"].'
			<br> '.$donhang["SDT"];
    }
?>
<div class="row">
    <div class="row them">
        <h1>CẬP NHẬP THÔNG ĐƠN HÀNG</h1>
    </div>
    <div class="row formcontent">
		
				<form action="index.php?action=capnhatdonhang" method="post">
					<div class="row mb10">
						Mã đơn hàng<br>
						<input type="text" name="id" disabled value="NH-<?=$ID_DH;?>">
					</div>
					<div class="row mb10">
						Tên khách hàng<br>
						
						<input type="text" name="tennd" disabled value="<?=$donhang["Ten_DH"];?>">
					</div>
					
					<div class="row mb10">
						Tình trạng đơn hàng<br>
						0: Đơn mới
						1: Đang chờ
						2: Đang giao
						3: Hoàn tất<br>
						<input type="text" name="ttdh" value="<?=$TrangThai;?>">
					</div>
                   
					<div class="row mb10">
                    <input type="hidden" name="id" value="<?=$ID_DH?>">
						<input type="submit" name="capnhat" value="Cập nhật">
						<input type="reset" value="Nhập lại">
                        <a href="index.php?action=dsdh"><input type="button" value="Danh sách"></a>
					</div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao
                    ?>
				</form>
			</div>
</div>