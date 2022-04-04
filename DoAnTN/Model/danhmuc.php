<?php
function them_dm($tenloai){
    $sql = "insert into loaisp(Ten_LSP) values('$tenloai')";
	pdo_execute($sql);
}
function loadall_dm(){
    $sql = "select * from loaisp order by ID_LSP desc";
	$danhsachdm = pdo_query($sql);
    return $danhsachdm;
}
function xoa_dm($id){
    $sql = "delete from loaisp where ID_LSP=".$id; 
	pdo_execute($sql);
}
function loadone_dm($id){
    $sql = "select * from loaisp where ID_LSP=".$_GET['id'];
	$danhmuc = pdo_query_one($sql);//lay chi tiet
    return $danhmuc;
}
function capnhat_dm($id,$tenloai){
    $sql = "update loaisp set Ten_LSP = '".$tenloai."' where ID_LSP =".$id;
	pdo_execute($sql);
}
function load_ten_dm($iddm){
    if ($iddm>0) {
    
    $sql = "select * from loaisp where ID_LSP=".$iddm;
	$danhmuc = pdo_query_one($sql);//lay chi tiet
    extract($danhmuc);
    return $danhmuc;
    }else{
        return "";
    }
}
?>