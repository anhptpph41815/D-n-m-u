<div class="row">
            <div class="row formtitle mb">
                <h3>DANH SÁCH SẢN PHẨM</h3>
            </div>
            <form action="index.php?act=listsp" method="post">
                            <input type="text" name="kyw">
                            <select name="iddm" >
                                <option value="0" selected>Tất cả</option>
                            <?php
                                foreach ($listdm as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value= "'.$id.'" > '.$tendanhmuc.' </option>';
                                }
                            ?>
                            
                            </select>
                        <input type="submit" name="listok" value="NEXT">
                        </form>
            <div class="row formcontent">
                
                    <div class="row mb10 formdsloai">
                       
                     <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <Th>TÊN SẢN PHẨM</Th>
                            <Th>GIÁ</Th>
                            <Th>HÌNH ẢNH</Th>
                            <Th>LƯỢT XEM</Th>
                            <th></th> 
                        </tr>
                        <?php
                        foreach ($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp= "index.php?act=suasp&id=".$id;
                            $xoasp= "index.php?act=xoasp&id=".$id;
                            $hinhpath= "../upload/".$img;
                            if (is_file($hinhpath)) {
                                $hinh= "<img src='".$hinhpath."' height='80'>";
                            } else {
                                $hinh="không có hình";
                            }
                            

                            echo' <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$tensp.'</td>
                            <td>'.$gia.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$luotxem.'</td>
                            <td> <a href="'.$suasp.'"> <input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></td> 
                        </tr>';
                        }
                        ?>
                        
                        
                     </table>
                     
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                       <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a> 
                    </div>
                </form>
            </div>
        </div>