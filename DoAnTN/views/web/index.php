<?php
session_start();
// session_unset();
include "../../Model/BaseModel.php";
include "../../Model/pdo.php";
include "../../Model/sanpham.php";
include "../../Model/giohang.php";
include "../../Model/danhmuc.php";
include "../../bienchung.php";
include "../../Model/taikhoan.php";
include "../../Model/web.php";

if (!isset($_SESSION['giohang'])) {
    $_SESSION['giohang'] = [];
}
$sptrang = loadall_sp_trang();
$spn = loadall_sp_thucdon();
$dsdm = loadall_dm();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$allw = loadall_web();

include "header.php";
if (isset($_GET['action']) && ($_GET['action'] != "")) {
    $action = $_GET['action'];
    switch ($action) {
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $tennd = $_POST['tennd'];
                $pass = $_POST['pass'];
                $checknd = check_nd($tennd, $pass);
                if (is_array($checknd)) {
                    $_SESSION['Ten_ND'] = $checknd;
                    $_SESSION['ID_ND'] = $checknd;
                    header('location:index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại, vui lòng kiểm tra tên, mật khẩu hoặc đăng ký tài khoản";
                }
            }
            include "taikhoan/dangnhap.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {

                $tennd = $_POST['tennd'];
                $pass = $_POST['pass'];
                $sdt = $_POST['sdt'];
                $dc = $_POST['diachi'];
                $email = $_POST['email'];
                them_nd($tennd, $pass, "", $sdt, $dc, $email);
                $thongbao = "Tài khoản đã đăng ký thành công";
            } else {
                // $thongbao="Tài khoản chưa được đăng ký";
            }
            include "taikhoan/dangky.php";
            break;
        case 'capnhattk':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $tennd = $_POST['tennd'];
                $pass = $_POST['pass'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $id = $_POST['id'];

                capnhat_tk($tennd, $pass, "", $sdt, $diachi, $email, $id);
                $_SESSION['Ten_ND'] = $checknd($tennd, $pass);

                $thongbao = "Cập nhật thành công";
            } else {
                $thongbao = "Cập nhật thất bại";
            }
            include "taikhoan/capnhat.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = check_email($email, "");
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['Pass'];
                } else {
                    $thongbao = "email này không tồn tại";
                }
            }
            include "taikhoan/quenmk.php";

            break;
        case 'dangxuat':

            session_unset();
            include "home.php";
            break;



            //giohang
        case 'themgiohang':
            if (isset($_POST['themgiohang']) && ($_POST['themgiohang'])) {
                $id = $_POST['id'];
                $ten = $_POST['ten'];
                $hinh = $_POST['hinh'];
                $gia = $_POST['gia'];
                $sl = 1;
                $tt = $sl * $gia;
                $themgiohang = [$id, $ten, $hinh, $gia, $sl, $tt];
                array_push($_SESSION['giohang'], $themgiohang);
            }
            include "giohang/giohang.php";
            break;
        case 'giohang':
            include "giohang/giohang.php";
            break;
        case 'xoa':
            if (isset($_GET['idgiohang'])) {
                array_splice($_SESSION['giohang'], $_GET['idgiohang'], 1);
            } else {
                $_SESSION['giohang'] = [];
            }
            header('Location:index.php?action=giohang');
            break;
        case 'datmon':
            include "giohang/donhang.php";
            break;
        case 'chotdon': //lay thong tin tu form de tao don
            if (isset($_POST['dongydat']) && ($_POST['dongydat'])) {
                if (isset($_SESSION['Ten_ND'])) $idnd = $_SESSION['Ten_ND']['ID_ND'];
                else $idnd = 0;
                $ten = $_POST['ten'];
                $dc = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('Y/m/d h:i:s', time());
                $tongdon = tongdon();

                $iddonhang = them_donhang($idnd, $ten, $dc, $sdt, $email, $pttt, $ngaydathang, $tongdon);
                // tao giohang
                foreach ($_SESSION['giohang'] as $giohang) {
                    them_giohang(
                        $_SESSION['Ten_ND']['ID_ND'],
                        $giohang[0],
                        $giohang[2],
                        $giohang[1],
                        $giohang[3],
                        $giohang[4],
                        $giohang[5],
                        $iddonhang
                    );
                }
                //xoa session
                $_SESSION['giohang'] = [];
            }
            $donhang = loadone_dh($iddonhang);
            $ctgiohang = loadall_giohang($iddonhang);
            include "giohang/chotdon.php";
            break;

        case 'donhangkhachtv':
            $dsdh = loadall_donhang($_SESSION['Ten_ND']['ID_ND']);
            include "giohang/donhangkhachtv.php";
            break;

            //sanpham        
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm']) > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sp($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $motsp = loadct_sp($id);
                include "sanphamct.php";
            } else {
                include "home.php";
            }

            break;
        case 'hinh':
            $hinh = loadall_hinh();
            include "Hinh.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
