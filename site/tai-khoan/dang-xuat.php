<?php
session_start();

session_destroy();
header("location: dang-nhap.php");
die;
?>