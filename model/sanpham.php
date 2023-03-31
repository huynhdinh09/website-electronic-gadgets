<?php

function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm)
{
    $sql = "insert into sanpham(name1,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "delete from sanpham where id1=" . $id;
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql = "select * from sanpham where 1 order by id1 desc limit 0,9";
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
        $sql .= " and name1 like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by id1 desc";
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
    $sql = "select * from sanpham where id1=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id,$iddm)
{
    $sql = "select * from sanpham where iddm=".$iddm." AND id1 <>" . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function   update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh)
{
    if (!empty($_FILES['hinh']['name'])){
        
        $sql = "update sanpham set iddm='" . $iddm . "',name1='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "',img='" . $hinh . "' where id1=" . $id;
    }else
        $sql = "update sanpham set iddm='" . $iddm . "',name1='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "' where id1=" . $id;
    pdo_execute($sql);
}
