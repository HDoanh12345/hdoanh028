<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>giohang</title>
    <link rel="stylesheet" href="../../../css/giohang.css">
</head>

<body>


    <div class="row giohang" style="margin-top: 0px;">
        <div class="row1 header" style="margin-top: 0px;font-family: 'STIX Two Text', serif;">
            <H1>GIỎ HÀNG</H1>
        </div>
        <div class="row1 frmcontent">
            <div class="row1 mb10 frmdsloai">

                <?php
                $cham = ".000";
                global $hinhpath;
                $tong = 0;
                $i = 0;
                $del = 1;
                if ($del == 1) {
                    $xoasp_th = '<th>THAO TÁC</th> ';

                    $xoa_td = '<td></td>';
                } else {
                    $xoasp_th = '';

                    $xoa_td = '';
                }
                echo ' 
                            <table>
                                        <tr>
                                                                    
                                            <th>HÌNH</th>
                                            <th>SẢN PHẨM</th>                           
                                            <th>ĐƠN GIÁ</th> 
                                            <th>SỐ LƯỢNG</th> 
                                            <th>THÀNH TIỀN</th>  
                                                   ' . $xoasp_th . '               
                                        </tr>';
                foreach ($_SESSION['giohang'] as $giohang) {
                    $hinh = $hinhpath . $giohang[2];
                    $tt = $giohang[3] * $giohang[4];
                    $tong += $tt;
                    if ($del == 1) {

                        $xoasp_td = '<td><a href="home.php?action=xoa&idgiohang=' . $i . '"><img src="../../../img/xoa.png" alt="" width="25px" height="25px"></a></td>';
                    } else {

                        $xoasp_td = '';
                    }
                    echo '
                                       
                                        <tr>
                                        
                                        <td><img src="../../../' . $hinh . '" alt=""width="100px" height="100px"></td>
                                        <td>' . $giohang[1] . '</td>
                                        <td>' . $giohang[3] . '</td>
                                        <td>' . $giohang[4] . '</td>  
                                        <td>' . $tt . '</td>                                                                          
                                        ' . $xoasp_td . '
                                    </tr>';
                    $i += 1;
                }
                echo '<tr>
                                    
                                    <td colspan="4">Tổng đơn hàng</td>
                                    <td>' . $tong.  '</td>
                                    ' . $xoa_td . '
                                </tr>
                                </table>';
                ?>

            </div>
            <div class="row1 mb10">
                <a  style="margin: 10px;" href="home.php?action=datmon"><input type="button" value="THANH TOÁN">
                    <a href="home.php"><input type="button" value="ĐẶT THÊM"></a>
                    <a  style="margin: 10px;" href="home.php?action=xoa"><input type="button" value="XÓA TẤT CẢ"></a>

            </div>
        </div>
    </div>

</body>

</html>