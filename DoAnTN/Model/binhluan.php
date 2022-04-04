
<?php
function them_bl($ten,$noidung,$idnd,$ngaybl){
    $sql = "insert into binhluan(Ten_ND, ND_BL, ID_ND, Ngay_BL) values('$ten','$noidung','$idnd','$ngaybl')";
	pdo_execute($sql);
}
function them_blct($ten,$noidung,$idnd,$ngaybl){
    $sql = "insert into binhluan(Ten_ND, ND_BL, ID_ND, Ngay_BL) values('$ten','$noidung','$idnd','$ngaybl')";
	pdo_execute($sql);
}
function loadall_bl(){
    $tongsp1trang =8;
    
    if (!isset($_GET['trang'])) {
         $trang=1;
    }else{
         $trang = $_GET['trang'];
    }
    
     $trangbatdau =($trang-1)*$tongsp1trang;
    $sql = "select * from binhluan order by ID_BL desc limit $trangbatdau,$tongsp1trang";
	$danhsachbl = pdo_query($sql);
    return $danhsachbl;
}
function loadall_bl2(){
    $tongsp1trang =3;
    
    if (!isset($_GET['trang'])) {
         $trang=1;
    }else{
         $trang = $_GET['trang'];
    }
    
     $trangbatdau =($trang-1)*$tongsp1trang;
    $sql = "select * from binhluan order by ID_BL desc limit $trangbatdau,$tongsp1trang";
	$danhsachbl = pdo_query($sql);
    return $danhsachbl;
}
function loadall_bl1(){
  
    $sql = "select * from binhluan where 1 order by ID_BL desc";
	$danhsachbl1 = pdo_query($sql);
    return $danhsachbl1;
}
function xoa_bl($id){
    $sql = "delete from binhluan where ID_BL=".$id; 
	pdo_execute($sql);
}
function loadone_bl($id){
    $sql = "select * from binhluan where ID_BL=".$_GET['id'];
	$binhluan = pdo_query_one($sql);//lay chi tiet
    return $binhluan;
}
function capnhat_bl($id,$tennd,$nd,$idnd,$ngay){
    $sql = "update binhluan set Ten_ND = '".$tennd."', ND_BL='".$nd."',ID_ND='".$idnd."',Ngay_BL='".$ngay."'
     where ID_BL =".$id;
	pdo_execute($sql);
}
function count_bl(){
    $sql = "select count(*) as dem from binhluan order by ID_BL desc ";
	$countbl = pdo_query($sql);
    return $countbl;
}
?>