<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
		.header_login{
			margin-top: 100px;
            width: 550px;
		}
        .dangnhap{
            height: 600px;
        }
        .login-form_dn{
            height: 150px;
        }
	</style>
</head>
<body>
<div class="row dangnhap">
<div class="row1 header_login">
			<H1>QUÊN MẬT KHẨU</H1>			
</div>
<div class="login-form_dn">

                <form action="index.php?action=quenmk" method="post">
                
                    <div class="input-box">
                        <i ></i>
                        <input type="email" name="email" placeholder="Nhập email">
                    </div>
                    
                    <div class="btn-box">
                        <button type="submit" name="guiemail" value="gui email">
						GỬI
                        </button>
						
						<button type="reset" name="reset">
						NHẬP LẠI
                        </button>
                    </div>
				<?php
            if (isset($thongbao)&&($thongbao!="")) {
            echo $thongbao;
            }
            ?>
                </form>
            </div>
			
            </div>
</body>
</html>	
	