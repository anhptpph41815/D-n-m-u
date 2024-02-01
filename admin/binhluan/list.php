<div class="row">
    <div class="row formtitle">
        <h3>DANH SÁCH BÌNH LUẬN</h3>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>ID </th>
                    <th>Nội Dung</th>
                    <th>ID User</th>
                    <th>ID pro</th>
                    <th>Ngày Bình Luận</th>
                    <th></th>
                </tr>
                    <?php
                    foreach ($list_binhluan as  $binhluan) {
                        extract($binhluan);
                        $linkdelete = "index.php?act=deletecmt&idcmt=" . $id;
                        echo ' <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>' . $id . '</td>
                <td>' . $noidung . '</td>
                <td>' . $iduser. '</td>
                <td>' . $idpro . '</td>
                <td>' . $ngaybinhluan. '</td>
                <td>
                <a href="'.$linkdelete.'"><input type="button" value="Xóa" onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></td>
                </td>
            </tr>';
                    }

                    ?>

                </table>
            </div>
            <div class="row mb10 ">
                <input type="button" value="CHỌN TẤT CẢ">
                <input type="button" value="BỎ CHỌN TẤT CẢ">
                <input type="button" value="XÓA MỤC ĐÃ CHỌN">
            </div>
    </form>
</div>