<div class="row1 mb ">
    <div class="boxtrai mr ">
        <div class="row1 mb">
            <div class="boxtitle">Đăng Ký Thành Viên</div>
            <div class="boxcontent row1 frmtaikhoan">
                <form action="index.php?act=dangky" method="post">
                    <div class="row1 mb10">Email
                        <input type="email" name="email">
                    </div>
                    <div class="row1 mb10">Tên đăng nhập
                        <input type="user" name="user">
                    </div>
                    <div class="row1 mb10">Mật khẩu
                        <input type="password" name="pass">
                    </div>
                    <div class="row1 mb10">
                        <input type="submit" value="Đăng ký" name="dangky">

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