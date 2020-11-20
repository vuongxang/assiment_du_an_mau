<?php
Require_once 'pdo.php';

function lien_he_insert($ho_ten,$sdt, $dia_chi, $email,$noi_dung){
    $sql = "INSERT INTO lien_he(ho_ten,sdt, dia_chi, email, noi_dung) 
    VALUES ('$ho_ten','$sdt','$dia_chi','$email','$noi_dung')";
    pdo_execute($sql,$ho_ten, $sdt, $dia_chi, $email, $noi_dung);
}

?>