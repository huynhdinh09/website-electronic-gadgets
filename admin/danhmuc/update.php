<?php
if (is_array($dm)) {
    extract($dm);
}

?>
<div class="row1">
    <div class="row1 frmtitle ">
        <h1>Cập nhật lại hàng</h1>
    </div>
    <div class="row1 frmcontent">
        <form action="index.php?act=updatedm" method="POST">
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Mã loại:</h5>
                <input class="inputdm" type="text" name="maloai">
            </div>
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Tên loại:</h5>
                <input class="inputdm" type="text" name="tenloai" value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
            </div>
            <div class="row1 mb10">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id != "")) echo $id; ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>