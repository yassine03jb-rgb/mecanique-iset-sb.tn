<?php
// معلومات الاتصال بالـ MySQL
$host = "localhost";      // عادة localhost
$dbname = "plateforme_meca";  // اسم قاعدة البيانات
$user = "root";           // اسم المستخدم الافتراضي في XAMPP
$pass = "";               // كلمة السر الافتراضية عادة فاضية

try {
    // إنشاء الاتصال PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    // إعدادات PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}
?>
