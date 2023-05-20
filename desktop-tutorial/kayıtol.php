<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kayıt işlemlerini burada gerçekleştirin
    // Örneğin, bir veritabanına yeni kullanıcı bilgilerini kaydedebilirsiniz

    // Kayıt başarılıysa kullanıcıyı yönlendirebilirsiniz
    header('Location:proje_anasayfa.html'); // Kullanıcıyı giriş sayfasına yönlendir
    exit;
}
?>






