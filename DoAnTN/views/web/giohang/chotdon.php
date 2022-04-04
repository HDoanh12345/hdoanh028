<div class="row giohang">
    <div class="row1 header">

        <H1>CÁM ƠN QUÝ KHÁCH ĐÃ ĐẶT HÀNG</H1>
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
        </div>
        <div class="row1 mb10 frmdsloai">
            <table>
               
                <?php
                chitiet_donhang1($ctgiohang);
                ?>
            </table>
        </div>
    </div>
</div>