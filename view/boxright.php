<div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                            if(isset($_SESSION['user'])){
                              extract($_SESSION['user']);    
                        ?>
                            <div class="row mb10">
                                Xin chào<br>
                                <?=$user?>
                            </div>
                            <div class="row mb10">
                                <li>
                                <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                </li>
                                <li>
                                <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                </li> 
                                <?php if($role==1){?>
                                <li>
                                <a href="admin/index.php">Đăng nhập Admin</a>
                                </li>
                                <?php }?>
                                <li>
                                <a href="index.php?act=thoat">Thoát</a>
                                </li>
                            </div>

                        <?php
                            }else{
                        ?>

                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập<br>
                                <input type="text" name="user">
                            </div>
                            <div class="row mb10">
                                Mật khẩu<br>
                                <input type="password" name="pass">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng ký</a>
                        </li>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '<li>
                                        <a href="'.$linkdm.'">'.$tendanhmuc.'</a>
                                    </li>';
                            }
                            ?>
                            <!-- <li><a href="#">Vòng cổ</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Hoa tai</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Lắc tay</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Nhẫn</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Trâm cài tóc</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Các loại Charm</a></li> -->
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw">
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">SẢN PHẨM YÊU THÍCH</div>
                    <div class=" row boxcontent">
                        <?php
                            foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $img=$img_path.$img;
                                echo '<div class="row mb10 top10">
                                        <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                        <a href="'.$linksp.'">'.$tensp.'</a>
                                     </div>';
                            }
                            ?>
                        <!-- <div class="row mb10 top10">
                            <img src="view/img/vong1.webp" alt="">
                            <a href="#">Dây bạc Timeless</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/cham2.webp" alt="">
                            <a href="#">Charm phủ vàng</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/hoatai5.webp" alt="">
                            <a href="#">Hoa tai rơi </a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/vong2.webp" alt="">
                            <a href="#">Dây Bạc Đính Đá</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/daychuyen2.jpg" alt="">
                            <a href="#">Dây chuyền Vàng</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/cham3.webp" alt="">
                            <a href="#">Mặt dây chuyền</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/nhanvang.webp" alt="">
                            <a href="#">Nhẫn Vàng 14k</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/lactay.webp" alt="">
                            <a href="#">Lắc tay mềm</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/bongtai.webp" alt="">
                            <a href="#">Hoa tai đỏ</a>
                        </div>
                         -->

                    </div>
                </div>