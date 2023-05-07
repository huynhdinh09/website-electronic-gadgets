<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no photo";
}
?>
<div class="row1">
    <div class="row1 frmtitle ">
        <h1>Cập nhật lại hàng</h1>
    </div>
    <div class="row1 frmcontent">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row1 mb10">
            <h5 style="font-weight: bold;">Danh mục:</h5>
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $key => $danhmuc) {
                        extract($danhmuc);
                        if ($iddm == $id) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Tên sản phẩm:</h5>
                <input type="text" name="tensp" value="<?= $namesp ?>">
            </div>
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Giá sản phẩm:</h5>
                <input type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Hình ảnh:</h5>
                <input type="file" name="hinh">
                <?= $hinh ?>
            </div>
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Mô tả:</h5>
                <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
            </div>
            <div class="row1 mb10">
                <input type="hidden" name="id" value="<?= $idsp ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>