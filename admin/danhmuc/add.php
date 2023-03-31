<!-- mới -->
<div class="row1">
    <div class="row1 frmtitle">
        <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row1 frmcontent">
        <form action="index.php?act=adddm" method="POST">
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Mã loại:</h5>
                <input type="text" name="maloai" id="">
            </div>
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Tên loại:</h5>
                <input type="text" name="tenloai" id="">
            </div>
            <div class="row1 mb10">
                <input type="submit" name="themmoi" value="Thêm mới">
                <!-- <input type="reset" value="Nhập lại"> -->
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