<?php
session_start();
unset($session['user']);
header("location: php-asm-06.php");
echo "bạn đã nhập sai vui lòng nhập lại";
?>