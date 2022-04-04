<div class="row">
    <!-- <div class="row frmtitle">
                <H1>DANH SÁCH LOẠI MÓN ĂN</H1>
    
            </div> -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Danh sách hình banner</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <div class="row frmcontent">

        <div class="row mb10 frmdsloai">
            <table>
                <tr>

                    <th>Hình1</th>
                    <th>Hình2</th>
                    <th>Hình3</th>
                    <th>Hình4</th>

                    <th></th>
                </tr>
                <?php
                foreach ($web as $web1) {
                    extract($web1);
                    $suadm = "index.php?action=suadm&id=" . $id;
                    $xoadm = "index.php?action=xoadm&id=" . $id;
                    $hinhpath = "../upload/" . $Hinh_bn1;
                    if (is_file($hinhpath)) {
                        $Hinh = "<img src='" . $hinhpath . "' height='80' with='80'>";
                    } else {
                        $Hinh = 'no photo';
                    }
                    echo '<tr>
                                        
                                        <td>' . $Hinh_bn1 . '</td>
                                        <td>' . $Hinh_bn2 . '</td>
                                        <td>' . $Hinh_bn3 . '</td>
                                        <td>' . $Hinh_bn4 . '</td>
                                       
                                        <td><a href="' . $suadm . '"><i class="fas fa-edit"></i></a>
                                         <a  href="' . $xoadm . '"><i class="fas fa-trash-alt"></i></a></td>
                                    </tr>';
                }

                ?>


            </table>
        </div>
        <div class="row mb10">

            <!-- <a href="index.php?action=themdm"><input type="button" value="Nhập thêm"></a> -->
        </div>
    </div>
    <!-- giới thiệu -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thông tin giới thiệu</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <div class="row frmcontent">

        <div class="row mb10 frmdsloai">
            <table>
                <tr>

                    <th>ND</th>
                    <th>Hình</th>
                    <th>sdt</th>
                    <th>email</th>
                    <th>DC</th>
                    <th></th>
                </tr>
                <?php
                foreach ($web as $web1) {
                    extract($web1);
                    $suadm = "index.php?action=suadm&id=" . $id;
                    $xoadm = "index.php?action=xoadm&id=" . $id;
                    $hinhpath = "../upload/" . $web1['Hinh_gt'];
                    if (is_file($hinhpath)) {
                        $Hinh_gt = "<img src='" . $hinhpath . "' alt='' height='100px' width='100px'>";
                    } else {
                        $Hinh_gt = 'no photo';
                    }
                    // $hinh = $hinhpath . $row['HinhAnh_SP'];
                    echo '<tr>
                                        
                                        <td>' . $ND_gt . '</td>
                                        <td>' . $web1['Hinh_gt'] . '</td>
                                        <td>' . $SDT_nh . '</td>
                                        <td>' . $email_nh . '</td>
                                        <td>' . $DC_nh . '</td>
                                        <td><a href="' . $suadm . '"><i class="fas fa-edit"></i></a>
                                         <a  href="' . $xoadm . '"><i class="fas fa-trash-alt"></i></a></td>
                                    </tr>';
                }

                ?>


            </table>
        </div>
        <div class="row mb10">

            <!-- <a href="index.php?action=themdm"><input type="button" value="Nhập thêm"></a> -->
        </div>
    </div>
    <!-- Hình ảnh -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hình ảnh</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>
    <div class="row frmcontent">

        <div class="row mb10 frmdsloai">
            <!-- <table>
                <tr>

                    <th>Hình</th>

                 
                </tr> -->
            <?php
            foreach ($hinh as $hinh) {
                extract($hinh);
                $hinhpath = "../upload/" . $HinhAnh_SP;
                if (is_file($hinhpath)) {
                    $HinhAnh_SP = "<img src='" . $hinhpath . "' alt=''width='100px' height='100px'>";
                } else {
                    $HinhAnh_SP = 'no photo';
                }
                echo '' . $HinhAnh_SP . '';
                // echo '<tr>

                //     <td>' . $HinhAnh_SP . '</td>


                // </tr>';
            }

            ?>


            <!-- </table> -->
        </div>
        <div class="row mb10" >

            <!-- <a href="index.php?action=themdm"><input type="button" value="Nhập thêm"></a> -->
        </div>
    </div>
</div>