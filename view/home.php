<div class="row mb">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner">
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="view/img/banner4.jpg" style="width:100%">
                        <div class="text"></div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="view/img/banner2.png" style="width:100%">
                        <div class="text"></div>
                        </div>

                        <div class="mySlides fade">
                        <div class="numbertext"></div>
                        <img src="view/img/banner6.jpg" style="width:100%">
                        <div class="text"></div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $i=0;
                     foreach ($spnew as $sp) {
                        extract($sp);
                        $hinh=$img_path.$img;
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        if (($i==2)||($i==5)||($i==8)) {
                            $mr="";
                        } else {
                            $mr="mr";
                        }
                        
                        echo '<div class="boxsp '.$mr.'">
                                <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                <p>'.$gia.'</p>
                                <a href="'.$linksp.'">'.$tensp.'</a>
                            </div>';
                        $i+=1;
                     }
                    ?>
                    <!-- <div class="boxsp mr">
                        <div class="row img"><img src="img/bongtaivang.png" alt=""></div>
                        <p>$30</p>
                        <a href="">Charm Vàng</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="img/daychuyen1.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="">Dây chuyền</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"><img src="img/daychuyen2.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="">Dây chuyền vàng</a>
                    </div>

                    <div class="boxsp mr">
                        <div class="row img"><img src="img/dayco.png" alt=""></div>
                        <p>$30</p>
                        <a href="">Vòng cổ</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="img/lacvong1.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="">Lắc tay</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"><img src="img/nhankimcuong.png" alt=""></div>
                        <p>$30</p>
                        <a href="">Nhẫn kim cương</a>
                    </div>

                    <div class="boxsp mr">
                        <div class="row img"><img src="img/hoatai1.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="">Hoa tai</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="img/anh4.webp" alt=""></div>
                        <p>$30</p>
                        <a href="">Dây chuyền bạc</a>
                    </div>
                    <div class="boxsp">
                        <div class="row img"><img src="img/nhan7.jpg" alt=""></div>
                        <p>$30</p>
                        <a href="">Nhẫn vàng</a>
                    </div> -->


                </div>
            </div>
            <div class="boxphai">
                <?php
                    include "boxright.php";
                ?>
            </div>
        </div>