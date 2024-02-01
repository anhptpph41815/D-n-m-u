<div class="row">
            <div class="row formtitle">
                <h3>THỐNG KÊ SẢN PHẨM DANH MỤC</h3>
            </div>
            <div class="row formcontent">
                    <div class="row mb10 formdsloai">
                     <table>
                        <tr>
                            <th>MÃ LOẠI</th>
                            <Th>TÊN LOẠI</Th>
                            <Th>SỐ LƯỢNG</Th>
                            <Th>GIÁ NHỎ NHẤT</Th>
                            <Th>GIA LỚN NHẤT</Th>
                            <Th>GIÁ TRUNG BÌNH</Th>
                         
                        </tr>
                        
                        <?php
                            foreach($dsthongke as $thongke){
                                extract($thongke)
                        ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $tendanhmuc ?></td>
                            <td><?php echo $soluong ?></td>
                            <td>$ <?php echo $gia_min ?></td>
                            <td>$ <?php echo $gia_max ?></td>
                            <td>$ <?php echo number_format($gia_avg ,2) ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                        
                     </table>
                     
                    </div>
                    <div class="row mb10">
                       <a href="index.php?act=bieudo"><input type="button" value="XEM BIỂU ĐỒ"></a> 
                    </div>
                </form>
            </div>
        </div>