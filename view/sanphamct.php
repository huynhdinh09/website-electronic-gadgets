<div class="row1 mb ">
    <div class="boxtrai mr ">
        <div class="row1 mb">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle"><?= $namesp ?></div>
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
                    idpro: <?= $idsp ?>
                });
            });
        </script>
        <div class="row1" id="binhluan">

        </div>

        <div class="row1 mb">
            <div class="boxtitle">Sản Phẩm Cùng Loại</div>
            <div class="boxcontent row1">
            <?php
                    $i=0;
                    foreach ($sp_cungloai as $sp_cungloai) {
                        extract($sp_cungloai);
                        $linksp="index.php?act=sanphamct&idsp=".$idsp;
                        $hinh=$img_path.$img;
                        if(($i==2)||($i==5)||($i==8)||($i=11)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        echo '<div class="boxsp ' . $mr  . '">
                        <div class="row1 img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                        <p>' . $price . ' Triệu VNĐ</p>
                        
                        <div class="row1 btnviewcart ">
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="' . $idsp . '" >
                                <input type="hidden" name="name" value="' . $namesp . '" >
                                <input type="hidden" name="img" value="' . $img . '" >
                                <input type="hidden" name="price" value="' . $price . '" >
                                
                                <input class="themvaogiohang" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                            </form>
                        </div>
                        <a href="' . $linksp . '">' . $namesp . '</a>
                        </div>';
                    $i += 1;
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