<div class="row1">
    <div class="row1 frmtitle">
        <h1>DANH SÁCH LOẠI HÀNG</h41>
    </div>
    <div class="row1 frmcontent">
        <div class="row1 mb10 frmdsloai">
            <div class="row1 mb10">
                <!-- <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn"> -->
                <a href="index.php?act=adddm" style="float: right;"><input type="button" style="background-color:rgb(28, 139, 98);color:antiquewhite;font-weight: bold;" value="Nhập thêm "> </a>

            </div>
            <table>
                <tr>

                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;

                    echo '<tr>
                       
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td><a href="' . $suadm . '" ><input type="button" style="background-color: blue;color: white;" value="Sửa"></a><a href="' . $xoadm . '"><input type="button" style="background-color: red;color: white;" value="Xóa"></a></td>
                        </tr>';
                }
                ?>

            </table>
        </div>


    </div>
</div>