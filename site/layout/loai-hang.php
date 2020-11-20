<!DOCTYPE html>
<html>
    <body>
        <div>
            <div class="bg-primary text-center text-white p-2">DANH MỤC</div>
            <div>
                <ul class="list-group list-group-flush">
                    
                <?php
                    require_once '../../dao/loai.php';
                    $loai_array = loai_select_all();
                    foreach ($loai_array as $loai) {
                        $href = "$SITE_URL/hang-hoa/liet-ke.php?ma_loai=$loai[ma_loai]";
                        echo "<li class='list-group-item'><span class='fa-fw select-all fas'></span><a class='text-dark' href='$href'>$loai[ten_loai]</a></li>";
                    }
                ?>
                </ul>
            </div>
            <div>
                <form class="form-group m-2" action="<?=$SITE_URL?>/hang-hoa/liet-ke.php">
                    <input class="form-control" name="keywords" placeholder="Từ khóa tìm kiếm" value="<?= isset($_GET['keywords'])? $_GET['keywords'] : null ?>">
                </form>                
            </div>            
        </div>
    </body>
</html>
