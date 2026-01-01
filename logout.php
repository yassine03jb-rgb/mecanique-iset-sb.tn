<?php
session_start();      // فتح session
session_unset();      // مسح كل المتغيرات
session_destroy();    // تدمير session
header("Location: login.php"); // تحويل للصفحة login
exit();               // تأكيد التوقف
?>
