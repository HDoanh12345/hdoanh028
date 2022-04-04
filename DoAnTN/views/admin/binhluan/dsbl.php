<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Danh sách bình luận</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
<div class="row">
            <!-- <div class="row frmtitle">
                <H1>DANH SÁCH BÌNH LUẬN</H1>
            </div> -->
            <div class="row frmcontent">
              

                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            
                            <th>STT</th>
                            <th>MÃ BÌNH LUẬN</th>
                            <th>MÃ NGƯỜI BÌNH LUẬN</th>
                            <th>NỘI DUNG</th>
                            <th>NGÀY BÌNH LUẬN</th>  
                            <th>Tên</th>     
                            <th></th>                    
                        </tr>
                        <?php
                            $STT = 1;
                            foreach ($danhsachbl as $binhluan) {
                                extract($binhluan);
                                $suabl="index.php?action=suabl&id=".$ID_BL;
                                $xoabl="index.php?action=xoabl&id=".$ID_BL;                               
                                echo '<tr>                                     
                                        <td>'.$STT.'</td>
                                        <td>'.$ID_BL.'</td>
                                        <td>'.$ID_ND.'</td>
                                        <td>'.$ND_BL.'</td>  
                                        <td>'.$Ngay_BL.'</td>   
                                        <td>'.$Ten_ND.'</td> ';     ?>                             
                                        <!-- <td><a onclick= "return confirm('Bạn có chắc chẵn muốn sửa không ? ') " href=<?php echo "'.$suabl.'"; ?>><input type="button" value="Sửa"></a>
                                         <a  href="'.$xoabl.'"><input type="button" value="Xóa"></a></td> -->
                                       <td> <a onclick="return confirm('Bạn có chắc chẵn muốn sửa không ? ') " href='index.php?action=suabl&id=<?php echo $binhluan['ID_BL']; ?>'><i class="fas fa-edit"></i></a>
                                       <a onclick="return confirm('Bạn có chắc chẵn muốn xóa không ? ') " href='index.php?action=xoabl&id=<?php echo $binhluan['ID_BL']; ?>'><i class="fas fa-trash-alt"></i></a>
                                    </td> 
                                    </tr>
                             
                 
                              <?php     
                            $STT ++;
                            }                        
                        ?>
                    </table>
                    <?php
        $sql = "select * from binhluan order by ID_BL desc ";
        $tongsp = mysqli_query($conn, $sql);
		$tong = mysqli_num_rows($tongsp);
		$tongsp1trang = 8;
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

			echo '<li><a href="index.php?action=dsbl&trang=' . $trang . '">' . $trang . '</a></li>';
		}
		echo    '</ul>';
    ?>
                </div>
                <div class="row mb10">
                    
                </div>
            </div>
        </div>