<?php
    session_start();
    include "../../Model/pdo.php";
    include "../../Model/binhluan.php";
    include "../../Model/BaseModel.php";
    date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binh luan</title>
    <link rel="stylesheet" href="">

    <style>
        .body{
            margin: 0;
        }
        *{
            font-size: 1.4vw;
        }
        .ndbinhluan{
            height: auto;
            color:#191F3A;
            background-color: #E0E0E0;
            border-radius: 5px;
        }
        .ndbinhluan table{
            
            width: 90%;
            margin: 5px 20px;
        }
        .ndbinhluan table td:nth-child(1){
            padding: 5px;
            width: 25%;
        }
        .ndbinhluan table td:nth-child(2){
            width: 50%;
        }
        .ndbinhluan table td:nth-child(3){
            
            width: 25%;
        }
        .formbinhluan{
            color: wheat;
        }
        .formbinhluan textarea{
            background: #E0E0E0;;
            border-radius: 5px;
            width: 40%;
            height: 70px;
        }
        .formbinhluan textarea:hover{
            background: white;
        }
        .formbinhluan input{
            border: 1px solid black;
            border-radius: 5px;
            cursor: pointer;
        }
        .formbinhluan input:hover{
            background: #ccc;
        }
        .thongbao a{
            margin: 0px 10px 10px;
            color:#E0E0E0;
            text-decoration: none;
        }
        .thongbao a:hover{
            color:  wheat;
        }
        .ds_trang{
            margin-top: 10px;
            margin-left: 20px;
            padding: 0;
            margin: 0;
            list-style: none;
        }
        .ds_trang li{
            float: left;
            padding: 5px 13px;
            margin: 5px;
            background: lightcoral;
            display: block;
        }
        .ds_trang li a{
            color: #000;
            text-align: center;
            text-decoration: none;
        }
        .ds_trang li a:hover{
            color: aqua;
        }

        
    </style>
</head>
<body>
<?php

if (isset($_SESSION['ID_ND']) && ($_SESSION['ID_ND']>0)) {
    if (isset($_SESSION['Ten_ND']) && ($_SESSION['Ten_ND']!="")) {
        $tennd = $_SESSION['Ten_ND'];
    } else {
        $tennd = "";
    }
    if (isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])) {  
        $ten=$_SESSION['ID_ND']['Ten_ND'];
        $noidung=$_POST['noidung'];
        $idnd=$_SESSION['Ten_ND']['ID_ND'];
        $ngaybl=date('h:i:sa d/m/Y');
        them_bl($ten,$noidung,$idnd,$ngaybl);
        header("location:".$_SERVER['HTTP_REFERER']);
    }
    $dsbl =loadall_bl();
?>
<div class="row">
    <div class="formbinhluan">
        <hr>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <!-- <input type="hidden" name="name" value="<?=$tennd?>"> -->
            <textarea name="noidung" id="" cols="30" rows="10" ></textarea><br>
            <input type="submit" value="Gửi bình luận" name="guibinhluan">
        </form>
        <hr>
   
    
<?php

} else {
   echo "<div class='thongbao'>";
   echo "<a href='../index.php?action=dangnhap' target='__parent'>Vui lòng đăng nhập để góp ý</a>";
   echo "</div>";
}
?>
 </div>
<div class="ndbinhluan" >
    <table >
        <?php
        $dsbl = loadall_bl();

        foreach ($dsbl as $binhluan) {
            extract($binhluan);
            echo '<tr>                                                                          
                        <td>' . $Ten_ND . '</td>
                        <td>' . $ND_BL . '</td>
                        <td>' . $Ngay_BL . '</td>                                       
                    </tr>';
        }
        
        ?>
    </table>
</div>
<div class="trang">
    <?php
        $sql = "select * from binhluan order by ID_BL desc ";
        $tongsp = mysqli_query($conn, $sql);
		$tong = mysqli_num_rows($tongsp);
		$tongsp1trang = 8;
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

			echo '<li><a href="binhluan.php?trang=' . $trang . '">' . $trang . '</a></li>';
		}
		echo    '</ul>';
    ?>
</div>
</div>
</body>
</html>