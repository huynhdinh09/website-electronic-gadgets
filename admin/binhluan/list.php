<div class="row1">
    <div class="row1 frmtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h41>
    </div>
    <div class="row1 frmcontent">
        <div class="row1 mb10 frmdsloai">
            <table>
                <tr>
                    
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>Iduser</th>
                    <th>Idpro</th>
                    <th>Ngày bình luận</th>

                    <th></th>
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $suabl = "index.php?act=suabl&id=" . $id;
                    $xoabl = "index.php?act=xoabl&id=" . $id;

                    echo '<tr>
                      
                        <td>' . $id . '</td>
                        <td>' . $noidung . '</td>
                        <td>' . $iduser . '</td>
                        <td>' . $idpro . '</td>
                        <td>' . $ngaybinhluan . '</td>
                        <td><a href="' . $xoabl . '"><input type="button" style="background-color: red;color: white;" value="Xóa"></a></td>
                        </tr>';
                }
                ?>

            </table>
        </div>
        <!-- <div class="row1 mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
        </div> -->
    </div>
</div>