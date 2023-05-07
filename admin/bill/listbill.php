<div class="row1">
    <div class="row1 frmtitle mb">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <form action="index.php?act=listbill" method="post">
        <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row1 frmcontent">
        <div class="row1 mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG HÀNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>THAO TÁC</th>
                </tr>
                <?php
                foreach ($listbill as $bill) {
                    extract($bill);
                    $suadh = "index.php?act=suadh&idbill=" . $idbill;
                    $xoadh = "index.php?act=xoadh&idbill=" . $idbill;
                    $kh = $bill["bill_name"] . '
                            <br>' . $bill["bill_email"] . '
                            <br>' . $bill["bill_address"] . '
                            <br>' . $bill["bill_tel"];
                    $ttdh = get_ttdh($bill['bill_status']);
                    $countsp = loadall_cart_count($bill['idbill']);


                    echo '<tr>
                                <td><input type="checkbox" name="chontatca" id="selectall"></td>
                                <td>HD-' . $bill['idbill'] . '</td>
                                <td>' . $kh . '</td>
                                <td>' . $countsp . '</td>
                                <td><strong>' . $bill['total'] . '</strong> Triệu VNĐ</td>
                                <td>' . $ttdh . '</td>
                                <td>' . $bill['ngaydathang'] . '</td>
                                <td><a href="' . $suadh . '" ><input type="button" style="background-color: blue;color: white;" value="Sửa"></a>
                                <a href="' . $xoadh . '"><input type="button" style="background-color: red;color: white;" value="Xóa"></a></td>
                             </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row1 mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
        </div>
    </div>
</div>