<?php
session_start();
if (isset($_SESSION["kullanıcı_adı"])) {
    echo "<h3>" . $_SESSION["kullanıcı_adı"] . "hoşgeldin</h3>";
    echo "<h3>" . $_SESSION["eposta"] . "</h3>";
    echo "<a href='cikiş.php'>ÇİKİŞ YAP</a>";
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <div class="container-fluid text-bg-info p-3">
            <a class="navbar-brand" href="#">PHP Proje</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">ANASAYFA</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="nav-link active dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-current="page" href="index.php">KATEGORİ</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Polisiye</a></li>
                                <li><a class="dropdown-item" href="#">Tarih</a></li>
                                <li><a class="dropdown-item" href="#">Roman</a></li>
                                <li><a class="dropdown-item" href="#">Edebiyat</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Başka bir şey</a></li>
                            </ul>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link" href="#">İLETİŞİM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HAKKINDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="girişyap.php">GİRİŞ YAP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kaydet.php">KAYIT OL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="çikiş.php">ÇIKIŞ YAP</a> <!-- Bu satır eklenmiştir -->
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="" aria-label="ara">
                    <button class="btn btn-outline-success" type="submit">ara</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="flex-shrink-0 p-3 mx-2" style="width: 280px;">
        <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
            <svg class="bi pe-none me-2" width="30" height="24">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-5 fw-semibold">YAYINEVLERİ</span>
        </a>
        <ul class="list-unstyled ps-0" style="overflow-y: auto;height:10rem;">
            <li class="mb-1">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="ara..." aria-label="ara">
                </form>
                <div class="collapse show text-center" id="home-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">İletişim Yayınevi</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">KAPI YAYINLARI</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Ötüken Kitap</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Dergah Yayınları</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Bkmkitap</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Can Yayınları</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Yapı Kredi Yayınları</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="flex-shrink-0 p-3 mx-2" style="width: 280px;">
        <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
            <svg class="bi pe-none me-2" width="30" height="24">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-5 fw-semibold">YAZARLAR</span>
        </a>
        <ul class="list-unstyled ps-0" style="overflow-y:auto;height:10rem;">
            <li class="mb-1">
                <form class="d-flex" role="search">
                    <input class="form-control me-2 " type="search" placeholder="ara..." aria-label="ara">
                </form>
                <div class="collapse show text-center" id="home-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">mustafa kutlu</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">cengiz aytmatov</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">iskender pala</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">tarık buğra</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">orhan kemal</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">ahmet ümit</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Fyodor Dostoyevski</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">sabahattin ali</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Johann Wolfgang Von Goethe</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div>
        <div class="card end-50 translate-middle-y position-absolute top-50" style="width: 13rem;">
            <img src="Resimler/mustafa.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Uzun hikaye Mustafa KUTLU</h5>
                <p class="card-text" style="background-color: yellow;">Dergah Yayınları</p>
                <p class="card-text" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">30.00 TL</p>
                <a href="#" class="btn btn-primary">SEPETE EKLE</a>
            </div>
        </div>
        <div class="card end-50 translate-middle-y position-absolute top-50" style="width: 13rem;">
            <img src="Resimler/cengiz.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Gün Olur Asra Bedel Cengiz Aytmatov</h5>
                <p class="card-text" style="background-color: yellow;">Ötüken Yayınları</p>
                <p class="card-text" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">90.00 TL</p>
                <a href="#" class="btn btn-primary">SEPETE EKLE</a>
            </div>
        </div>
    </div>
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">anasayfa</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">hakkında</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">iletişim</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">ürün</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">mağaza</a></li>
        </ul>
        <p class="text-center text-body-secondary">© 2023 şirket, Inc</p>
    </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>