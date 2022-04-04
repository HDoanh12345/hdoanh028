<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thêm người quản trị</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
<div class="row">
    <!-- <div class="row them">
        <h1>THÊM MỚI KHÁCH HÀNG</h1>
    </div> -->
    <div class="row formcontent">
				<form action="index.php?action=themadmin" method="post">
					<div class="row mb10">
						Mã admin<br>
						<input type="text" name="id" disabled>
					</div>
					<div class="row mb10">
						Tên admin<br>
						<input type="text" name="tennd">
					</div>
                    <div class="row mb10">
						Pass<br>
						<input type="text" name="pass">
					</div>
                    <div class="row mb10">
						Quyền khách hàng<br>
						<input type="text" name="level" value="1">
					</div>
                    <div class="row mb10">
						SĐT<br>
						<input type="text" name="sdt">
					</div>
                    <div class="row mb10">
						Địa chỉ<br>
						<input type="text" name="dc">
					</div>
                    <div class="row mb10">
						Email<br>
						<input type="text" name="email">
					</div>
					<div class="row mb10">
						<input type="submit" name="themmoi" value="Thêm mới">
						<input type="reset" value="Nhập lại">
                        <a href="index.php?action=ttadmin"><input type="button" value="Danh sách"></a>
					</div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao
                    ?>
				</form>
			</div>
</div>