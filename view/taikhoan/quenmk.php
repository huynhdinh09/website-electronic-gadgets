<div class="row1 mb ">
    <div class="boxtrai mr ">
        <div class="row1 mb">
            <div class="boxtitle">Quên Mật Khẩu</div>
            <div class="boxcontent row1 frmtaikhoan">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row1 mb10">Email
                        <input type="email" name="email">
                    </div>
                    
                    <div class="row1 mb10">
                        <input type="submit" value="Gửi" name="guiemail">

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