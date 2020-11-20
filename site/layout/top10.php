<!DOCTYPE html>
<html>

<body>
    <div>
        <div class="bg-primary text-center text-white p-2">TOP 10 YÊU THÍCH</div>
        <div class="pt-3 pl-2 pr-2">
            <ul class="list-unstyled">
                <?php
                require_once '../../dao/hang-hoa.php';
                $hh_array = hang_hoa_select_top10();
                foreach ($hh_array as $hh) {
                    $href = "$SITE_URL/hang-hoa/chi-tiet.php?ma_hh=$hh[ma_hh]";
                    echo "
                        <li class='media border-bottom mt-2'>
                            <img class='mr-3' width='40px' src='$CONTENT_URL/images/products/$hh[hinh]'>
                            <div class='media-body'>                                
                                <h5><a class='text-dark' href='$href'>$hh[ten_hh]</a></h5>
                            </div>
                        </li>
                            
                        ";
                }
                ?>
            </ul>

        </div>
    </div>
</body>

</html>