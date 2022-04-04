<?php
session_start();
include "../../Model/BaseModel.php";
include "../../Model/pdo.php";
include "../../Model/giohang.php";
include "../../Model/danhmuc.php";
include "../../Model/sanpham.php";
include "../../Model/taikhoan.php";
include "../../Model/binhluan.php";
include "../../Model/web.php";

$sptrang = loadall_sp_trang();
$ndtrang = loadall_nd_trang();
?>

<div class="container-fluid">
	<?php
	if (isset($_GET['action'])) {
		$act = $_GET['action'];
		include('includes/header.php');
		include('includes/navbar.php');
		switch ($act) {
				//dangnhap
			case 'dangnhapad':
				if (isset($_POST['dangnhapad']) && ($_POST['dangnhapad'])) {
					$tennd = $_POST['tennd'];
					$pass = $_POST['pass'];
					$checknd = check_ad($tennd, $pass);
					if (is_array($checknd)) {
						$_SESSION['Ten_AD'] = $checknd;
						// $_SESSION['ID_ND'] = $checknd;
						// $_SESSION['Level'] = $checknd;
						header('location:index.php?action=trangchu');
						// $thongbao = "Tài khoản không tồn tại";
					} else {
						$thongbao = "Tài khoản không tồn tại, vui lòng kiểm tra tên, 
						mật khẩu hoặc tài khoản không đủ quyền truy cập";
						header('location:dangnhap.php');
					}
				}
				include "dangnhap.php";
				break;
				//dangxuat
			case 'dangxuatad':
				session_unset();
				// $thongbao = "đăng xuất";
				header('location:dangnhap.php');
				// include "dangnhap.php";
				break;
				//danh muc		
			case 'themdm':
				if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
					$tenloai = $_POST['tenloai'];
					them_dm($tenloai);
					$thongbao = "Thêm thành công";
				}
				include "danhmuc/themdm.php";
				break;
			case 'dsdm':
				$danhsachdm = loadall_dm();
				include "danhmuc/dsdm.php";
				break;
			case 'xoadm':
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					xoa_dm($_GET['id']);
					$thongbao = "Xóa thàng công";
				}
				$danhsachdm = loadall_dm();
				include "danhmuc/dsdm.php";
				break;
			case 'suadm':
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					$danhmuc = loadone_dm($_GET['id']);
				}
				include "danhmuc/suadm.php";
				break;
			case 'capnhatdm':
				if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
					$tenloai = $_POST['tenloai'];
					$id = $_POST['id'];
					capnhat_dm($id, $tenloai);
				}
				$thongbao = "Cập nhật thành công";
				$danhsachdm = loadall_dm();
				include "danhmuc/dsdm.php";
				break;

				//san pham		
			case 'themsp':
				if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
					$iddm = $_POST['iddm'];
					$tensp = $_POST['tensp'];
					$gia = $_POST['gia'];
					$mota = $_POST['mota'];
					$hinh = $_FILES['hinh']['name'];
					$target_dir = "../../upload/";
					$target_file = $target_dir . basename($_FILES["hinh"]["name"]);
					if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
						//echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
					} else {
						//echo "Sorry, there was an error uploading your file.";
					}
					them_sp($tensp, $gia, $hinh, $mota, $iddm);
					$thongbao = "Thêm thành công";
				}
				$danhsachdm = loadall_dm();
				include "monan/themsp.php";
				break;
			case 'dssp':
				if (isset($_POST['dsOK']) && ($_POST['dsOK'])) {
					$kyw = $_POST['kyw'];
					$iddm = $_POST['iddm'];
				} else {
					$kyw = '';
					$iddm = 0;
				}
				$danhsachdm = loadall_dm();
				$danhsachsp = loadall_sp($kyw, $iddm);
				include "monan/dssp.php";
				break;
			case 'xoasp':
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					xoa_sp($_GET['id']);
				}
				$danhsachsp = loadall_sp("", 0);
				include "monan/dssp.php";
				break;
			case 'suasp':
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					$sanpham = loadone_sp($_GET['id']);
				}
				$danhsachdm = loadall_dm();
				include "monan/suasp.php";
				break;
			case 'capnhatsp':
				if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
					$id = $_POST['id'];
					$iddm = $_POST['iddm'];
					$tensp = $_POST['tensp'];
					$gia = $_POST['gia'];
					$mota = $_POST['mota'];
					$hinh = $_FILES['hinh']['name'];
					$target_dir = "../../upload/";
					$target_file = $target_dir . basename($_FILES["hinh"]["name"]);
					if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
						//echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
					} else {
						//echo "Sorry, there was an error uploading your file.";
					}
					capnhat_sp($iddm, $tensp, $gia, $hinh, $mota, $id);
					$thongbao = "Cập nhật thành công";
				}
				$danhsachdm = loadall_dm();
				$danhsachsp = loadall_sp_ad("", 0);
				include "monan/dssp.php";
				break;
				//nguoi dung
			case 'dskh':
				$dsnd = loadall_nd();

				include "khachhang/dsnd.php";
				break;
			case 'themkh':
				if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
					$tennd = $_POST['tennd'];
					$pass = $_POST['pass'];
					$level = $_POST['level'];
					$sdt = $_POST['sdt'];
					$dc = $_POST['dc'];
					$email = $_POST['email'];
					them_nd($tennd, $pass, $level, $sdt, $dc, $email);
					$thongbao = "Thêm thành công";
				}
				include "khachhang/themnd.php";
				break;
			case 'xoatk':
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					xoa_nd($_GET['id']);
				}
				$thongbao = "Xóa thành công";
				$dsnd = loadall_nd("", 0);
				include "khachhang/dsnd.php";
				break;
			case 'suatk':
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					$nguoidung = loadone_nd($_GET['id']);
				}
				include "khachhang/suatk.php";
				break;
			case 'capnhattk':
				if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
					$tennd = $_POST['tennd'];
					$pass = $_POST['pass'];
					$level = $_POST['level'];
					$sdt = $_POST['sdt'];
					$dc = $_POST['dc'];
					$email = $_POST['email'];
					$id = $_POST['id'];
					capnhat_tk($tennd, $pass, $level, $sdt, $dc, $email, $id);
				}
				$thongbao = "Cập nhật thành công";
				$dsnd = loadall_nd();
				include "khachhang/dsnd.php";
				break;
				//binhluan
			case 'dsbl':
				$danhsachbl = loadall_bl();
				include "binhluan/dsbl.php";
				break;
			case 'xoabl':
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					xoa_bl($_GET['id']);
				}
				$thongbao = "Xóa thành công";
				$danhsachbl = loadall_bl("", 0);
				include "binhluan/dsbl.php";
				break;
			case 'suabl':
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					$binhluan = loadone_bl($_GET['id']);
				}
				include "binhluan/suabl.php";
				break;
			case 'capnhatbl':
				if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
					$tennd = $_POST['tennd'];
					$nd = $_POST['noidung'];
					$idnd = $_POST['idnd'];
					$ngay = $_POST['ngaybl'];
					$id = $_POST['id'];
					capnhat_bl($id, $tennd, $nd, $idnd, $ngay);
				}
				$thongbao = "Cập nhật thành công";
				$danhsachbl = loadall_bl();
				include "binhluan/dsbl.php";
				break;
				//donhang
			case 'dsdh':
				$dsdh = loadall_donhang(0);
				include "donhang/dsdh.php";
				break;
			case 'xoadh':
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					xoa_dh($_GET['id']);
				}
				$thongbao = "Xóa thành công";
				$dsdh = loadall_donhang(0);
				include "donhang/dsdh.php";
				break;
			case 'suadh':
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					$donhang = loadone_dh($_GET['id']);
				}
				include "donhang/suadh.php";
				break;
			case 'capnhatdonhang':
				if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
					$ttdh = $_POST['ttdh'];
					$id = $_POST['id'];
					capnhat_dh($id, $ttdh);
				}
				$thongbao = "Cập nhật thành công";
				$dsdh = loadall_donhang(0);
				include "donhang/dsdh.php";
				// dangnhap
				break;

			case 'ctdh':
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					$id = $_GET['id'];
					$motdh = loadct_spdh($id);
					include "donhang/ttdh.php";
				} else {
					include "donhang/dsdh.php";
				}

				break;

				//trangchu
			case 'trangchu':
				$sumdh = sum_dh();
				$countbl = count_bl();
				$countdh = count_dh();
				$countnd = count_nd();
				$dsdh = loadall_dh_news(0);
				$dstk = loadall_thongke();
				$dstkdh = loadall_thongke_dh();
				$tksp = thongkesp();
				$tkdh = loadall_tk_dh();
				include "trangchu/trangchu.php";
				break;
				//ttadmin
			case 'ttadmin':
				$allad = loadall_ad();
				include "ttadmin/ttadmin.php";
				break;
			case 'themadmin':
				if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
					$tennd = $_POST['tennd'];
					$pass = $_POST['pass'];
					$level = $_POST['level'];
					$sdt = $_POST['sdt'];
					$dc = $_POST['dc'];
					$email = $_POST['email'];
					them_nd($tennd, $pass, $level, $sdt, $dc, $email);
					$thongbao = "Thêm thành công";
				}
				include "ttadmin/themadmin.php";
				break;
			case 'xoaad':
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					xoa_ad($_GET['id']);
				}
				$dsnd = loadall_ad("", 0);
				include "ttadmin/ttadmin.php";
				break;
			case 'suaad':
				if (isset($_GET['id']) && ($_GET['id'] > 0)) {
					$nguoidung = loadone_ad($_GET['id']);
				}
				include "khachhang/suatk.php";
				break;
			case 'capnhatad':
				if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

					$tennd = $_POST['tennd'];
					$pass = $_POST['pass'];
					$level = $_POST['level'];
					$sdt = $_POST['sdt'];
					$dc = $_POST['dc'];
					$email = $_POST['email'];
					$id = $_POST['id'];
					capnhat_tk($tennd, $pass, $level, $sdt, $dc, $email, $id);
					$thongbao = "Cập nhật thành công";
				} else {
				}
				include "ttadmin/capnhat.php";
				break;
				//website
			case 'web':

				$web = loadall_web();
				$hinh = loadall_hinh();
				include "web/web.php";
				break;
			default:
				# code...
				break;
		}
		include('includes/scripts.php');
		include('includes/footer.php');
	} else {
		header('location:dangnhap.php');
	}
	// include "footer.php";

	?>