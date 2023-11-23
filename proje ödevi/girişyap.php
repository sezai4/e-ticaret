<?php
// girişyap.php

// "baglanti.php" dosyasını dahil et
include("bağlanti.php");

// Formun gönderilip gönderilmediğini kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan kullanıcı giriş bilgilerini al
    $kullaniciAdi = $_POST["kullanıcı_adı"];
    $eposta = $_POST["eposta"];
    $sifre = $_POST["şifre"];

    // Kullanıcı giriş bilgilerini doğrula (gerektiğinde daha fazla doğrulama ekleyebilirsiniz)

    // MySQL veritabanına bağlan
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kullanıcılar";

    $bağlanti = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($bağlanti, "UTF8");

    // Bağlantıyı kontrol et
    if (!$bağlanti) {
        die("Bağlantı hatası: " . mysqli_connect_error());
    }

    // Kullanıcı kimlik bilgilerini kontrol etmek için sorgu
    $sql = "SELECT * FROM kullanıcılar WHERE kullanıcı_adı = '$kullaniciAdi' AND eposta = '$eposta' AND şifre = '$sifre'";

    $result = mysqli_query($bağlanti, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Kullanıcı başarıyla kimlik doğrulandı
        // Oturum değişkenlerini ayarlayabilir veya index sayfasına yönlendirebilirsiniz
        header("Location: index.php");
        exit();
    } else {
        // Kimlik doğrulama başarısız oldu
        echo "Geçersiz kimlik bilgileri";
    }

    // Veritabanı bağlantısını kapat
    mysqli_close($bağlanti);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Proje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="book.ico" rel="icon">
</head>
 
<body>
  
    <div class="d-flex justify-content-center align-items-center"
         style="min-height: 100vh;">
        <form class="p-5 rounded shadow"
            style="max-width: 30rem; width: 100%"
            method="post"
            action="girişyap.php">
        
        <h1 class="text-center display-4 pb-5">GİRİŞ YAP</h1>
     
        <div class="" role="alert">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" 
                 class="form-label">Kullanıcı Adı</label>
          <input type="text" 
                 class="form-control" 
                 name="kullanıcı_adı"
                 id="exampleInputEmail1" 
                 aria-describedby="emailHelp" required>
      
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" 
                 class="form-label">E posta</label>
          <input type="email" 
                 class="form-control" 
                 name="eposta"
                 id="exampleInputEmail1" 
                 aria-describedby="emailHelp" required>
          
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" 
                 class="form-label">Şifre</label>
          <input type="password" 
                 class="form-control" 
                 name="şifre"
                 id="exampleInputPassword1" required>
           
        </div>
        <button type="submit" name="giriş"
                class="btn btn-outline-danger">
                 Giriş</button>
      </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>