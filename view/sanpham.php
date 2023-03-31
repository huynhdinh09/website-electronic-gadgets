<div class="row1 mb ">
    <div class="boxtrai mr ">
        <div class="row1 mb">
            <div class="boxtitle"><strong><?=$tendm?></strong> </div>
            <div class="boxcontent row1">
                <?php
                    $i=0;
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id1;
                        $hinh=$img_path.$img;
                        if(($i==2)||($i==5)||($i==8)||($i=11)){
                            $mr="";
                        }else{
                            $mr="mr";
                        }
                        echo '<div class="boxsp mr">
                            <div class="row1 img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                            <p>'.$price.' Triệu VNĐ</p>
                            <a href="'.$linksp.'">'.$name1.'</a>
                            </div>';
                        $i+=1;
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