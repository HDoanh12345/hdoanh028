<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>giohang</title>
    <link rel="stylesheet" href="../../css/giohang.css">
</head>
<body>
    
<div class="row giohang" style="margin-top: 0px;">
    <div class="row1 header" >

        <H1>THÔNG TIN ĐƠN HÀNG</H1>
    </div>
    <div class="row1 frmcontent">
        <form action="index.php?action=chotdon" method="post">
            <div class="row1 mb10 frmdsloai">
                <table>
                    <?php
                    if (isset($_SESSION['Ten_ND'])) {
                        $tennd = $_SESSION['Ten_ND']['Ten_ND'];
                        $diachi = $_SESSION['Ten_ND']['DC_ND'];
                        $sdt = $_SESSION['Ten_ND']['Sdt_ND'];
                        $email = $_SESSION['Ten_ND']['Ten_TK'];
                    } else {
                        $tennd = "";
                        $diachi = "";
                        $sdt = "";
                        $email = "";
                    }
                    ?>
                    <tr>
                        <th>Người đặt</th>
                        <td><input required type="text" name="ten" value="<?= $tennd ?>"></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td><input required type="text" name="diachi" value="<?= $diachi ?>"></td>
                    </tr>
                    <tr>
                        <th>SĐT</th>
                        <td><input required type="text" name="sdt" value="<?= $sdt ?>"></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input required type="text" name="email" value="<?= $email ?>"></td>
                    </tr>


                </table>
            </div>
            <div class="row1 mb10 frmdsloai">
                <h2>Phương thức thanh toán</h2>
                <table>
                    <tr>
                    <td><input type="radio" value="1" name="pttt" checked>Thanh toán khi nhận hàng</td>
                    <td><input type="radio" value="2" name="pttt" checked>Chuyển khoản ngân hàng</td>
                    <td><input type="radio" value="3" name="pttt" checked>Thanh toán online</td>
                    </tr>
                </table>
            </div>
            <div class="row1 mb10 frmdsloai">

                <?php
                giohang(0);
                ?>

            </div>
            <div class="row1 mb10">
                <input type="submit" name="dongydat" value="ĐỒNG Ý ĐẶT MÓN">
            </div>
        </form>
    </div>
</div>
</body>
</html>