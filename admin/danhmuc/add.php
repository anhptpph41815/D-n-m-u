<div class="row">
            <div class="row formtitle">
                <h3>THÊM MỚI LOẠI HÀNG HÓA</h3>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Mã loại<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        Tên loại<br>
                    <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                       <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a> 
                    </div>
                    <?php
                        if(isset($Thongbao)&&($Thongbao!="")) echo $Thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>