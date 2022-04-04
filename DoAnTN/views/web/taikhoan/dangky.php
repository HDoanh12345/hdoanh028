<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/style.css">
    <style>
		.header_login{
			margin-top: 150px;
            width: 480px;
		}
        .dangnhap{
            margin-bottom: 200px;
        }
        .login-form{
            width: 480px;
            margin-top: 250px;
        }
	</style>
</head>
<body>
<div class="row dangnhap">
<div class="row1 header_login">
			<H1>ĐĂNG KÝ 
        TÀI KHOẢN</H1>			
</div>		
<div class="login-form">

                <form action="index.php?action=dangky" method="post">
                
                    <div class="input-box">
                        <i ></i>
                        <input type="text" name="tennd" placeholder="Nhập tên tài khoản">
                    </div>
                    <div class="input-box">
                        <i ></i>
                        <input type="password" name="pass" placeholder="Nhập mật khẩu">
                    </div>
					<div class="input-box">
                        <i ></i>
                        <input type="text" name="sdt" placeholder="Nhập số điện thoại">
                    </div>
					<div class="input-box">
                        <i ></i>
                        <input type="text" name="diachi" placeholder="Nhập địa chỉ">
                    </div>
					<div class="input-box">
                        <i ></i>
                        <input type="email" name="email" placeholder="Nhập email">
                    </div>
                    <div class="btn-box">
                        <button type="submit" name="dangky" value="Dang ky">
						ĐĂNG KÝ 
                        </button>
						
						<button type="reset" name="reset">
						NHẬP LẠI
                        </button>
                    </div>
                    <div class="thongbao">
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                        }
                    ?>
                </div>
                </form>
            </div>
</div>
</body>
</html>	
	