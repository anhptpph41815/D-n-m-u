<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
                extract($onesp);
            ?>
            <div class="boxtitle"><?=$tensp?></div>
            <div class=" row boxcontent">
            <?php
                $img=$img_path.$img;
                echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                echo $mota;
            ?>        
            </div>
        </div>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
            
                $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
            });
            </script>
            <div class="row" id="binhluan">

            </div> -->

        <div class="row mb">
            <div class="boxtitle">BÌNH LUẬN</div>
            <div class=" row boxcontent">
            <table>
                <?php
                foreach ($binhluan as $bl) {
                    extract($bl);
                    echo '<tr>
                    <td>'.$noidung.'</td>
                    <td>'.$user.'</td>
                    <td>'.$ngaybinhluan.'</td>
                  </tr>';
                }
                ?>
          </table>
        </div>

        <?php
            if (isset($_SESSION['user']['id']) and $_SESSION['user']['id']>0) {
               ?>
               <div class="box_search">
          <form action="index.php?act=sanphamct&idsp=<?=$id?>" method="POST">
            <input type="hidden" name="idpro" value="<?=$id?>">
            <input type="text" name="noidung"  >
            <input type="submit" name="guibinhluan" value="Gửi bình luận">
          </form>        
            </div>
               <?php

            }else{
                ?>

        <p style="color: red; padding-top: 10px;">Đăng nhập để bình luận !</p>
      <?php
            }
        ?>  
</div>
<!-- 
            <div class="row">
                <iframe src="view/binhluan/binhluanform.php?idpro: <?=$id?>" frameborder="0" width="100%" height="300px"></iframe>
            </div> -->

        <div class="row mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class=" row boxcontent">
                 <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp= "index.php?act=sanphamct&idsp=".$id;
                        echo '<li><a href="'.$linksp.'">'.$tensp.'</a></li>';
                    }
                 ?>      
            </div>
        </div>

    </div>
        <div class="boxphai">
            <?php
                include "boxright.php";
            ?>
        </div>
</div>