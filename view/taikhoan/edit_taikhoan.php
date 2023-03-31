<div class="row1 mb ">
    <div class="boxtrai mr ">
        <div class="row1 mb">
            <div class="boxtitle">Cập Nhật Tài Khoản</div>
            <div class="boxcontent row1 frmtaikhoan">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row1 mb10">Email
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="row1 mb10">Tên đăng nhập
                        <input type="user" name="user" value="<?=$user?>">
                    </div>
                    <div class="row1 mb10">Mật khẩu
                        <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row1 mb10">Địa chỉ
                        <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row1 mb10">Điện thoại
                        <input type="text" name="tel" value="<?=$tel?>">
                    </div>
                    <div class="row1 mb10">
                        <input type="hidden" name="iduser" value="<?=$iduser?>">
                        <input type="submit" value="Cập nhật" name="capnhat">

                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php

                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>

    </div>

    <div class="boxphai ">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>