<?php
function check_ad($tennd,$pass){
    $sql = "select * from nguoidung where Ten_ND='".$tennd."' AND Pass='".$pass."' and Level = 1";
	$nd = pdo_query_one($sql);//lay chi tiet
    return $nd;
}
?>