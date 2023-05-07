<?php
function viewcart($del){
    global $img_path;
    $tong = 0;
    $i = 0;
    if($del==1){
        $xoasp_th='<th>Thao tác</th>';
        $xoasp_td2='<td></td>';
    }else{
        $xoasp_th='';
        $xoasp_td2='';
    }
    echo '<tr>
        <th>Hình</th>
        <th>Sản phẩm</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        '.$xoasp_th.'
        </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if($del==1){
            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
        }else{
            $xoasp_td='';
        }
        echo '<tr>
                <td><img src="' . $hinh . '" alt="" height="80px"</td>
                <td>' . $cart[1] . '</td>
                <td>' . $cart[3] . '</td>
                <td>' . $cart[4] . '</td>
                <td>' . $ttien . '</td>
                ' . $xoasp_td . ' 
            </tr>';
        $i += 1;
    }
    echo '<tr>
        <td colspan="4">Tổng đơn hàng</td>
        <td>' . $tong . ' Triệu VNĐ</td>
        '.$xoasp_td2.'
        </tr>';
}

function bill_chi_tiet($listbill){
    global $img_path;
    $tong = 0;
    $i = 0;

    echo '<tr>
        <th>Hình</th>
        <th>Sản phẩm</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        </tr>';
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['ttien'];
        echo '<tr>
                <td><img src="' . $hinh . '" alt="" height="80px"</td>
                <td>' . $cart['nameCart'] . '</td>
                <td>' . $cart['price'] . '</td>
                <td>' . $cart['soluong'] . '</td>
                <td>' . $cart['ttien'] . '</td>
            </tr>';
        $i += 1;
    }
    echo '<tr>
        <td colspan="4">Tổng đơn hàng</td>
        <td>' . $tong . ' Triệu VNĐ</td>
        </tr>';
}

function tongdonhang(){
    $tong=0;

    foreach ($_SESSION['mycart'] as $cart){
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
    }
    return $tong;
}

function insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
    $sql="insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total)
    values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($iduser,$idsp,$img,$nameCart,$price,$soluong,$ttien,$idbill){
    $sql="insert into cart(iduser,idsp,img,nameCart,price,soluong,ttien,idbill)
    values('$iduser','$idsp','$img','$nameCart','$price','$soluong','$ttien','$idbill')";
    pdo_execute($sql);
}

function loadone_bill($idbill)
{
    $sql = "select * from bill where idbill=" . $idbill;
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}

function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}

function loadall_bill($kyw="",$iduser)
{
    $sql="select * from bill where 1";
    if($iduser>0) $sql.=" AND iduser=".$iduser;
    if($kyw!="") $sql.=" AND idbill like'%".$kyw."%'";
    $sql.=" order by idbill desc";
    $listbill=pdo_query($sql);
    return $listbill;

}

function delete_donhang($idbill)
{
    $sql = "delete from bill where idbill=" . $idbill;
    pdo_execute($sql);
}

function   update_donhang($idbill,$bill_name,$bill_address,$bill_email,$bill_tel,$total,$ngaydathang)
{
    $sql = "update bill set bill_name='" . $bill_name . "',bill_address='" . $bill_address . "',bill_email='" . $bill_email . "',bill_tel='" . $bill_tel . "',total='" . $total . "',ngaydathang='".$ngaydathang."' where idbill=" . $idbill;
    pdo_execute($sql);
}

function get_ttdh($n){
    switch ($n){
        case '0':
            $tt="Đơn hàng mới";
            break;
        
        case '1':
            $tt="Đang xử lý";
            break;
        
        case '2':
            $tt="Đang giao hàng";
            break;

        case '3':
            $tt="Hoàn tất";
            break;

        default:
            $tt="Đơn hàng mới";
            break;
    }
    return $tt;
}

function loadall_thongke(){
    $sql="select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.idsp) as countsp, max(sanpham.price) as maxprice, min(sanpham.price) as minprice, avg(sanpham.price) as avgprice";
    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql.=" group by danhmuc.id order by danhmuc.id desc";
    $listthongke=pdo_query($sql);
    return $listthongke;
}
?>