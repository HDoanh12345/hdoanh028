<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Danh sách khách hàng</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
<div class="row" >
            <!-- <div class="row frmtitle">
                <H1>DANH SÁCH KHÁCH HÀNG</H1>
            </div> -->
            <div class="row frmcontent">
              

                <div class="row mb10 frmdsloai">
                <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>   
                    <table>
                        <tr>
                            
                            <th>STT</th>
                            <th>MÃ KHÁCH HÀNG</th>
                            <th>TÊN KHÁCH HÀNG</th>
                            <th>MẬT KHẨU</th>
                            <th>QUYỀN TRUY CẬP</th>
                            <th>SĐT</th>
                            <th>ĐỊA CHỈ</th>
                            <th>EMAIL</th>
                            <th></th>
                        </tr>
                        <?php
                            $STT = 1;
                            foreach ($dsnd as $nguoidung) {
                                extract($nguoidung);  
                                $suatk="index.php?action=suatk&id=".$ID_ND;
                                $xoatk="index.php?action=xoatk&id=".$ID_ND;
                                
                              
                                echo '<tr>
                                        
                                        <td>'.$STT.'</td>
                                        <td>'.$ID_ND.'</td>
                                        <td>'.$Ten_ND.'</td>
                                        <td>'.$Pass.'</td>
                                        <td>'.$Level.'</td>
                                        <td>'.$Sdt_ND.'</td>
                                        <td>'.$DC_ND.'</td>
                                        <td>'.$Ten_TK.'</td>'; ?>
                                        <!-- <td><a href="'.$suatk.'"><input type="button" value="Sửa"></a>
                                         <a  href="'.$xoatk.'"><input type="button" value="Xóa"></a></td>
                                    </tr>'; -->
                                    <td> <a onclick="return confirm('Bạn có chắc chẵn muốn sửa không ? ') " href='index.php?action=suatk&id=<?php echo $nguoidung['ID_ND']; ?>'><i class="fas fa-edit"></i></a>
                                       <a onclick="return confirm('Bạn có chắc chẵn muốn xóa không ? ') " href='index.php?action=xoatk&id=<?php echo $nguoidung['ID_ND']; ?>'><i class="fas fa-trash-alt"></i></a>
                                    </td> 
                                    </tr>
                                    <?php
                            $STT ++;
                            }
                        
                        ?>
                        
                        
                    </table>
                    <?php

$sql = "select * from nguoidung where 1";

$sql .= " order by ID_ND desc ";
$tongsp = mysqli_query($conn, $sql);
$tong = mysqli_num_rows($tongsp);
$tongsp1trang = 6;
if (!isset($_GET['trang'])) {
    $trang = 1;
} else {
    $trang = $_GET['trang'];
}
$trangbatdau = ($trang - 1) * $tongsp1trang;
echo    '<div style="clear:both;"></div>
                    <ul class="ds_trang" style="margin-bottom: 10px">';
$tongsotrang = ceil($tong / $tongsp1trang);
for ($trang = 1; $trang <= $tongsotrang; $trang++) {

    echo '<li><a href="index.php?action=dskh&trang=' . $trang . '">' . $trang . '</a></li>';
}
echo    '</ul>';
?>
                </div>
                <div class="row mb10">
                    
                    <!-- <a href="index.php?action=themnd"><input type="button" value="Nhập thêm"></a> -->
                </div>
            </div>
        </div>