<?php

function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm)
{
    $sql = "insert into sanpham(namesp,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "delete from sanpham where idsp=" . $id;
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql = "select * from sanpham where 1 order by idsp desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

// function loadall_sanpham_top5(){
//     $sql = "select * from sanpham where 1 order by luotxem desc limit 0,5";
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
function loadall_sanpham($kyw, $iddm)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and namesp like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by idsp desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm)
{
    if($iddm>0){
        $sql = "select * from danhmuc where id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
    
}
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where idsp=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id,$iddm)
{
    $sql = "select * from sanpham where iddm=".$iddm." AND idsp <>" . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function   update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh)
{
    if (!empty($_FILES['hinh']['name'])){
        
        $sql = "update sanpham set iddm='" . $iddm . "',namesp='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "',img='" . $hinh . "' where idsp=" . $id;
    }else
        $sql = "update sanpham set iddm='" . $iddm . "',namesp='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "' where idsp=" . $id;
    pdo_execute($sql);
}
