<div class="row giohang" style="margin-bottom: 300px;">
    <div class="row1 header" style="margin-top: 130px;">

        <H1>ĐƠN HÀNG CỦA BẠN</H1 >
    </div>
       
        <div class="row1 mb10 frmdsloai"style="height: 280px; ">
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