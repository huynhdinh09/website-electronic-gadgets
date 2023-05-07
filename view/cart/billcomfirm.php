<div class="row1">
    <div class="row1 mb">
        <div class="boxtrai mr">
            <div class="row1 mb">
                <div class="boxtitle">CẢM ƠN</div>
                <div class="row1 boxcontent" style="text-align:center">
                    <h2>Cảm ơn quý khách đã đặt hàng!</h2>
                </div>
            </div>
            <?php
            if (isset($bill) && (is_array($bill))) {
                extract($bill);
            }
            ?>
            <div class="row1 mb">
                <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
                <div class="row1 boxcontent menudoc thongtindonhang" style="text-align:center">
                    <ul>
                        <li>- Mã đơn hàng: HD<?= $bill['idbill']; ?></li>
                        <li>- Ngày đặt hàng: <?= $bill['ngaydathang']; ?></li>
                        <li>- Tổng đơn hàng: <?= $bill['total']; ?> triệu</li>
                        <li>- Phương thức thanh toán: <?= $bill['bill_pttt']; ?></li>
                    </ul>
                </div>
            </div>
            <div class="row1 mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row1 boxcontent billform">
                    <table>
                        <tr>
                            <td>Người đặt hàng: </td>
                            <td><?= $bill['bill_name']; ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?= $bill['bill_address']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $bill['bill_email']; ?></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><?= $bill['bill_tel']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row1 mb">
                <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
                <div class="row1 boxcontent viewcart">
                    <table>

                        <?php
                        bill_chi_tiet($billct);
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="boxphai">
            <?php include "view/boxright.php"; ?>
        </div>
    </div>
</div>