<?php

function giohang($del)
{
    $cham = ".000";
    global $hinhpath;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<th>THAO TÁC</th> ';

        $xoa_td = '<td></td>';
    } else {
        $xoasp_th = '';

        $xoa_td = '';
    }
    echo ' 
    <table>
                <tr>
                                            
                    <th>HÌNH</th>
                    <th>SẢN PHẨM</th>                           
                    <th>ĐƠN GIÁ</th> 
                    <th>SỐ LƯỢNG</th> 
                    <th>THÀNH TIỀN</th>  
                           ' . $xoasp_th . '               
                </tr>';
    foreach ($_SESSION['giohang'] as $giohang) {
        $hinh = $hinhpath . $giohang[2];
        $tt = $giohang[3] * $giohang[4].$cham;
        $tong += $tt;
        if ($del == 1) {

            $xoasp_td = '<td><a href="index.php?action=xoa&idgiohang=' . $i . '"><img src="img/xoa.png" alt="" width="25px" height="25px"></a></td>';
        } else {

            $xoasp_td = '';
        }
        echo '
               
                <tr>
                
                <td><img src="../../' . $hinh . '" alt=""width="100px" height="100px"></td>
                <td>' . $giohang[1] . '</td>
                <td>' . $giohang[3] . '</td>
                <td>' . $giohang[4] . '</td>  
                <td>' . $tt . '</td>                                                                          
                ' . $xoasp_td . '
            </tr>';
        $i += 1;
    }
    echo '<tr>
            
            <td colspan="4">Tổng đơn hàng</td>
            <td>' . $tong.$cham . '</td>
            ' . $xoa_td . '
        </tr>
        </table>';
}
function giohang1($del)
{
    $cham = ".000";
    global $hinhpath;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<th>THAO TÁC</th> ';

        $xoa_td = '<td></td>';
    } else {
        $xoasp_th = '';

        $xoa_td = '';
    }
    echo ' 
    <table>
                <tr>
                                            
                    <th>HÌNH</th>
                    <th>SẢN PHẨM</th>                           
                    <th>ĐƠN GIÁ</th> 
                    <th>SỐ LƯỢNG</th> 
                    <th>THÀNH TIỀN</th>  
                           ' . $xoasp_th . '               
                </tr>';
    foreach ($_SESSION['giohang'] as $giohang) {
        $hinh = $hinhpath . $giohang[2];
        $giohang[4] = '<input type="number" name="soluong" id="" min="1" max="10" value="1">';
        $tt = $giohang[3] * $giohang[4].$cham;
        $tong += $tt;
        if ($del == 1) {

            $xoasp_td = '<td><a href="home.php?action=xoa&idgiohang=' . $i . '"><img src="img/xoa.png" alt="" width="25px" height="25px"></a></td>';
        } else {

            $xoasp_td = '';
        }
        echo '
               
                <tr>
                
                <td><img src="../' . $hinh . '" alt=""width="100px" height="100px"></td>
                <td>' . $giohang[1] . '</td>
                <td>' . $giohang[3] . '</td>
                <td>' . $giohang[4] . '</td>  
                
                <td>' . $tt . '</td>                                                                          
                ' . $xoasp_td . '
            </tr>';
        $i += 1;
    }
    echo '<tr>
            
            <td colspan="4">Tổng đơn hàng</td>
            <td>' . $tong.$cham . '</td>
            ' . $xoa_td . '
        </tr>
        </table>';
}
function chitiet_donhang($dsdh)
{
    $cham =".000";
    global $hinhpath;
    $tong = 0;
    $i=0;
    echo ' <table>
                <tr>                                           
                    <th>HÌNH</th>
                    <th>SẢN PHẨM</th>                           
                    <th>ĐƠN GIÁ</th> 
                    <th>SỐ LƯỢNG</th> 
                    <th>THÀNH TIỀN</th>                                     
                </tr>';
    foreach ($dsdh as $giohang) {
        $hinh = $hinhpath . $giohang['Hinh'];
        $tong += $giohang['TT'];
        echo '
                <tr>  
                    <td><img src="../../' . $hinh . '" alt=""width="100px" height="100px"></td>
                    <td>' . $giohang['Ten_SP'] . '</td>
                    <td>' . $giohang['Gia'] . '</td>
                    <td>' . $giohang['SL'] . '</td>  
                    <td>' . $giohang['TT'] . '</td>                                                                          
                </tr>';
                $i+=1;
    }
            echo '<tr>
                    <td colspan="4">Tổng đơn hàng</td>
                    <td>' . $tong.$cham . '</td>
                </tr>
        </table>';
}
function chitiet_donhang1($dsdh)
{
    global $hinhpath;
    $tong = 0;
    $i=0;
    echo ' <table>
                <tr>                                           
                    <th>HÌNH</th>
                    <th>SẢN PHẨM</th>                           
                    <th>ĐƠN GIÁ</th> 
                    <th>SỐ LƯỢNG</th> 
                    <th>THÀNH TIỀN</th>                                     
                </tr>';
    foreach ($dsdh as $giohang) {
        $hinh = $hinhpath . $giohang['Hinh'];
        $tong += $giohang['TT'];
        echo '
                <tr>  
                    <td><img src="' . $hinh . '" alt=""width="100px" height="100px"></td>
                    <td>' . $giohang['Ten_SP'] . '</td>
                    <td>' . $giohang['Gia'] . '</td>
                    <td>' . $giohang['SL'] . '</td>  
                    <td>' . $giohang['TT'] . '</td>                                                                          
                </tr>';
                $i+=1;
    }
            echo '<tr>
                    <td colspan="4">Tổng đơn hàng</td>
                    <td>' . $tong . '</td>
                </tr>
        </table>';
}
function tongdon()
{
    $tong = 0;
    foreach ($_SESSION['giohang'] as $giohang) {
        $tt = $giohang[3] * $giohang[4];
        $tong += $tt;
    }
    return $tong;
}
function them_donhang($idnd,$ten, $dc, $sdt, $email, $pttt, $ngaydathang, $tongdon)
{
    $sql = "insert into donhang(ID_ND, Ten_DH, DC, SDT, email_DH, PTTT, Ngaydat, Tong_DH) 
    values('$idnd','$ten','$dc','$sdt','$email','$pttt','$ngaydathang','$tongdon')";
    return pdo_execute_layidsaukhithem($sql);
}
function them_giohang($idnd, $idsp, $hinh, $tensp, $gia, $sl, $tt, $iddh)
{
    $sql = "insert into giohang(ID_ND, ID_SP, Hinh, Ten_SP,Gia,SL,TT,ID_DH) values('$idnd','$idsp','$hinh',
    '$tensp','$gia','$sl','$tt','$iddh')";
    return pdo_execute($sql);
}


function loadone_dh($iddonhang)
{
    $sql = "select * from donhang where ID_DH=".$iddonhang;
    $dh = pdo_query_one($sql);
    return $dh;
}
function loadone_gh($id)
{
    $sql = "select * from donhang,giohang where donhang.ID_DH = giohang.ID_DH  and ID_DH=".$id;
    $dh = pdo_query_one($sql);
    return $dh;
}
function loadall_giohang($iddonhang)
{
    $sql = "select * from giohang where ID_DH=".$iddonhang;
    $donhang = pdo_query($sql);
    return $donhang;
}
function loadall_giohang_dem($iddonhang)
{
    $sql = "select * from giohang where ID_DH=".$iddonhang;
    $donhang = pdo_query($sql);
    return sizeof($donhang);
}
// function loadall_donhang($idnd)
// {
//     $sql = "select * from donhang where 1";
//     if ($idnd>0) 
//     $sql.=" AND ID_ND=".$idnd;
//     $sql.=" order by ID_DH desc";
//     $dsdonhang = pdo_query($sql);
//     return $dsdonhang;
// }
function loadall_donhang($idnd){
    $tongsp1trang =6;
    //
    if (!isset($_GET['trang'])) {
         $trang=1;
    }else{
         $trang = $_GET['trang'];
    }
    $trangbatdau =($trang-1)*$tongsp1trang;
    $sql = "select * from donhang where 1";
    if ($idnd>0) 
        $sql.=" AND ID_ND=".$idnd;
      
    $sql.=" order by ID_DH desc limit $trangbatdau,$tongsp1trang";
	$danhsachsp = pdo_query($sql);
    return $danhsachsp;
}
function xoa_dh($id){
    $sql = "delete from donhang where ID_DH=".$id; 
	pdo_execute($sql);
}
function get_ttdh($n){
    switch ($n) {
        case '0':
            $tt="Đơn hàng mới";
            break;
            case '1':
                $tt="Đang xử lý";
                break;
                case '2':
                    $tt="Đang giao";
                    break;
                    case '3':
                        $tt="Hoàn tất";
                        break;
        
        default:
            $tt= "Đơn hàng mới";
            break;
    }
    return $tt;
}
function capnhat_dh($id,$ttdh){
    $sql = "update donhang set TrangThai = '".$ttdh."'
     where ID_DH =".$id;
	pdo_execute($sql);
}
function count_dh(){
    $sql = "select count(*) as dem from sp order by ID_SP desc";
	$countdh = pdo_query($sql);
    return $countdh;
}
function sum_dh(){
    $sql = "select sum(Tong_DH) as sum,count(Tong_DH) as count from donhang order by ID_DH desc";
	$sumdh = pdo_query($sql);
    return $sumdh;
}
function loadall_dh_news($idnd)
{
    $sql = "select * from donhang where 1";
    if ($idnd>0) 
    $sql.=" AND ID_ND=".$idnd;
    $sql.=" order by ID_DH desc limit 0,5";
    $dsdonhang = pdo_query($sql);
    return $dsdonhang;
}
function loadall_thongke(){
    $sql = "select sp.ID_SP as masp, sp.Ten_SP as tensp, loaisp.ID_LSP as madm, loaisp.Ten_LSP as tendm, count(sp.ID_SP) as countsp, min(sp.Gia_SP) as mingia, max(sp.Gia_SP) as maxgia
    , avg(sp.Gia_SP) as avggia";
   $sql.=" from sp left join loaisp on loaisp.ID_LSP=sp.ID_LSP";
   $sql.=" group by loaisp.ID_LSP order by loaisp.ID_LSP desc";
   $dstk =pdo_query($sql);
   return $dstk; 
}
function loadall_thongke_dh(){
    $sql = "select count(giohang.ID_DH) as countgh, giohang.ID_GH as magh, donhang.ID_DH as madh,
     count(donhang.ID_DH) as countdh, min(donhang.Tong_DH) as mindh,
     max(donhang.Tong_DH) as maxdh, avg(donhang.Tong_DH) as avgdh, giohang.Ten_SP as tensp,
      count(giohang.Ten_SP) as countsp, sum(giohang.Ten_SP) as sumsp";
   $sql.=" from donhang left join giohang on giohang.ID_DH=donhang.ID_DH";
   $sql.=" group by giohang.ID_DH order by giohang.ID_DH desc";
   $dstk =pdo_query($sql);
   return $dstk; 
}
function thongkesp(){
    $sql = "select Ten_SP, count(*) as countsp from giohang where ID_DH in (select ID_DH from donhang)
    group by Ten_SP having count(*)>1 limit 0,5 ";
    $dstk = pdo_query($sql);
    return $dstk;
}
function loadct_spdh($id){
    $sql = "select Ten_SP, SL, gia, TT, count(ID_DH) as count from giohang where ID_DH in (select ID_DH from donhang)
     group by Ten_SP
    and ID_DH=".$id;
	$dh = pdo_query_one($sql);//lay chi tiet
    return $dh;
}
function loadall_tk_dh(){
    $sql = "select sum(Tong_DH) as doanhthu,right(Ngaydat,7) as a 
     from donhang group by right(Ngaydat,7)";
    $tkdh =pdo_query($sql);
   return $tkdh; 
}
