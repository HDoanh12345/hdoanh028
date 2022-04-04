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
                $.get("views/phantrang2.php", {
                    trang: toancuc
                }, function(data) {
                    $(".dssp").append(data);
                });
            });
        });
    </script>
</head>

<body>

    <section class="menu section-pading" style="background-color:#E0E0E0; ">
        <div class="container">
            <div class="row" style=" height:480px">

                <?php
                extract($motsp);
                $hinh =  $hinhpath . $HinhAnh_SP;
                ?>
                <?php
                echo '   <div class="title_td">
                <h2 data-title:="Đặt ngay">' . $Ten_SP . '</h2>
            </div>
                 <div class="spct" style="margin: 20px 80px;">
                    <div class="hinh">
                        <img src="../../../' . $hinh . '" width="300px" height="300px">
                    </div>
                </div>
                <div class="ct" style="margin: 20px 50px;">
                    <div class="ten">
                    <b style="line-height: 40px; font-size:25px;font-family: "STIX Two Text", serif;color: var(--main-color);">' . $Ten_SP . '</b>
                        
                    </div>
                    <div class="gia">
                    <a style="line-height: 40px;font-family: "STIX Two Text", serif;">Giá: ' . $Gia_SP . ' VND</a>
                        
                    </div>
                    <div class="mota" style="width:500px;font-family: "STIX Two Text", serif;">
                        ' . $Mota . '
                    </div>
                
                <form action="home.php?action=themgiohang" method="post">
                            <input type="hidden" name="id" value="' . $ID_SP . '">
                            <input type="hidden" name="ten" value="' . $Ten_SP . '">
                            <input type="hidden" name="hinh" value="' . $HinhAnh_SP . '">
                            <input type="hidden" name="gia" value="' . $Gia_SP . '">
                            <input style="border-radius: 5px; border: 1px solid #ccc;background: #f1f1f1; width="3px";" type="number" name="sl" id="" min="1" max="10" value="'.$SL.'">
                            <input class="datmon"  type="submit" value="ĐẶT MÓN" name="themgiohang">
                        </form>
                        
                </div>';
                ?>
                <!-- <iframe src="binhluanct.php" width="400px" height="200px" frameborder="0"></iframe> -->

            </div>
        </div>
    </section>


</body>

</html>