<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/style.css">
	<link rel="stylesheet" href="../../../css/giohang.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="../jquery-3.6.0.min.js"></script>
	<script>
		var toancuc = 0;
		$(document).ready(function() {
			$("#xemthem").click(function() {
				toancuc = toancuc + 1;
				$.get("phantrang2.php", {
					trang: toancuc
				}, function(data) {
					$(".dssp").append(data);
				});
			});
		});
	</script>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="title_td">
                <h2 data-title:="Đặt ngay">Thực đơn</h2>
            </div>
        </div>
        <div class="row">
            <div class="menu-title">
            <form id="tk" style=" margin-top:-20px;" action="home.php?action=sanpham" method="post"><i class="fa fa-search"></i>
								<input style="border-radius: 10px; border: 1px solid #ccc;background: #f1f1f1;" type="text" placeholder=" Search..." name="kyw">
								<input hidden type="submit" value="Search" name="timkiem">

							</form>
                <?php
                foreach ($dsdm as $danhmuc) {
                    extract($danhmuc);
                    $linkdm = "home.php?action=sanpham&iddm=" . $ID_LSP;
                    echo '<a href="' . $linkdm . '"><button class="menu-button" >' . $Ten_LSP . '</button></a>';
                }
                ?>
            </div>

        </div>

        <div class="dssp row justify-content" style="font-family: 'Dancing Script', cursive;">
        
            <?php
           foreach ($sptrang as $row) {
           
                $hinh =  $hinhpath . $row['HinhAnh_SP'];
                echo '<div class="foot-items">
                        <div class="foot-item">
                        <a href="home.php?action=sanphamct&id='.$row['ID_SP'].'"><img src="../../../' . $hinh . '" alt=""width="100px" height="100px"></a>
                            <a href="home.php?action=sanphamct&id='.$row['ID_SP'].'"><p>' . $row['Ten_SP'] . '</p></a>
                            
                        </div>
                        <div class="foot-price">
                            <p style ="font-family: Dancing Script, cursive;">' . $row['Gia_SP'] . ' đ</p>   
                            
                        <form action="home.php?action=themgiohang" method="post">
                            <input type="hidden" name="id" value="' . $row['ID_SP'] . '">
                            <input type="hidden" name="ten" value="' . $row['Ten_SP'] . '">
                            <input type="hidden" name="hinh" value="' . $row['HinhAnh_SP'] . '">
                            <input type="hidden" name="gia" value="' . $row['Gia_SP'] . '">
                            <input style="border-radius: 5px; border: 1px solid #ccc;background: #f1f1f1; width="3px";" type="number" name="sl" id="" min="1" max="10" value="'.$row['SL'].'">
                            <input class="datmon"  type="submit" value="ĐẶT MÓN" name="themgiohang">
                        </form>  </div>
                    </div>                       
                    ';
            
            }
            ?>
        </div>        

                <?php
                    $sql = "select * from sp";
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
                        echo '<li><a href="home.php?trang=' . $trang . '">' . $trang . '</a></li>';
                    }
                    echo    '</ul>';
                ?>           
    </div>
</body>
</html>