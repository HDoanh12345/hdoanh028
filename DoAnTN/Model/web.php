<?php
function loadall_web(){
    $sql = "select * from website where 1 order by id desc";
	$web = pdo_query($sql);
    return $web;
}
function loadall_hinh(){
    $sql = "select * from sp where 1 order by ID_SP desc ";
	$danhsachsp = pdo_query($sql);
    return $danhsachsp;
}
?>