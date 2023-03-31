

<div class="row1 ">
    <div class="row1 frmtitle">
        <h1>DANH SÁCH TÀI KHOẢN</h41>
    </div>
    <!-- <div class="row1 mt-3" >
           
           <a href="index.php?act=adddm" style="float: right;"><input type="button" value="Nhập thêm"></a>

       </div> -->
    <div class="row1 frmcontent">
        <div class="row1 mb10 frmdsloai">
            <table>
                <tr >
                    
                    <th>MÃ TK</th>
                    <th>TÊN ĐĂNG NHÂP</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    // $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&iduser=" . $iduser;

                    echo '<tr>
                        
                        <td>' . $iduser . '</td>
                        <td>' . $user . '</td>
                        <td>' . $pass . '</td>
                        <td>' . $email . '</td>
                        <td>' . $address . '</td>
                        <td>' . $tel . '</td>
                        <td>' . $role . '</td>
                        <td><a href="' . $xoatk . '"><input type="button" style="background-color: red;color: white;" value="Xóa"></a></td>
                        </tr>';
                }
                ?>

            </table>
        </div>


    </div>
</div>