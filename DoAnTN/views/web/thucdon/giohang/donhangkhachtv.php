<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>giohang</title>
    <link rel="stylesheet" href="../../../css/giohang.css">
</head>
<div class="row giohang" style="margin-bottom: 150px;">
    <div class="row1 header" style="margin-top: 150px;">

        <H1>ĐƠN HÀNG CỦA BẠN</H1>
    </div>
       
        <div class="row1 mb10 frmdsloai"style="height: 280px;">
        <table>
                <tr>                                           
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT</th>                           
                    <th>SỐ LƯỢNG</th> 
                    <th>TỔNG ĐƠN HÀNG</th> 
                    <th>TRẠNG THÁI</th>                                     
                </tr>
    
       <?php
            if (is_array($dsdh)) {
                foreach($dsdh as $donhang){
                    extract($donhang);
                    $ttdh=get_ttdh($donhang['TrangThai']);
                    $slsp=loadall_giohang_dem($donhang['ID_DH']);
                    echo '<tr>  
                    <td>NH-'.$donhang['ID_DH'].'</td>
                    <td>' . $donhang['Ngaydat'] . '</td>
                    <td>' . $slsp. '</td>
                    <td>' . $donhang['Tong_DH'] . '</td>  
                    <td>' . $ttdh . '</td>                                                                          
                </tr>';
                }
            }
       ?>
        
        </table>
    </div>
</div>    
</body>
</html>