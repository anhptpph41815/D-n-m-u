<?php
    function insert_danhmuc($tenloai){
        $sql="insert into danhmuc(tendanhmuc) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql= "delete from danhmuc where id=".$id;
        pdo_query($sql);
    }
    function loadall_danhmuc(){
        $sql= "select * from danhmuc order by id desc";
        $listdm=pdo_query($sql);
        return $listdm;
    }
    function loadone_danhmuc($id){
        $sql= "select * from danhmuc where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_dm($id,$tenloai){
        $sql="update danhmuc set tendanhmuc='".$tenloai."' where id= ".$id;
        pdo_execute($sql);
    }
?>