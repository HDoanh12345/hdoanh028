<div class="row giohang">
    <!-- <div class="row1 header">

        <H1>Thông tin đơn hàng</H1>
    </div>
    <?php
    if (isset($donhang) && (is_array($donhang))) {
        extract($donhang);
    }
    ?>
    <div class="row1 frmcontent">
        <div class="row">
           <ul style="float: left;">
            <li>Mã đơn hàng: NH-<?= $donhang['ID_DH']; ?></li>
            <li>Ngày đặt: <?= $donhang['Ngaydat']; ?></li>
            <li>Tổng đơn: <?= $donhang['Tong_DH']; ?></li>
            <li>Phương thức thanh toán: <?= $donhang['PTTT']; ?></li>
        </ul>
        </div>
        <div class="row1 mb10 frmdsloai">
            <table>
                <tr>
                    <th>Người đặt</th>
                    <td><?= $donhang['Ten_DH'] ?></td>
                </tr>
                <tr>
                    <th>Địa chỉ</th>
                    <td><?= $donhang['DC'] ?></td>
                </tr>
                <tr>
                    <th>SĐT</th>
                    <td><?= $donhang['SDT'] ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?= $donhang['email_DH'] ?></td>
                </tr>
            </table>
        </div> -->
    <div class="row1 mb10 frmdsloai">
        <table>
            <tr>

                <th>TÊN MÓN ĂN</th>
                <th>SỐ LƯỢNG</th>
                <th>ĐƠN GIÁ</th>
                <th>THÀNH TIỀN</th>


            </tr>
            <?php
            if (is_array($motdh)) {
                extract($motdh);
            }


            // $suadh="index.php?action=suadh&id=".$ID_DH;
            // $xoadh="index.php?action=xoadh&id=".$ID_DH;
            // $ttindh="index.php?action=ttindh&id=".$ID_DH;
            // $kh=$donhang["Ten_DH"].'

            // <br> '.$donhang["email_DH"].'
            // <br> '.$donhang["DC"].'
            // <br> '.$donhang["SDT"];
            // $ttdh=get_ttdh($donhang['TrangThai']);
            // $slsp=loadall_giohang_dem($donhang['ID_DH']);
            echo '<tr>                                   
                                        <td>' . $Ten_SP . '</td>
                                        <td>' . $SL . '</td>
                                        <td>' . $gia . '</td>
                                        <td>' . $TT . '</td>
                                       
                                    </tr>';


            ?>


        </table>


    </div>
</div>
</div>
<!-- <?php
        // if (is_array($donhang)) {
        //     extract($donhang);
        // 	$ttdh=get_ttdh($donhang['TrangThai']);
        // 	$kh=$donhang["Ten_DH"].'			
        // 		<br> '.$donhang["email_DH"].'
        // 		<br> '.$donhang["DC"].'
        // 		<br> '.$donhang["SDT"];
        // }
        ?>
<div class="row">
    <div class="row them">
        <h1>CẬP NHẬP THÔNG ĐƠN HÀNG</h1>
    </div>
    <div class="row formcontent">
		
				<form action="index.php?action=capnhatdonhang" method="post">
					<div class="row mb10">
						Mã đơn hàng<br>
						<input type="text" name="id" disabled value="NH-<?= $ID_DH; ?>">
					</div>
					<div class="row mb10">
						Tên khách hàng<br>
						
						<input type="text" name="tennd" disabled value="<?= $donhang["Ten_DH"]; ?>">
					</div>
					
					<div class="row mb10">
						Tình trạng đơn hàng<br>
						0: Đơn mới
						1: Đang chờ
						2: Đang giao
						3: Hoàn tất<br>
						<input type="text" name="ttdh" value="<?= $TrangThai; ?>">
					</div>
                   
					<div class="row mb10">
                    <input type="hidden" name="id" value="<?= $ID_DH ?>">
						<input type="submit" name="capnhat" value="Cập nhật">
						<input type="reset" value="Nhập lại">
                        <a href="index.php?action=dsdh"><input type="button" value="Danh sách"></a>
					</div>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao
                    ?>
				</form>
			</div>
</div> -->