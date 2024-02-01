<div class="row">
            <div class="row formtitle">
                <h3>THÊM MỚI SẢN PHẨM</h3>
            </div>
            <div class="row formcontent">
                <!-- enctype="multipart/form-data": tải ảnh lên -->
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" > 
                    <div class="row mb10">
                        Danh mục<br>
                        <select name="iddm" >
                            <?php
                                foreach ($listdm as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value= "'.$id.'" > '.$tendanhmuc.' </option>';
                                }
                            ?>
                            
                        </select>
                    </div>
                    <div class="row mb10">
                        Tên sản phẩm<br>
                    <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        Giá<br>
                    <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                        Hình ảnh<br>
                    <input type="file" name="hinh" >
                    </div>
                    <div class="row mb10">
                        Mô tả<br>
                    <textarea name="mota"  cols="30" rows="10"></textarea>
                    </div>
                   
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                       <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a> 
                    </div>
                    <?php
                        if(isset($Thongbao)&&($Thongbao!="")) echo $Thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>