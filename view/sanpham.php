<div class="row1 mb ">
    <div class="boxtrai mr ">
        <div class="row1 mb">
            <div class="boxtitle"><strong><?=$tendm?></strong> </div>
            <div class="boxcontent row1">
                <?php
                    $i=0;
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$idsp;
                        $hinh=$img_path.$img;
                        if(($i==2)||($i==5)||($i==8)||($i=11)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        echo '<div class="boxsp ' . $mr . '">
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