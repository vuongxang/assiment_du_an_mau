<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Online Shopping Center</title>
    <script src="<?= $CONTENT_URL ?>/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/all.min.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/main.css?v=2">
</head>

<body>
    <div>
        <header>
            <div class="topbar border-bottom border-secondary">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <span>Chào mừng đến với Xshop online!</span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="top-menu">
                                <ul class="nav justify-content-end">
                                    <li class="nav-item"><a class="nav-link text-dark" href="#">Giỏ hàng</a></li>
                                    <li class="nav-item"><a class="nav-link text-dark" href="#">Cửa hàng</a></li>
                                    <li class="nav-item"><a class="nav-link text-dark" href="#">Tài khoản</a></li>
                                    <li class="nav-item"><a class="nav-link text-dark" href="#">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End topbar-->
            <div class="container">
                <div class="d-flex justify-content-between align-items-center row mt-4 mb-4">
                    <div class="logo col-lg-3 col-md-3 col-md-6">
                        <a href=""><img src="<?= $CONTENT_URL ?>/images/logo.png" width="150px"></a>
                    </div>
                    <div class="form-seach-product col-lg-6 col-md-6 col-md-12">
                        <form action="<?=$SITE_URL?>/hang-hoa/liet-ke.php" class="form-inline my-2 my-lg-0">
                            <div class="input-group search-form">
                                <input type="text" name="keywords" class="form-control border-primary" placeholder="" value="<?= isset($_GET['keywords'])? $_GET['keywords'] : null ?>">
                                <div class="input-group-append border-primary">
                                    <button class="input-group-text" ><i class="fa fa-search text-primary"></i></button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="logo col-lg-3 col-md-3 col-md-6">
                        <a href="<?= $SITE_URL ?>/trang-chinh?trang-chu" class="icon-cart d-flex justify-content-end">
                            <div class="icon d-flex align-items-center pr-2">
                                <i class="fa fa-shopping-cart text-dark icon-card" aria-hidden="true"></i>
                                <span class="rounded-circle bg-danger pl-2 pr-2 text-white card-quantity">0</span>
                            </div>
                            <div class="info-cart">
                                <p class="m-0 pl-2 text-dark font-weight-bolder">Giỏ hàng</p>
                                <span class="text-danger font-weight-bolder">0đ</span>
                            </div>
                            <span class="clear"></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="main-menu bg-primary">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php require 'layout/menu.php'; ?>
                    </div>
                </nav>
            </div>
        </div>
        <!--End main-menu -->
        <div class="container">
            <div class="slider mt-4">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= $CONTENT_URL ?>/images/sliders/banner3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <!-- <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!--End slider-->
        <div class="main">
            <div class="container">
                <div class="row">
                    <article class="col-lg-9 col-md-9 col-sm-12 mt-4">
                        <div>
                        <?php require $VIEW_NAME; ?>
                        </div>
                    </article>
                    <aside class="col-lg-3 col-md-3 col-sm-12">
                        <!--LOGIN-->
                        <section class="session-login">
                            <div class="border rounded mb-4 mt-4">
                                <?php require 'layout/dang-nhap.php'; ?>
                            </div>
                        </section>
                        <!--CATALOG-->
                        <section class="session-catalog">
                            <div class="border rounded mb-4 ">
                                <?php require 'layout/loai-hang.php'; ?>
                            </div>

                        </section>

                        <!--FAVORITE-->
                        <section class="session-favorite">
                            <div class="border rounded mb-4">
                                <?php require 'layout/top10.php'; ?>
                            </div>
                        </section>

                    </aside>
                </div>
            </div>
        </div>
        <footer class="bg-dark">
        <div class="container-fluid bg-secondary mt-4">
    <div class="container text-light pt-4">
      <div class="row">
        <div class="col-sm-6 col-lg-3 about">
          <div class="footer-healding border-bottom mb-4">
            <h2>About Us</h2>
          </div>
          <div class="footer-body">
            <p>XSHOP - Siêu thị online</p>
            <p>địa chỉ: 295 Định Công - Hoàng Mai - Hà Nội</p>
            <p>Hotline: 0985246458</p>
            <p>
              <span><a href=""><i class="fab fa-facebook-square"></i></a></span>
              <span><a href=""><i class="fab fa-instagram-square"></i></a></span>
              <span><a href=""><i class="fab fa-twitter-square"></i></a></span>
              <span><a href=""><i class="fab fa-youtube-square"></i></a></span>

            </p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 about">
          <div class="footer-healding border-bottom mb-4">
            <h2>Google map</h2>
          </div>
          <div class="footer-body">
            <div class="google-map border border-dark">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2697187311574!2d105.82949071422432!3d20.981822686023783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac5f1f3e5e37%3A0x1d3484aa96896e01!2zMjk1IMSQ4buLbmggQ8O0bmcsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1592410569379!5m2!1svi!2s"
                width="100%" height="160px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 about">
          <div class="footer-healding border-bottom mb-4">
            <h2>Tags</h2>
          </div>
          <div class="footer-body">
            <span><a href="">tag1</a></span>
            <span><a href="">tag2</a></span>
            <span><a href="">tag3</a></span>
            <span><a href="">tag3</a></span>
            <span><a href="">tag3</a></span>
            <span><a href="">tag3</a></span>
            <span><a href="">tag3</a></span>
            <span><a href="">tag3</a></span>
            <span><a href="">tag3</a></span>
            <span><a href="">tag3</a></span>
            <span><a href="">tag3</a></span>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 about">
          <div class="footer-healding border-bottom mb-4">
            <h2>NEWSLETTER</h2>
          </div>
          <div class="footer-body mb-4">
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
              tincidunt ut
              laoreet.

              (insert contact form here)
            </p>
            <img src="images/dang-ky-bo-cong-thuong.png" alt="" width="70%">
          </div>
        </div>
      </div>
    </div>
  </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>