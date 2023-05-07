<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];//mảng kết hợp get post cookie
$dsbl = loadall_binhluan($idpro);
?>

    <div class="row1 mb ">
        <div class="boxtitle bg-dark text-white text-center">Bình Luận</div>
        <div class="binhluan boxcontent2 ">
            <table>
                <?php

                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>' . $noidung . '</td>';
                    echo '<td>' . $iduser . '</td>';
                    echo '<td>' . $ngaybinhluan . '</td></tr>';
                }
                ?>
            </table>

        </div>
        <div class="boxfooter binhluanform">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <textarea name="noidung" cols="119" rows="5"></textarea>
                <!-- <input class="" type="text" name="noidung"> -->
                <input type="submit" class="btn btn-primary" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>

        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['iduser'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>


