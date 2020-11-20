<div class="form-gop-y pt-4 mt-4">
              <form action="<?=$SITE_URL?>/trang-chinh/luu-gop-y.php" class="pt-4">
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
                  <label for="tieu_de" class="col-sm-3 col-form-label">Tiêu đề</label>
                  <div class="col-sm-9">
                    <input name="tieu_de" type="text" class="form-control" placeholder="Địa chỉ">
                    <p class="text-danger"><?= isset($tieu_de_exist)? $tieu_de_exist :"" ?></p>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="contact" class="col-sm-3 col-form-label">Nội dung góp ý</label>
                  <div class="col-sm-9">
                    <textarea name="noi_dung" class="form-control " rows="5" id="validationTextarea" placeholder="Nội dung góp ý"></textarea>
                    <p class="text-danger"><?= isset($noi_dung_exist)? $noi_dung_exist :"" ?></p>
                  </div>
                </div>
                <div class="buttom-contact text-center">
                  <p class="text-danger"><?= isset($msg)? $msg: "" ?></p>
                  <button name="btn_lien_he" class="btn btn-primary text-white">Gửi Góp ý</button>
                </div>
              </form>
            </div>