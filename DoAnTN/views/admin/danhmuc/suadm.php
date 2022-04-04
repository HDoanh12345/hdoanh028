<?php
    if (is_array($danhmuc)) {
        extract($danhmuc);
    }
?>
<div class="row">
    <div class="row them">
        <h1>CẬP NHẬP DANH MỤC MÓN ĂN</h1>
    </div>
    <div class="row formcontent">
				<form action="index.php?action=capnhatdm" method="post">
					<div class="row mb10">
						Mã danh mục<br>
						<input type="text" name="maloai" disabled>
					</div>
					<div class="row mb10">
						Tên danh mục<br>
						<input type="text" name="tenloai" value="<?php if(isset($Ten_LSP)&&($Ten_LSP!="")) echo $Ten_LSP;?>">
					</div>
					<div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($ID_LSP)&&($ID_LSP > 0)) echo $ID_LSP;?>">
						<input type="submit" name="capnhat" value="Cập nhật">
						<input type="reset" value="Nhập lại">
                        <a href="index.php?action=dsdm"><input type="button" value="Danh sách"></a>
					</div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao
                    ?>
				</form>
			</div>
</div>