<?php

include("bağlanti.php");


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
            action="kaydet.php">
        
        <h1 class="text-center display-4 pb-5">KAYDET OL</h1>
       <?php 
       if(isset($_POST["KAYDET"]))
       {
           $name=$_POST["kullanıcı_adı"];
           $eposta=$_POST["eposta"];
           $şifre=$_POST["şifre"];
       
           $ekle="INSERT INTO kullanıcılar (kullanıcı_adı, eposta, şifre) VALUES ('$name','$eposta',
           '$şifre')";
           $caliştirekle = mysqli_query($baglanti,$ekle);

           if ($caliştirekle) 
           {
              echo '<div class="alert alert-success" role="alert">
              Kayıt Başarılı bir şekilde eklendi.
              </div>';
           }
           else{
              echo '<div class="alert alert-danger" role="alert">
              kayıt eklenirken bir problem oluştu.
              </div>';
           }
           mysqli_close($baglanti);
       }
       ?>
        <div class="" role="alert">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" 
                 class="form-label">Kullanıcı Adı</label>
          <input type="text" 
                 class="form-control is-invalid" 
                 name="kullanıcı_adı"
                 id="exampleInputEmail1" 
                 aria-describedby="emailHelp" required>
                 <div id="validationServerUsernameFeedback" class="invalid-feedback">
                 kullanıcı adı hata mesajı
      </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" 
                 class="form-label">E posta</label>
          <input type="email" 
                 class="form-control is-invalid" 
                 name="eposta"
                 id="exampleInputEmail1" 
                 aria-describedby="emailHelp" required>
                 <div id="validationServerUsernameFeedback" class="invalid-feedback">
        eposta hata mesajı
      </div>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" 
                 class="form-label">Şifre</label>
          <input type="password" 
                 class="form-control is-invalid" 
                 name="şifre"
                 id="exampleInputPassword1" required>
                 <div id="validationServerUsernameFeedback" class="invalid-feedback">
        şifre hata mesajı
      </div>
        </div>
        <button type="submit" name="KAYDET"
                class="btn btn-outline-info">
                Kaydet</button>
              <a href="girişyap.php">Giriş</a>
      </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>