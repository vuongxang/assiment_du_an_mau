<?php
require '../../global.php';
require_once '../../dao/lien-he.php';
$SENDGRID_API_KEY = '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';


require '../../content/sendmail/vendor/autoload.php';
if (exist_param("btn_lien_he")){
    extract($_REQUEST);

    //Kiểm tra thông tin
    if (!preg_match("/^[A-Za-z ]{3,32}$/",$ho_ten)) {
        $ho_ten_exist = "! Họ tên Tiếng Việt không chứa ký tự đặc biệt";
    }
    
    $partent_sdt='/^0(\s|\.)?((3[2-9])|(5[689])|(7[06-9])|(8[1-9])|(9[0-46-9]))(\d)(\s|\.)?(\d{3})(\s|\.)?(\d{3})$/';
    if(!preg_match($partent_sdt,$sdt)){
        $sdt_exist = "! Số điện thoại không đúng";
    }
    
    if(strlen($dia_chi)<=0){
        $dia_chi_exist = "! Địa chỉ không được bỏ trống";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_exist = "! Email không đúng";
    }
    if(strlen($noi_dung)<=0){
        $noi_dung_exist = "! Nội dung không được bỏ trống";
    }

    if(!isset($ho_ten_exist) && !isset($sdt_exist) && !isset($dia_chi_exist) && !isset($email_exist) && !isset($noi_dung_exist)){
        lien_he_insert($ho_ten,$sdt, $dia_chi, $email,$noi_dung);
        $msg = "Gửi liên hệ thành công";
        $sendEmail = new \SendGrid\Mail\Mail();
        $sendEmail->setFrom("vuongxang@gmail.com", "MRS");
        // Tiêu đề thư
        $sendEmail->setSubject("Nội dung cần liên hệ Xshop");
        // Thông tin người nhận
        $sendEmail->addTo("vuongxang@gmail.com", "VuongDT32");
        // Soạn nội dung cho thư
        // $sendEmail->addContent("text/plain", "Nội dung text thuần không có thẻ html");
        $sendEmail->addContent(
            "text/html",
            "<h2>Họ tên: $ho_ten</h2>
            <p>sdt: $sdt</p>
            <p>ĐỊa chỉ: $dia_chi</p>
            <p>sendEmail: $email</p>
            <p>Nội dung: $noi_dung</p>
            "
        );
    
        // tiến hành gửi thư
        $sendgrid = new \SendGrid($SENDGRID_API_KEY);
        try {
            $response = $sendgrid->send($sendEmail);
    
            //--- mấy dòng print này thích in ra thì in.
            // print $response->statusCode() . "\n";
            // print_r($response->headers());
            // print $response->body() . "\n";
    
        } catch (Exception $e) {
            echo 'Caught exception: ' . $e->getMessage() . "\n";
        }
    }
}
$VIEW_NAME = "trang-chinh/lien-he.php";
require '../layout.php';
?>