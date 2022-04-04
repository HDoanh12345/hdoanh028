<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>giohang</title>
    <link rel="stylesheet" href="../../css/giohang.css">
</head>
<body>
    

<div class="row giohang" style="margin-bottom: 350px;">
            <div class="row1 header" style="margin-top: 120px;font-family: 'STIX Two Text', serif;" >
                <H1>GIỎ HÀNG</H1>
            </div>
            <div class="row1 frmcontent">
                <div class="row1 mb10 frmdsloai">
                    
                        <?php
                            giohang(1);   
                        ?>
                    
                </div>
                <div class="row1 mb10">
                    <a style="margin: 10px;" href="index.php?action=datmon"><input type="button" value="THANH TOÁN">
                    <a href="index.php"><input type="button" value="ĐẶT THÊM"></a>
                    <a  style="margin: 10px;" href="index.php?action=xoa"><input type="button" value="XÓA TẤT CẢ"></a>
                    
                </div>
            </div>
        </div>

        </body>
</html>