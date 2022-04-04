<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thêm mới loại món ăn</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
<div class="row">
    <!-- <div class="row them">
        <h1>THÊM MỚI DANH MỤC</h1>
    </div> -->
    <div class="row formcontent">
				<form action="index.php?action=themdm" method="post">
					<div class="row mb10">
						Mã danh mục<br>
						<input type="text" name="maloai" disabled>
					</div>
					<div class="row mb10">
						Tên danh mục<br>
						<input type="text" name="tenloai">
					</div>
					<div class="row mb10">
						<input type="submit" name="themmoi" value="Thêm mới">
						<input type="reset" value="Nhập lại">
                        <a href="index.php?action=dsdm"><input type="button" value="Danh sách"></a>
					</div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao
                    ?>
				</form>
			</div>
</div>