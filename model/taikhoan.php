<?php
function loadall_taikhoan(){
    $sql="select * from taikhoan order by iduser desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan($email, $user, $pass)
{
    $sql = "insert into taikhoan(email,user,pass) values('$email', '$user', '$pass')";
    pdo_execute($sql);
}
function checkuser($user,$pass)
{
    $sql = "select * from taikhoan where user='" . $user."' AND pass='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email)
{
    $sql = "select * from taikhoan where email='" . $email."' ";
    $sp = pdo_query_one($sql);
    return $sp;
}

function   update_taikhoan($iduser,$user,$pass,$email,$address,$tel)
{      
        $sql = "update taikhoan set user='" . $user . "',pass='" . $pass . "',email='" . $email . "',address='" . $address . "',tel='" . $tel . "' where iduser=" . $iduser;
    pdo_execute($sql);
}
function delete_taikhoan($iduser){
    $sql="delete from taikhoan where iduser=".$iduser;
    pdo_execute($sql);
}
?>
