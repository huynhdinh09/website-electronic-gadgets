<div class="row1 mb">
    <div class="boxtrai mr">
        <div class="row1 mb">
            <div class="boxtitle">GIỎ HÀNG</div>
            <div class="row1 boxcontent viewcart">
                <table>
                    <?php
                    viewcart(1);
                    ?>
                </table>
            </div>
        </div>
        <div class="">
            <a href="index.php?act=bill"><input type="submit" value="ĐỒNG Ý ĐẶT HÀNG"></a>
            <a href="index.php?act=delcart"><input type="button"value="XÓA GIỎ HÀNG"></a>
        </div>
    </div>

    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>