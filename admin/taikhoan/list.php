<div class="row">
            <div class="row formtitle">
                <h3>DANH SÁCH TÀI KHOẢN</h3>
            </div>
            <div class="row formcontent">
                    <div class="row mb10 formdsloai">
                     <table>
                        <tr>
                            <th></th>
                            <th>MÃ TÀI KHOẢN</th>
                            <Th>TÊN ĐĂNG NHẬP</Th>
                            <Th>MẬT KHẨU</Th>
                            <Th>EMAIL</Th>
                            <Th>ĐỊA CHỈ</Th>
                            <Th>ĐIỆN THOẠI</Th>
                            <Th>VAI TRÒ</Th>
                            <th></th> 
                        </tr>
                        <?php
                        foreach ($listtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            $suatk= "index.php?act=suatk&id=".$id;
                            $xoatk= "index.php?act=xoatk&id=".$id;
                            echo' <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$role.'</td>
                            <td> <a href="'.$suatk.'"> <input type="button" value="Sửa"></a> 
                            <a href="'.$xoatk.'"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"> 
                            
                            </tr>';
                        }
                        ?>
                        
                        
                     </table>
                     
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                    </div>
                </form>
            </div>
        </div>