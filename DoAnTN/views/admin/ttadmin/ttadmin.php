<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Danh sách người quản trị</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
<div class="row" >
            <!-- <div class="row frmtitle">
                <H1>DANH SÁCH KHÁCH HÀNG</H1>
            </div> -->
            <div class="row frmcontent">
              

                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            
                            <th>STT</th>
                            <th>MÃ ADMIN</th>
                            <th>TÊN ADMIN</th>
                            <th>MẬT KHẨU</th>
                            <th>QUYỀN TRUY CẬP</th>
                            <th>SĐT</th>
                            <th>ĐỊA CHỈ</th>
                            <th>EMAIL</th>
                            <th></th>
                        </tr>
                        <?php
                            $STT = 1;
                            foreach ($allad as $nguoidung) {
                                extract($nguoidung);
                                $suaad="index.php?action=suaad&id=".$ID_ND;
                                $xoaad="index.php?action=xoaad&id=".$ID_ND;
                                

                                echo '<tr>
                                        
                                        <td>'.$STT.'</td>
                                        <td>'.$ID_ND.'</td>
                                        <td>'.$Ten_ND.'</td>
                                        <td>'.$Pass.'</td>
                                        <td>'.$Level.'</td>
                                        <td>'.$Sdt_ND.'</td>
                                        <td>'.$DC_ND.'</td>
                                        <td>'.$Ten_TK.'</td>
                                        <td><a href="'.$suaad.'"><i class="fas fa-edit"></i></a>
                                         <a  href="'.$xoaad.'"><i class="fas fa-trash-alt"></i></a></td>
                                    </tr>';
                            $STT ++;
                            }
                        
                        ?>
                        
                        
                    </table>
                </div>
                <div  class="row mb10">
                    
                    <!-- <a href="index.php?action=themnd"><input type="button" value="Nhập thêm"></a> -->
                </div>
            </div>
        </div>