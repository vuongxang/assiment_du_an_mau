<!DOCTYPE html>
<html>
<div class="product-header mt-4">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-6">
      <img src="<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>" alt="" class="img-thumbnail" id="img-main">
      <div class="row">
      </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 p-0 infomation">
      <div class="catelogy">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item "><a href="#" class="text-dark font-weight-bolder">TRANG CHỦ</a></li>
            <li class="breadcrumb-item "><a href="#" class="text-dark font-weight-bolder">SHOP</a></li>
          </ol>
        </nav>
      </div>
      <div class="content-infomation-healding">
        <h2><a href="" class="text-dark"><?= $ten_hh ?></a></h2>
        <hr>
      </div>
      <div class="content-infomation-body">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-9">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col prince-del">Giá gốc:<del> $<?= number_format($don_gia, 2) ?></del></th>
                  <th scope="col prince">Giá khuyến mãi: $<?= $don_gia-$don_gia*$giam_gia/100 ?></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th colspan="2">Thông tin sản phẩm:</td>
                </tr>
                <tr>
                  <td>Tình trạng: Mới 100%</td>
                  <td>Mã hàng: <?= $ma_hh ?></td>
                </tr>
              </tbody>
            </table>
            <hr>
            <div class="mua-hang text-center border-bottom pb-3">
              <button type="button" class="btn btn-danger">MUA HÀNG</button>
            </div>
            <div class="footer-infomation">
              <p class="border-bottom">
                Từ khóa: đồng hồ Chronograp, đồng hồ nam, đồng hồ nam 6 kim, đồng hồ nam ontheedge
              </p>
              <div class="social-icon p-2">
                <span><a href=""><i class="fab fa-facebook-square text-secondary"></i></a></span>
                <span><a href=""><i class="fab fa-instagram-square text-secondary"></i></a></span>
                <span><a href=""><i class="fab fa-twitter-square text-secondary"></i></a></span>
                <span><a href=""><i class="fab fa-youtube-square text-secondary"></i></a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End product-header-->
<hr>
<div class="product-body">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#">MÔ TẢ</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">THÔNG TIN BỔ SUNG</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">ĐÁNH GIÁ (0)</a>
    </li>
  </ul>
  <div class="content-text pt-4">
    <?= $mo_ta ?>
  </div>
</div>
<?php require 'binh-luan.php'; ?>
<?php require 'hang-cung-loai.php'; ?>
</html>
