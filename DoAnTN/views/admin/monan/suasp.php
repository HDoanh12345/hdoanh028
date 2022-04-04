<?php
    if (is_array($sanpham)) {
        extract($sanpham);
    }

	$hinhpath="../upload/".$HinhAnh_SP;
		if (is_file($hinhpath)) {
			$HinhAnh_SP="<img src='".$hinhpath."' height='80' with='80'>";
		}else{
			$HinhAnh_SP='no photo';
		}
?>
<div class="row">
    <div class="row them">
        <h1>CẬP NHẬP THÔNG TIN MÓN ĂN</h1>
    </div>
	<div class="row formcontent">
				<form action="index.php?action=capnhatsp" method="post" enctype="multipart/form-data">
				<div class="row mb10">
				<select name="iddm">
                        <option value="0" selected>Tất cả</option>
							<?php
								foreach ($danhsachdm as $danhmuc) {
									extract($danhmuc);
									if ($ID_LSP==$ID_LSP) {
									echo '<option value="'.$ID_LSP.'" selected>'.$Ten_LSP.'</option>';
									}else echo '<option value="'.$ID_LSP.'">'.$Ten_LSP.'</option>';
									// $s="selected"; else $s="";
									// echo '<option value="'.$ID_LSP.'" '.$s.'>'.$Ten_LSP.'</option>';
								}
							?>
							
						</select>
					</div>
					
					<div class="row mb10">
						Tên món ăn<br>
						<input type="text" name="tensp" value="<?=$Ten_SP?>">
					</div>
					<div class="row mb10">
						Hình<br><?=$HinhAnh_SP?><br>
						<input type="file" name="hinh" >
					</div>
					<div class="row mb10">
						Giá<br>
						<input type="text" name="gia" value="<?=$Gia_SP?>">
					</div>
					<div class="row mb10">
						Mô tả<br>
						<!-- <textarea name="mota" id="" cols="30" rows="10" <?=$Mota?>></textarea> -->
						<input type="text" name="mota" value="<?=$Mota?>">
					</div>
					<div class="row mb10">
						<input type="hidden" name="id" value="<?=$ID_SP?>">
						<input type="submit" name="capnhat" value="Cập nhật">
						<input type="reset" value="Nhập lại">
                        <a href="index.php?action=dssp"><input type="button" value="Danh sách"></a>
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