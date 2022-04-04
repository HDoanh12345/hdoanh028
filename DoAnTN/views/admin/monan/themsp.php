
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thêm mới món ăn</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
  <div class="row">
    <!-- <div class="row them">
        <h1>THÊM MỚI MÓN ĂN</h1>
    </div> -->
    <div class="row formcontent">
				<form action="index.php?action=themsp" method="post" enctype="multipart/form-data">
					<div class="row mb10">
						Danh mục<br>
						<select name="iddm">
							<?php
								foreach ($danhsachdm as $danhmuc) {
									extract($danhmuc);
									echo '<option value='.$ID_LSP.'>'.$Ten_LSP.'</option>';
								}
							?>
							
						</select>
					</div>
					<div class="row mb10">
						Tên món ăn<br>
						<input type="text" name="tensp">
					</div>
					<div class="row mb10">
						Hình<br>
						<input type="file" name="hinh" id="">
					</div>
					<div class="row mb10">
						Giá<br>
						<input type="text" name="gia">
					</div>
					<div class="row mb10">
						Mô tả<br>
						<input type="text" name="mota">
					</div>
					<div class="row mb10">
						<input type="submit" name="themmoi" value="Thêm mới">
						<input type="reset" value="Nhập lại">
                        <a href="index.php?action=dssp"><input type="button" value="Danh sách"></a>
					</div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
				</form>
			</div>
</div>