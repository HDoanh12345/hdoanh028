<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Danh sách đơn hàng</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
<div class="row">
            <!-- <div class="row frmtitle">
                <H1>DANH SÁCH ĐƠN HÀNG</H1>
            </div> -->

            <div class="row frmcontent">
            <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>   
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            
                            <th>STT</th>
                            <th>MÃ ĐƠN HÀNG</th>
                            <th>KHÁCH HÀNG</th>
                            <th>SỐ LƯỢNG</th>
                            <th>GIÁ TRỊ ĐƠN</th>
                            <th>TÌNH TRẠNG</th>
                            <th>NGÀY ĐẶT</th>
                            
                            <th></th>
                        </tr>
                        <?php
                            $STT = 1;
                            foreach ($dsdh as $donhang) {
                                extract($donhang);
                                $suadh="index.php?action=suadh&id=".$ID_DH;
                                $xoadh="index.php?action=xoadh&id=".$ID_DH;
                                $ttindh="index.php?action=ctdh&id=".$ID_DH;
                                $kh=$donhang["Ten_DH"].'
                                
                                <br> '.$donhang["email_DH"].'
                                <br> '.$donhang["DC"].'
                                <br> '.$donhang["SDT"];
                                $ttdh=get_ttdh($donhang['TrangThai']);
                                $slsp=loadall_giohang_dem($donhang['ID_DH']);
                                echo '<tr>
                                        
                                        <td>'.$STT.'</td>                                    
                                        <td>NH-'.$donhang['ID_DH'].'</td>
                                        <td>' . $kh . '</td>
                                        <td>' . $slsp. '</td>
                                        <td>' . $donhang['Tong_DH'] . '</td>  
                                        <td>' . $ttdh . '</td>                                                                          
                                        <td>' . $donhang['Ngaydat'] . '</td> 
                                        <td>
                                         <a  href="'.$ttindh.'"><i class="fas fa-eye"></i></a>
                                  ';?>
                                      <a onclick="return confirm('Bạn có chắc chẵn muốn sửa không ? ') " href='index.php?action=suadh&id=<?php echo $donhang['ID_DH']; ?>'><i class="fas fa-edit"></i></a>
                                        <a onclick="return confirm('Bạn có chắc chẵn muốn xóa không ? ') " href='index.php?action=xoadh&id=<?php echo $donhang['ID_DH']; ?>'><i class="fas fa-trash-alt"></i></a>
                                        </tr><?php
                            $STT ++;
                            }
                        
                        ?>
                        
                        
                    </table>
                    <?php
        $sql = "select * from donhang order by ID_DH desc ";
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

			echo '<li><a href="index.php?action=dsdh&trang=' . $trang . '">' . $trang . '</a></li>';
		}
		echo    '</ul>';
    ?>
                </div>
                <div class="row mb10">
                    
                </div>
            </div>
        </div>