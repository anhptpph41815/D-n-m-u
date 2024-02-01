<?php
    function loadall_binhluan($idsp){
        $sql = "SELECT binhluan.noidung,binhluan.ngaybinhluan,taikhoan.user FROM binhluan
        JOIN taikhoan on binhluan.iduser=taikhoan.id
        JOIN sanpham on binhluan.idpro=sanpham.id
        WHERE sanpham.id=$idsp";
        $result = pdo_query($sql);
        return $result;
    }
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
        $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function load_all_cmt($idpr){
    $sql = "SELECT * FROM binhluan";
    if ($idpr > 0) {
        $sql .= " AND idpro='" . $idpr . "'";
    }
    $sql .= " ORDER BY id desc";
    $result = pdo_query($sql);
    return $result;
    }
    function delete_cmt($id){
    $sql = "delete from binhluan where id=" . $id;
    $result = pdo_execute($sql);
    }
?>
