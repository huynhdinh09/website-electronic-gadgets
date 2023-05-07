<?php
session_start();
ob_start();
if(isset($_SESSION['user'])&& ($_SESSION['user']['role']==1)){

    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";
    include "../admin/header.php";

    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
           
            case 'adddm':
                //kiem tra nguoi dung co click vao nut add khong
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_danhmuc($_GET['id']);
                }
                $sql = "select * from danhmuc order by id desc";
                $listdanhmuc = pdo_query($sql);
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id, $tenloai);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
                // controller san pham

            case 'addsp':
                //kiem tra nguoi dung co click vao nut add khong
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];

                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if (isset($_POST['listok']) && ($_POST['listok'])) {
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $kyw = '';
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw, $iddm);
                include "sanpham/list.php";
                break;

            case 'xoasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;

            case 'suasp':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];

                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;

            case 'dskh':
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'xoatk':
                if (isset($_GET['iduser']) && ($_GET['iduser'] > 0)) {
                    delete_taikhoan($_GET['iduser']);
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'dsbl':
                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            case 'xoabl':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;

            case 'listbill':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                $listbill = loadall_bill($kyw,0);
                include "bill/listbill.php";
                break;

        case 'xoadh':
                if (isset($_GET['idbill']) && ($_GET['idbill'] > 0)) {
                    delete_donhang($_GET['idbill']);
                }
                $listbill = loadall_bill("", 0);
                include "bill/listbill.php";
                break;

            case 'suadh':
                if (isset($_GET['idbill']) && ($_GET['idbill'] > 0)) {
                    $bill=loadone_bill($_GET['idbill']);
                }
                $listbill = loadall_bill("", 0);
                include "bill/update.php";
                break;

            case 'updatedh':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $idbill = $_POST['idbill'];
                    $bill_status = $_POST['bill_status'];
                    $bill_name = $_POST['bill_name'];
                    $bill_email = $_POST['bill_email'];
                    $bill_address = $_POST['bill_address'];
                    $bill_tel = $_POST['bill_tel'];
                    $total = $_POST['total'];
                    $ngaydathang = $_POST['ngaydathang'];
                    update_donhang($idbill,$bill_name,$bill_address,$bill_email,$bill_tel,$total,$ngaydathang);
                    $thongbao = "Cập nhật thành công";
                }
                $listbill = loadall_bill("", 0);
                include "bill/listbill.php";
                break;

            case 'home':   
                $listthongke=loadall_thongke();         
                include "home.php";
                break;

            

            default:
                include "home.php";
                break;
        }
    }

    //controller
    //include "home.php";
    include "footer.php";
}else{
    echo 'Bạn không phải admin' ?>
    <button><a href="../index.php">Trở về trang chủ</a></button>
<?php } ?>

