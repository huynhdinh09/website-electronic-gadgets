<?php
if (is_array($bill)) {
    extract($bill);
}

?>
<div class="row1">
    <div class="row1 frmtitle ">
        <h1>Cập nhật lại đơn hàng</h1>
    </div>
    <div class="row1 frmcontent">
        <form action="index.php?act=updatedh" method="POST" enctype="multipart/form-data">
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Mã đơn hàng</h5>
                <input type="text" name="madonhang" value="<?= $bill['idbill'] ?>">
            </div>
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Tình trạng đơn hàng</h5>
                <input type="text" name="bill_status" value="<?= $bill_status ?>">
            </div>
            <div class="row1 mb10">
            <h3 style="font-weight: bold;">Khách hàng</h3>
                <h5 style="font-weight: bold;">Tên khách hàng</h5>
                <input class="mb10" type="text" name="bill_name" value="<?= $bill['bill_name'] ?>">
                <h5 style="font-weight: bold;">Email</h5>
                <input class="mb10" type="email" name="bill_email" value="<?= $bill['bill_email'] ?>">
                <h5 style="font-weight: bold;">Địa chỉ</h5>
                <input class="mb10" type="text" name="bill_address" value="<?= $bill['bill_address'] ?>">
                <h5 style="font-weight: bold;">Số điện thoại</h5>
                <input class="mb10" type="number" name="bill_tel" value="<?= $bill['bill_tel'] ?>">
            </div>
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Giá trị đơn hàng</h5>
                <input type="text" name="total" value="<?= $bill['total'] ?>">

            </div>
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Ngày đặt hàng</h5>
                <input type="date" name="ngaydathang" value="<?= $bill['ngaydathang'] ?>">

            </div>
            <div class="row1 mb10">
                <input type="hidden" name="idbill" value="<?= $idbill ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listbill"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>