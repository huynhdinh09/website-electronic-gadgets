<!-- mới -->
<div class="row1">
    <div class="row1 frmtitle">
        <h1>THÊM MỚI HÀNG HÓA</h51>
    </div>
    <div class="row1 frmcontent">
        <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="row1 mb10">
            <h5 style="font-weight: bold;">Danh mục:</h5>
                <select name="iddm">
                    <?php
                    foreach ($listdanhmuc as $key => $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Tên sản phẩm:</h5>
                <input type="text" name="tensp">
            </div>
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Giá sản phẩm:</h5>
                <input type="text" name="giasp">
            </div>
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Hình ảnh:</h5>
                <input type="file" name="hinh">
            </div>
            <div class="row1 mb10">
                <h5 style="font-weight: bold;">Mô tả:</h5>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row1 mb10">
                <input type="submit" name="themmoi" value="Thêm mới">
                
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