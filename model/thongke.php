<?php
    function load_thongke_sanpham_danhmuc(){
        $sql = "SELECT dm.id, dm.tendanhmuc, COUNT(*) 'soluong', MIN(gia) 'gia_min', MAX(gia) 'gia_max',
        AVG(gia) 'gia_avg' FROM danhmuc dm JOIN sanpham sp ON dm.id=sp.iddm GROUP BY dm.id, dm.tendanhmuc 
        ORDER BY soluong DESC";
        return pdo_query($sql);
    }
?>