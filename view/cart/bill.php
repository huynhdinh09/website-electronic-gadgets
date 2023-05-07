<div class="row1 mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="row1 mb">
                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                <div class="row1 boxcontent billform">
                    <table>
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];

                        ?>
                            <tr>
                                <td>Người đặt hàng&ensp;</td>
                                <td><input type="text" name="user" value="<?= $name ?>"></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="address" value="<?= $address ?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" value="<?= $email ?>"></td>
                            </tr>
                            <tr>
                                <td>Điện thoại</td>
                                <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                            </tr>
                        <?php
                        } else {
                            echo '<h3>Quý khách vui lòng đăng ký/đăng nhập để đặt hàng. Xin cảm ơn!</h3>';
                        } ?>
                    </table>
                </div>
            </div>
            <div class="row1 mb">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row1 boxthanhtoan">
                    <table>
                        <tr>
                            <td><input type="radio" name="bill_pttt" checked>Thanh toán khi nhận hàng&emsp;</td>
                            <td><input type="radio" name="bill_pttt">Thanh toán thẻ tín dụng&emsp;</td>
                            <td><input type="radio" name="bill_pttt">Thanh toán bằng ví điện</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row1 mb">
                <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div class="row1 boxcontent viewcart">
                    <table>
                        <?php
                        viewcart(0);
                        ?>
                    </table>
                </div>
            </div>
            <div class="row1 mb bill">
                <input type="submit" value="TIẾP TỤC ĐẶT HÀNG" name="dongydathang">
            </div>
        </form>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>