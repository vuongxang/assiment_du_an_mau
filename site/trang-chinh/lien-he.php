<section class="contact">
    <div class="container">
      <div class="contact-content border-top mt-4">
        <div class="contact-title">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white">
              <li class="breadcrumb-item"><a href="index.html" class="text-body">TRANG CHỦ</a></li>
              <li class="breadcrumb-item active" aria-current="page">LIÊN HỆ</li>
            </ol>
          </nav>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 p-4">
            <p class="font-weight-bold">Công ty TNHH Xshop Việt Nam</p>
            <p class="pb-2">Địa chỉ : Số 122 Lô C3 Khu đô thị mới Đại Kim - Định Công, đường Nguyễn Cảnh Dị, Đại Kim, Hoàng Mai, Hà
              Nội</p>
            <p class="pb-2">Hotline: 0243.9191.555 - 0976.835.444</p>
            <p class="pb-2">Like us: https://www.facebook.com/noithatdecorhanoi</p>
            <p class="pb-2"> <i class="fab fa-twitter-square text-muted pr-1 "></i> Follow us: <a href="">https://twitter.com/HDdecoration</a></p>
            <p class="pb-2"><i class="fab fa-youtube-square text-muted pr-1 "></i>Follow us: <a href="">https://www.youtube.com/channel/UCq8bahrXHjvWUZmJyBLea1Q</a></p>
            <p class="pb-2"><i class="fab fa-instagram-square text-muted pr-1 "></i>Follow us: <a href="">https://www.instagram.com/noithatdecor.vn/</a></p>
            <p class="pb-2"><i class="fab fa-google-plus-square pr-1 "></i>Follow us: <a href="">https://plus.google.com/u/5/114162174668291855308/</a></p>
            <p class="pb-2"><i class="fas fa-envelope-square pr-1 "></i>Email: <a href="">noithatdecor.vn@gmail.com</a> </p>
            <div class="form-contact pt-4 mt-4">
              <form action="<?=$SITE_URL?>/trang-chinh/luu-lien-he.php" class="pt-4">
                <div class="form-group row">
                  <label for="fullName" class="col-sm-3 col-form-label">Họ và tên</label>
                  <div class="col-sm-9">
                    <input type="text" name="ho_ten" class="form-control" id="fullName" placeholder="Họ và tên">
                    <p class="text-danger"><?= isset($ho_ten_exist)? $ho_ten_exist :"" ?></p>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="PhoneNumber" class="col-sm-3 col-form-label">Số điện thoại</label>
                  <div class="col-sm-9">
                    <input name="sdt" type="text" class="form-control" id="PhoneNumber" placeholder="Số điện thoại">
                    <p class="text-danger"><?= isset($sdt_exist)? $sdt_exist :"" ?></p>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="address" class="col-sm-3 col-form-label">Địa chỉ</label>
                  <div class="col-sm-9">
                    <input name="dia_chi" type="text" class="form-control" placeholder="Địa chỉ">
                    <p class="text-danger"><?= isset($dia_chi_exist)? $dia_chi_exist :"" ?></p>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Email" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input name="email" type="email" class="form-control" id="Email" placeholder="Email">
                    <p class="text-danger"><?= isset($email_exist)? $email_exist :"" ?></p>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="contact" class="col-sm-3 col-form-label">Nội dung liên hệ</label>
                  <div class="col-sm-9">
                    <textarea name="noi_dung" class="form-control " id="validationTextarea" placeholder="Nội dung liên hệ"></textarea>
                    <p class="text-danger"><?= isset($noi_dung_exist)? $noi_dung_exist :"" ?></p>
                  </div>
                </div>
                <div class="buttom-contact text-center">
                  <p class="text-danger"><?= isset($msg)? $msg: "" ?></p>
                  <button name="btn_lien_he" class="btn btn-primary text-white">Gửi liên hệ</button>
                </div>
              </form>
            </div>
          </div>
          <!--End col left-->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="google-map border border-dark">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2697187311574!2d105.82949071422432!3d20.981822686023783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac5f1f3e5e37%3A0x1d3484aa96896e01!2zMjk1IMSQ4buLbmggQ8O0bmcsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1592410569379!5m2!1svi!2s"
                width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
            </div>
            <div class="contact-center">
              <div class="alert alert-danger border-danger rounded-lg mt-4 p-4" role="alert">
                <div class="contact-center-tittle text-center">
                  <h6 class="text-danger pb-3">HỖ TRỢ KHÁCH HÀNG</h6>
                </div>
                <div class="contact-center-body">
                  <div class="contact-center-body-top pb-3">
                    <p class="font-weight-bold">Tư vấn bán hàng</p>
                    <p class="text-muted"> <i class="fas fa-phone-volume pr-1 icon-contact"></i> 0243 9191 555 | Hotline 1</p>
                    <p class="text-muted"> <i class="fas far fa-envelope pr-1 icon-contact"></i>mosavn@gmail.com</p>
                    <p class="text-muted"> <i class="fas fa-phone-volume pr-1 icon-contact"></i> 0243 9191 555 | Hotline 2</p>
                    <p class="text-muted"> <i class="fas far fa-envelope pr-1 icon-contact"></i>mosavn@gmail.com</p>
                </div>
                <div class="contact-center-body-bottom">
                  <p class="font-weight-bold">Bộ phận kỹ thuật bảo hành</p>
                  <p class="text-muted"> <i class="fas fa-phone-volume pr-1 icon-contact"></i> 0243 9191 555 | Hotline 1</p>
                  <p class="text-muted"> <i class="fas far fa-envelope pr-1 icon-contact"></i>mosavn@gmail.com</p>
                  <p class="text-muted"> <i class="fas fa-phone-volume pr-1 icon-contact"></i> 0243 9191 555 | Hotline 2</p>
                  <p class="text-muted"> <i class="fas far fa-envelope pr-1 icon-contact"></i>mosavn@gmail.com</p>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>