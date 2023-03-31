<div class="row1 mb ">
    <div class="boxtrai mr ">
        <div class="row1 mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle"><?= $name1 ?></div>
            <div class="boxcontent row1">
                <?php

                $img = $img_path . $img;
                echo '<div class="row1 mb spct"><img src="' . $img . '" ></div>';
                echo $mota;

                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluan/binhluanform.php", {
                    idpro: <?= $id1 ?>
                });
            });
        </script>
        <div class="row1" id="binhluan">

        </div>

        <div class="row1 mb">
            <div class="boxtitle">Sản Phẩm Cùng Loại</div>
            <div class="boxcontent row1">
                <?php
                foreach ($sp_cungloai as $sp_cungloai) {
                    extract($sp_cungloai);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id1;
                    $hinh=$img_path.$img;
                    echo '<div class="boxsp mr">
                    <div class="row1 img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                    <p>' . $price . ' Triệu VNĐ</p>
                    <a href="' . $linksp . '">' . $name1 . '</a>
                </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <div class="boxphai ">
        <?php
        include "boxright.php";
        ?>
    </div>
</div>