<div class="row1">
    <div class="row1 frmtitle mb-3">
        <h1>DANH SÁCH LOẠI HÀNG</h41>
    </div>
    <form action="index.php?act=listsp" method="POST">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $key => $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="Tìm kiếm">
        <a href="index.php?act=addsp" style="float:right;"><input type="button" style="background-color:rgb(28, 139, 98);color:antiquewhite;font-weight: bold;border-radius: 5px;padding: 5px;" value="Nhập thêm"></a>

    </form>
    <div class="row1 frmcontent">
        <div class="row1 mb10 frmdsloai">

            <table>
                <tr>
                    
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    
                    <th></th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $idsp;
                    $xoasp = "index.php?act=xoasp&id=" . $idsp;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "no photo";
                    }
                    echo '<tr>
                       
                        <td>' . $idsp . '</td>
                        <td>' . $namesp . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $price . '</td>
                    

                        <td><a href="' . $suasp . '" ><input type="button" style="background-color: blue;color: white;" value="Sửa"></a><a href="' . $xoasp . '"><input type="button" style="background-color: red;color: white;" value="Xóa"></a></td>
                        </tr>';
                }
                ?>

            </table>
        </div>
        <div class="row1 mb10">

          
        </div>

    </div>
</div>