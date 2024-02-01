<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath= "../upload/".$img;
     if (is_file($hinhpath)) {
         $hinh= "<img src='".$hinhpath."' height='80'>";
    } else {
        $hinh="không có hình";
    }
?>
<div class="row">
            <div class="row formtitle">
                <h3> CẬP NHẬT LOẠI HÀNG HÓA</h3>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data" > 
                    <div class="row mb10">
                        <!-- Mã sản phẩm<br>
                        <input type="text" name="masp" disabled> -->
                        <select name="iddm" >
                                <option value="0" selected>Tất cả</option>
                            <?php
                                foreach ($listdm as $danhmuc) {
                                    // extract($danhmuc);
                                    if($iddm==$danhmuc['id']) $s="selected"; else $s="";
                                    echo '<option value= "'.$danhmuc['id'].'" '.$s.'> '.$danhmuc['tendanhmuc'].' </option>';
                                }
                            ?>
                            
                            </select>
                    </div>
                    <div class="row mb10">
                        Tên sản phẩm<br>
                    <input type="text" name="tensp" value="<?=$tensp?>" >
                    </div>
                    <div class="row mb10">
                        Giá<br>
                    <input type="text" name="giasp" value="<?=$gia?>">
                    </div>
                    <div class="row mb10">
                        Hình ảnh<br>
                    <input type="file" name="hinh" >
                    <?=$hinh?>
                    </div>
                    <div class="row mb10">
                        Mô tả<br>
                    <textarea name="mota"  cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                   
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="nhập lại">
                       <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a> 
                    </div>
                    <?php
                        if(isset($Thongbao)&&($Thongbao!="")) echo $Thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>