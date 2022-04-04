<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/style.css">
    <style>
        .login-form_dn {
            width: 45%;
            height: 200px;
            max-width: 400px;
margin-top: 200px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 15px;
            border: 2px dotted #cccccc;
            border-radius: 10px;
        }

        .thongbao {
            margin: 20px 10px 10px;
        }

        .header_login {
            margin-top: 150px;
            width: 480px;
        }

        .dangnhap {
           margin-bottom: 200px;
        }
    </style>
</head>

<body>

    <div class="row dangnhap">
        <div class="row1 header_login">
            <H1>ĐĂNG NHẬP</H1>
        </div>
        <div class="login-form_dn" style="margin-top: 200px;">

            <form action="index.php?action=dangnhap" method="post">

                <div class="input-box">
                    <i></i>
                    <input type="text" name="tennd" placeholder="Nhập tên tài khoản">
                </div>
                <div class="input-box">
                    <i></i>
                    <input type="password" name="pass" placeholder="Nhập mật khẩu">
                </div>
                <div class="btn-box">
                    <button type="submit" name="dangnhap" value="Dang nhap">
                        ĐĂNG NHẬP
                    </button>

                    <button type="reset" name="reset">
                        NHẬP LẠI
                    </button>
                    <a href="index.php?action=quenmk">Quên mật khẩu</a>
                </div>
                <div class="thongbao">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </div>
            </form>
        </div>

    </div>
</body>

</html>