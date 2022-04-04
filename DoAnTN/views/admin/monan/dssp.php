<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Danh sách món ăn</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
<div class="row">
            <!-- <div class="row frmtitle">
                <H1>DANH SÁCH MÓN ĂN</H1>
            </div> -->
            <div class="row frmcontent">
                
                <form action="index.php?action=dssp" method="POST">
                    <input type="text" name="kyw" style="border-radius: 5px;">
                    <select name="iddm"  style="border-radius: 5px;">
                        <option value="0" selected >Tất cả</option>
							<?php
								foreach ($danhsachdm as $danhmuc) {
									extract($danhmuc);
									echo '<option value="'.$ID_LSP.'" >'.$Ten_LSP.'</option>';
								}
							?>
							<input type="submit" name="dsOK" value="OK"   style="border-radius: 5px; margin: 5px ">
						</select>
                </form>
                <div class="row mb10">
                   
                   <!-- <a href="index.php?action=themsp"><input type="button" value="Nhập thêm"></a> -->
               </div>
                <div class="row mb10 frmdsloai">
                <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>   
                    <table>
                        <tr>
                            
                            <th>STT</th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN MÓN ĂN</th>
                            <th>HÌNH ẢNH</th>
                            <th>GIÁ</th>
                            <th>MÔ TẢ</th>
                            <th></th>
                        </tr>
                        <?php
                            $STT = 1;
                            foreach ($danhsachsp as $sanpham) {     
                                extract($sanpham);
                                $suasp="index.php?action=suasp&id=".$ID_SP;
                                $xoasp="index.php?action=xoasp&id=".$ID_SP;
                                $hinhpath="../../upload/".$HinhAnh_SP;
                                if (is_file($hinhpath)) {
                                    $HinhAnh_SP="<img src='".$hinhpath."' alt=''width='100px' height='100px'>";
                                }else{
                                    $HinhAnh_SP='no photo';
                                }

                                echo '<tr>
                                        
                                        <td>'.$STT.'</td>
                                        <td>'.$ID_LSP.'</td>
                                        <td>'.$Ten_SP.'</td>
                                        <td>'.$HinhAnh_SP.'</td>
                                        <td>'.$Gia_SP.'</td>
                                        <td>'.$Mota.'</td> '; ?>
                                        <!-- <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                                         <a  href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                                    </tr>'; -->
                                    <td> <a onclick="return confirm('Bạn có chắc chẵn muốn sửa không ? ') " href='index.php?action=suasp&id=<?php echo $sanpham['ID_SP']; ?>'><i class="fas fa-edit"></i></a>
                                       <a onclick="return confirm('Bạn có chắc chẵn muốn xóa không ? ') " href='index.php?action=xoasp&id=<?php echo $sanpham['ID_SP']; ?>'><i class="fas fa-trash-alt"></i></a>
                                    </td> 
                                    </tr>
                                    <?php
                            $STT ++;
                            }
                        
                        ?>
                        
                        
                    </table>
                    <?php

		$sql = "select * from sp where 1";
		// if ($kyw != "") {
		// 	$sql .= " and Ten_SP like '%" . $kyw . "%'";
		// }
		// if ($iddm > 0) {
		// 	$sql .= " and ID_LSP = '" . $iddm . "'";
		// }
		$sql .= " order by ID_SP desc ";
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

			echo '<li><a href="index.php?action=dssp&trang=' . $trang . '">' . $trang . '</a></li>';
		}
		echo    '</ul>';
		?>
                </div>
              
            </div>
        </div>