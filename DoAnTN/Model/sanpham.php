<?php
function them_sp($tensp,$gia,$hinh,$mota,$iddm){
    $sql = "insert into sp(Ten_SP,HinhAnh_SP,Gia_SP,Mota,ID_LSP) values('$tensp','$hinh','$gia','$mota','$iddm')";
	pdo_execute($sql);
}
function loadall_sp_thucdon(){
    $sql = "select * from sp where 1 order by ID_SP desc ";
	$danhsachsp = pdo_query($sql);
    return $danhsachsp;
}
function loadall_sp_trang(){
    $tongsp1trang =6;
//
if (!isset($_GET['trang'])) {
     $trang=1;
}else{
     $trang = $_GET['trang'];
}

 $trangbatdau =($trang-1)*$tongsp1trang;
    $sql = "select * from sp where 1 order by ID_SP desc limit $trangbatdau,$tongsp1trang";
	$danhsachsp = pdo_query($sql);
    return $danhsachsp;
}

function loadall_sp($kyw="",$iddm=0){
    $tongsp1trang =6;
    //
    if (!isset($_GET['trang'])) {
         $trang=1;
    }else{
         $trang = $_GET['trang'];
    }
    $trangbatdau =($trang-1)*$tongsp1trang;
    $sql = "select * from sp where 1";
    if ($kyw!="") {
        $sql.=" and Ten_SP like '%".$kyw."%'";
    }
    if ($iddm>0) {
        $sql.=" and ID_LSP = '".$iddm."'";
    }
    $sql.=" order by ID_SP desc limit $trangbatdau,$tongsp1trang";
	$danhsachsp = pdo_query($sql);
    return $danhsachsp;
}
function loadall_sp_ad($kyw="",$iddm=0){
    
    $sql = "select * from sp where 1";
    if ($kyw!="") {
        $sql.=" and Ten_SP like '%".$kyw."%'";
    }
    if ($iddm>0) {
        $sql.=" and ID_LSP = '".$iddm."'";
    }
    $sql.=" order by ID_SP desc";
	$danhsachsp = pdo_query($sql);
    return $danhsachsp;
}
function xoa_sp($id){
    $sql = "delete from sp where ID_SP=".$id; 
	pdo_execute($sql);
}

function loadone_sp($id){
    $sql = "select * from sp where ID_SP=".$_GET['id'];
	$sanpham = pdo_query_one($sql);//lay chi tiet
    return $sanpham;
}
function loadct_sp($id){
    $sql = "select * from sp where ID_SP=".$id;
	$sanpham = pdo_query_one($sql);//lay chi tiet
    return $sanpham;
}
function load_sp_cungloai($id){
    $sql = "select * from sp where ID_SP <>".$_GET['id'];
	$sanpham = pdo_query_one($sql);//lay chi tiet
    return $sanpham;
}
function capnhat_sp($iddm,$tensp,$gia,$hinh,$mota,$id){
    if($hinh!=""){
    $sql = "update sp set ID_LSP = '".$iddm."',Ten_SP = '".$tensp."',Gia_SP = '".$gia."',HinhAnh_SP = '".$hinh."',Mota='".$mota."' where ID_SP =".$id;
    }else
    $sql = "update sp set ID_LSP = '".$iddm."',Ten_SP = '".$tensp."',Gia_SP = '".$gia."',Mota='".$mota."' where ID_SP =".$id;
	pdo_execute($sql);
}
