<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Danh loại món ăn</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
<div class="row">
            <!-- <div class="row frmtitle">
                <H1>DANH SÁCH LOẠI MÓN ĂN</H1>
    
            </div> -->
            <div class="row frmcontent">

                <div class="row mb10 frmdsloai">
                <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>   
                    <table> 
                        <tr>
                          
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th>THAO TÁC</th>
                        </tr>
                        <?php
                            foreach ($danhsachdm as $danhmuc) {
                                extract($danhmuc);
                                $suadm="index.php?action=suadm&id=".$ID_LSP;
                                $xoadm="index.php?action=xoadm&id=".$ID_LSP;

                                echo '<tr>
                                        
                                        <td>'.$ID_LSP.'</td>
                                        <td>'.$Ten_LSP.'</td>'; ?>
                                    <!-- //     <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a>
                                    //      <a  href="'.$xoadm.'"><input type="button" value="Xóa"></a></td>
                                    // </tr> -->
                                    <td> <a onclick="return confirm('Bạn có chắc chẵn muốn sửa không ? ') " href='index.php?action=suadm&id=<?php echo $danhmuc['ID_LSP']; ?>'><i class="fas fa-edit"></i></a>
                                       <a onclick="return confirm('Bạn có chắc chẵn muốn xóa không ? ') " href='index.php?action=xoadm&id=<?php echo $danhmuc['ID_LSP']; ?>'><i class="fas fa-trash-alt"></i></a>
                                    </td> 
                                    </tr>
                                    <?php
                            }
                        
                        ?>
                        
                        
                    </table>
                </div>
                <div class="row mb10">
                    
                    <!-- <a href="index.php?action=themdm"><input type="button" value="Nhập thêm"></a> -->
                </div>
            </div>
        </div>