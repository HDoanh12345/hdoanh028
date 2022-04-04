<?php
function them_nd($tennd,$pass,$level,$sdt,$dc,$email){
    $sql = "insert into nguoidung(Ten_ND,Pass,Level,Sdt_ND,DC_ND,Ten_TK) 
    values('$tennd','$pass','$level','$sdt','$dc','$email')";
	pdo_execute($sql);
}
function check_nd($tennd,$pass){
    $sql = "select * from nguoidung where Ten_ND='".$tennd."' AND Pass='".$pass."'";
	$nd = pdo_query_one($sql);//lay chi tiet
    return $nd;
}
function check_ad($tennd,$pass){
    $sql = "select * from nguoidung where Ten_ND='".$tennd."' AND Pass='".$pass."' and Level = 1";
	$nd = pdo_query_one($sql);//lay chi tiet
    return $nd;
}
function loadall_ad(){
    $sql = "select * from nguoidung where Level = 1 order by ID_ND desc";
	$dsnd = pdo_query($sql);
    return $dsnd;
}
function check_email($email,$pass){
    $sql = "select * from nguoidung where Ten_TK='".$email."' AND Pass='".$pass."'";
	$nd = pdo_query_one($sql);//lay chi tiet
    return $nd;
}
function capnhat_tk($tennd,$pass,$level,$sdt,$diachi,$email,$id){
    $sql = "update nguoidung set Ten_ND = '".$tennd."',Pass = '".$pass."',Level='".$level."',Sdt_ND = '".$sdt."',
    DC_ND = '".$diachi."',Ten_TK = '".$email."' where ID_ND =".$id;
	pdo_execute($sql);
}
function capnhat_ad($tennd,$pass,$sdt,$diachi,$email,$id){
    $sql = "update nguoidung set Ten_ad = '".$tennd."',Pass = '".$pass."',sdt = '".$sdt."',
    diachi = '".$diachi."',email = '".$email."' where ID_AD =".$id;
	pdo_execute($sql);
}
// function loadall_nd(){
//     $sql = "select * from nguoidung order by ID_ND desc";
// 	$dsnd = pdo_query($sql);
//     return $dsnd;
// }
function loadall_nd_trang(){
    $tongsp1trang =6;
//
if (!isset($_GET['trang'])) {
     $trang=1;
}else{
     $trang = $_GET['trang'];
}

 $trangbatdau =($trang-1)*$tongsp1trang;
    $sql = "select * from nguoidung where 1 order by ID_ND desc limit $trangbatdau,$tongsp1trang";
	$dsnd = pdo_query($sql);
    return $dsnd;
}
function loadall_nd($kyw="",$iddm=0){
    $tongsp1trang =6;
    //
    if (!isset($_GET['trang'])) {
         $trang=1;
    }else{
         $trang = $_GET['trang'];
    }
    $trangbatdau =($trang-1)*$tongsp1trang;
    $sql = "select * from nguoidung where 1";
    
    $sql.=" order by ID_ND desc limit $trangbatdau,$tongsp1trang";
	$dsnd = pdo_query($sql);
    return $dsnd;
}
function xoa_nd($id){
    $sql = "delete from nguoidung where ID_ND=".$id; 
	pdo_execute($sql);
}
function xoa_ad($id){
    $sql = "delete from admin where ID_AD=".$id; 
	pdo_execute($sql);
}
function loadone_nd($id){
    $sql = "select * from nguoidung where ID_ND=".$_GET['id'];
	$danhmuc = pdo_query_one($sql);//lay chi tiet
    return $danhmuc;
}
function loadone_ad($id){
    $sql = "select * from admin where ID_AD=".$_GET['id'];
	$danhmuc = pdo_query_one($sql);//lay chi tiet
    return $danhmuc;
}
function count_nd(){
    $sql = "select count(*) as dem from nguoidung order by ID_ND desc";
	$countnd = pdo_query($sql);
    return $countnd;
}

function them_ad($tennd,$pass,$sdt,$dc,$email){
    $sql = "insert into admin(Ten_ad,Pass,sdt,diachi,email) 
    values('$tennd','$pass','$sdt','$dc','$email')";
	pdo_execute($sql);
}

?>