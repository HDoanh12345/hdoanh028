<section class="banner" style="max-width:1200vw;"><a href="#dau"></a>
    <div class="image" style="transition: all 0.4s ease;">
   <img id="img" onclick="changeImage()" src="../../img/banner1.jpg" alt="" srcset="" width="1300vw" height="640px">
    </div>
    <script>
        var index =1;
        changeImage = function(){
            <?php
                foreach ($allw as $hinh) {
                    extract($hinh);
                   
                    echo ' var imgs = ["'.$Hinh_bn1.'","'.$Hinh_bn2.'","'.$Hinh_bn3.'","'.$Hinh_bn4.'"];';
                }
                ?>
            // var imgs = ["img/bn1.jpg","img/bn2.jpg","img/bn3.jpg","img/bn4.jpg"];
            document.getElementById('img').src = imgs[index];
            index++;
            if (index == 4) {
                index =0;
            }
        }
        setInterval(changeImage,1500)
        
    </script>
    <!-- <div class="banner-content">
 
        <h2>SaPaHome</h2>
        <p>Xin chào quý khách</p>
    </div> -->
</section> <h1 id="gt"></h1>
<section class="about section-pading">
    <div class="container">
        <div class="row">
            <div class="title">
                <h2 data-title:="Câu chuyện">Giới thiệu</h2>
            </div>
        </div>
        <div class="row">
           
            <div class="about-item">
                <h2>CHÀO MỪNG ĐẾN VỚI CHÚNG TÔI</h2>
                <p>Nằm ở phía Tây Bắc của tổ quốc, Sapa nổi tiếng với những địa điểm du lịch hàng đầu.
                     Bên cạnh đó với sự đa dạng và độc đáo của nền ẩm thực khiến du khách không thể nào quên khi du lịch Sapa.
                      Nhà hàng Wind SAPA là một trong những địa điểm ăn uống hấp dẫn mà bạn không nên bỏ lỡ khi đến Sapa.
                     
                       Hãy cùng nhau khám phá xem những món ngon Sapa độc đáo tại đây nhé!</p<br>

<p>Nằm ở trung tâm thị trấn với không gian rộng, ấm cúng với kiến trúc độc đáo mang đậm bản sắc vùng cao.
 Nhà hàng còn là nơi hội tụ các món ăn dân tộc nổi tiếng như Thắng cố, lẩu Cá hồi, Cá tầm, Gà đồi, Lợn bản, Cơm lam, Thịt hun khói... được chế biến một cách tinh tế với nhiều gia vị thật lạ thật độc đáo chỉ có ở vùng cao.</p>
            </div>
            <div class="about-item">
            <?php
                foreach ($allw as $hinh) {
                    extract($hinh);
                   
                    echo '<img src="'.$Hinh_gt.'" alt="" width="500px" height="400px" style="border-radius: 10px;">';
                }
                ?>
                <!-- <img src="img/b.jpg" alt="" width="500px" height="400px" style="border-radius: 10px;"> -->
            </div>
        </div>
    </div>
</section>
<section class="menu section-pading"><h1 id="td"></h1>
<iframe src="thucdon/home.php" width="100%" height="560px" frameborder="0"></iframe>
<h1 id="td"></h1>
   <!-- <div class="container">
        <div class="row">
            <div class="title_td">
                <h2 data-title:="Đặt ngay">Thực đơn</h2>
            </div>
        </div>
       
        <div class="row">
            <div class="menu-title"> -->

                <?php
                // foreach ($dsdm as $danhmuc) {
                //     extract($danhmuc);
                //     $linkdm = "index.php?action=sanpham&iddm=" . $ID_LSP;
                //     echo '<a href="' . $linkdm . '"><button class="menu-button" >' . $Ten_LSP . '</button></a>';
                // }
                ?>
            <!-- </div>

        </div>

        <div class="dssp row justify-content" style="font-family: 'Dancing Script', cursive;">  -->
            <?php
            // foreach ($sptrang as $row) {
           
            //     $hinh =  $hinhpath . $row['HinhAnh_SP'];
            //     echo '<div class="foot-items">
            //             <div class="foot-item">
            //             <a href="index.php?action=sanphamct&id='.$row['ID_SP'].'"><img src="' . $hinh . '" alt=""width="100px" height="100px"></a>
            //                 <a href="index.php?action=sanphamct&id='.$row['ID_SP'].'"><p>' . $row['Ten_SP'] . '</p></a>
            //             </div>
            //             <div class="foot-price">
            //                 <p>' . $row['Gia_SP'] . ' đ</p>                                          
            //             <form action="index.php?action=themgiohang" method="post">
            //                 <input type="hidden" name="id" value="' . $row['ID_SP'] . '">
            //                 <input type="hidden" name="ten" value="' . $row['Ten_SP'] . '">
            //                 <input type="hidden" name="hinh" value="' . $row['HinhAnh_SP'] . '">
            //                 <input type="hidden" name="gia" value="' . $row['Gia_SP'] . '">
                           
            //                 <input class="datmon"  type="submit" value="ĐẶT MÓN" name="themgiohang">
            //             </form>  </div>
            //         </div>                       
            //         ';
            // }
            ?>
        <!-- </div>        -->
                <?php
                    // $sql = "select * from sp";
                    // $tongsp = mysqli_query($conn, $sql);
                    // $tong = mysqli_num_rows($tongsp);
                    // $tongsp1trang = 6;
                    // if (!isset($_GET['trang'])) {
                    //     $trang = 1;
                    // } else {
                    //     $trang = $_GET['trang'];
                    // }
                    // $trangbatdau = ($trang - 1) * $tongsp1trang;
                    // echo    '<div style="clear:both;"></div>
                    //         <ul class="ds_trang" style="margin-bottom: 10px">';
                    // $tongsotrang = ceil($tong / $tongsp1trang);
                    // for ($trang = 1; $trang <= $tongsotrang; $trang++) {
                    //     echo '<li><a href="index.php?trang=' . $trang . '">' . $trang . '</a></li>';
                    // }
                    // echo    '</ul>';
                ?>           
   <!-- </div> -->
</section>
<section class="phanhoi section-pading"><h1 id="bl"></h1>
    <div class="container">
        <div class="row">
            <div class="title">
                <h2 data-title:="Câu chuyện">Phản hồi</h2>
            </div>

        </div>
        <div class=""> <h1 id="bl"></h1>
            <iframe src="binhluan.php" width="100%" height="450px" frameborder="0"></iframe>

        </div>
    </div>
</section>