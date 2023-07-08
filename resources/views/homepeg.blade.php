<!--
    Website Landing Page Sekolah
    
    Creator : Muhammad Arief Nugraha
    Link Repo : https://github.com/ariefnugraha/design-contest-web-sekolah

    Sosial Media :
    Github : https://github.com/ariefnugraha
    Instagram : https://www.instagram.com/dvkentury
    Email : dvkentury@gmail.com
    Dribble : https://www.dribbble.com/arief_nugraha

-->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Contest - Web Sekolah</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap" rel="stylesheet">
    <link href="{{ asset('template/index.css') }}" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <!-- BAGIAN NAVBAR -->
        <nav class="navbar navbar-expand-lg">
            <!-- LOGO UNTUK NAVBAR -->
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('template/asset/logo.jpg') }}" class="img-fluid" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="iconify" data-inline="false" data-icon="codicon:three-bars" style="font-size: 24px; color: black;"></span>
            </button>

            <!-- MENU NAVBAR -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Visi si</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar Peringkat</a>
                    </li>

                    <!-- FORM PENCARIAN DI NAVBAR -->
                    <form class="form-inline">
                        <input type="text" class="search" placeholder="Cari" />
                        <button type="submit" class="btn-search">
                            <span class="iconify" data-inline="false" data-icon="ant-design:search-outlined"
                                style="color: #0573ab; font-size: 30px;"></span>
                        </button>
                    </form>
                </ul>
            </div>
        </nav>

        <!-- BAGIAN CAROUSEL UTAMA-->
        <section id="carousel-indicators" class="carousel slide" data-ride="carousel">
            <!-- INDICATOR SLIDER-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-indicators" data-slide-to="1"></li>
            </ol>

            <!-- KONTEN CAROUSEL-->
            <div class="carousel-inner">
                <div class="carousel-item active carousel-background-1">
                    <article class="wrapper">
                        <h4>Al-Azhar sragen</h4>
                        <h1>menciptakan generasi cerdas, beriman, dan taqwa</h1>
                    </article>
                </div>
                <div class="carousel-item carousel-background-1">
                    <article class="wrapper">
                        <h4>Subtitle</h4>
                        <h1>Title</h1>
                    </article>
                </div>
            </div>

            <!-- KONTROLLER CAROUSEL UNTUK BISA NEXT ATAU PREVIOUS-->
            <a class="carousel-control-prev" href="#carousel-indicators" role="button" data-slide="prev">
                <span class="iconify" data-inline="false" data-icon="bi:chevron-left"
                    style="color: #ffffff; font-size: 70px;"></span>
            </a>
            <a class="carousel-control-next" href="#carousel-indicators" role="button" data-slide="next">
                <span class="iconify" data-inline="false" data-icon="bi:chevron-right"
                    style="color: #ffffff; ; font-size: 70px;"></span>
            </a>
        </section>

        <!-- BAGIAN INFORMASI SEKOLAH -->
        <section class="feature">
            <div class="row">
                <!-- ITEM INFORMASI SEKOLAH -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 feature-item">
                    <article class="feature-content">
                        <span class="iconify" data-inline="false" data-icon="bx:bx-happy-alt"
                            style="color: #0573ab; font-size: 100px; display: block; margin: 0 auto;"></span>
                        <h4 class="feature-title">Belajar Lebih Menyenangkan</h4>
                        <p class="feature-description">Belajar lebih menyenangkan karena siswa siswi tidak hanya belajar
                            dengan membaca buku namun juga dengan media dan juga metode yang lebih byaik dan tentnunya
                            menyenangkan</p>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 feature-item">
                    <article class="feature-content">
                        <span class="iconify" data-inline="false" data-icon="map:mosque"
                            style="color: #0573ab; font-size: 100px; display: block; margin: 0 auto;"></span>
                        <h4 class="feature-title">Tanamkan Ahlak dan Iman yang Baik</h4>
                        <p class="feature-description">Menjadikan anak yang cerdas dan juga beriman bisa membuat anak
                            berbuat baik ke sesama dan juga kepada Sang Pencipta</p>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 feature-item">
                    <article class="feature-content">
                        <span class="iconify" data-inline="false" data-icon="la:basketball-ball-solid"
                            style="color: #0573ab; font-size: 100px; display: block; margin: 0 auto;"></span>
                        <h4 class="feature-title">Kegiatan Luar Kelas yang Seru</h4>
                        <p class="feature-description">Ikut kegiatan ekstrakurikuler yang melatih soft skill dan juga
                            menambah pertemanan</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- BAGIAN PENJELASAN FASILITAS -->
        <section class="facilities">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 facilities-text">
                    <h4 class="title">fasilitas</h4>
                    <p class="subtitle">Fasilitas yang mendukung dalam proses mencetak insan yang cerdas, beriman, dan
                        bertaqwa</p>
                </div>

                <!-- BAGIAN SLIDE SHOW FASILITAS-->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 facilities-item">
                    <div id="carousel-card" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="carousel-card" data-slide-to="0"></li>
                            <li data-target="carousel-card" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col">
                                        <article class="card facilities-content">
                                            <img class="card-img-top img-fluid facilities-img" src="asset/mosque.jpg"
                                                alt="Facilities Image">
                                            <h5>masjid</h5>
                                            <p>Masjid yang besar membuat dan dengan pendingin membuat ibadah lebih
                                                nyaman</p>
                                        </article>
                                    </div>
                                    <div class="col">
                                        <article class="card facilities-content">
                                            <img class="card-img-top img-fluid facilities-img" src="{{ asset('template/asset/mosque.jpg') }}"
                                                alt="Facilities Image">
                                            <h5>masjid</h5>
                                            <p>Masjid yang besar membuat dan dengan pendingin membuat ibadah lebih
                                                nyaman</p>
                                        </article>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col">
                                        <article class="card facilities-content">
                                            <img class="card-img-top img-fluid facilities-img" src="{{ asset('template/asset/mosque.jpg') }}"
                                                alt="Facilities Image">
                                            <h5>tes</h5>
                                            <p>Masjid yang besar membuat dan dengan pendingin membuat ibadah lebih
                                                nyaman</p>
                                        </article>
                                    </div>
                                    <div class="col">
                                        <article class="card facilities-content">
                                            <img class="card-img-top img-fluid facilities-img" src="{{ asset('template/asset/mosque.jpg') }}"
                                                alt="Facilities Image">
                                            <h5>masjid</h5>
                                            <p>Masjid yang besar membuat dan dengan pendingin membuat ibadah lebih
                                                nyaman</p>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-card" role="button" data-slide="prev">
                            <span class="iconify" data-inline="false" data-icon="bi:chevron-left"
                                style="color: #0573AB; font-size: 50px;"></span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-card" role="button" data-slide="next">
                            <span class="iconify" data-inline="false" data-icon="bi:chevron-right"
                                style="color: #0573AB; ; font-size: 50px;"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- BAGIAN BERITA -->
        <section class="news">
            <h4>berita dan kegiatan</h4>
            <p class="subtitle">
                lihat informasi dan kegiatan seputar Al-Azhar Sragen
            </p>

            <!-- KONTEN BERITA -->
            <div class="row">
                <div class="col news-item">
                    <article class="news-content">
                        <img src="{{ asset('template/asset/news1.jpg') }}" class="img-fluid" alt="News 1">
                        <h4>Informasi sekolah</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi reiciendis suscipit facere quas
                            quae rem eveniet? Aliquid facilis odio assumenda quaerat laudantium, dolore pariatur ratione
                            hic maxime quod, delectus voluptatum.</p>
                        <span class="date">2 hari lalu</span>
                        <span class="read-time">dibaca 5 menit</span>
                    </article>
                </div>
                <div class="col news-item">
                    <article class="news-content">
                        <img src="{{ asset('template/asset/news2.jpg') }}" class="img-fluid" alt="News 1">
                        <h4>mengerjakan tugas dengan menyenangkan</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi reiciendis suscipit facere quas
                            quae rem eveniet? Aliquid facilis odio assumenda quaerat laudantium, dolore pariatur ratione
                            hic maxime quod, delectus voluptatum.</p>
                        <span class="date">2 hari lalu</span>
                        <span class="read-time">dibaca 5 menit</span>
                    </article>
                </div>
                <div class="col news-item">
                    <article class="news-content">
                        <img src="{{ asset('template/asset/news3.jpg') }}" class="img-fluid" alt="News 1">
                        <h4>pentingnya membaca</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi reiciendis suscipit facere quas
                            quae rem eveniet? Aliquid facilis odio assumenda quaerat laudantium, dolore pariatur ratione
                            hic maxime quod, delectus voluptatum.</p>
                        <span class="date">2 hari lalu</span>
                        <span class="read-time">dibaca 5 menit</span>
                    </article>
                </div>
            </div>
        </section>

        <!-- BAGIAN GALERI -->
        <section class="gallery">
            <h4>galeri</h4>
            <div class="row gallery-content">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 gallery-item">
                    <img class="img-fluid" src="{{ asset('template/asset/news1.jpg') }}" alt="Image">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 gallery-item">
                    <img class="img-fluid" src="{{ asset('template/asset/news2.jpg') }}" alt="Image">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 gallery-item">
                    <img class="img-fluid" src="{{ asset('template/asset/news3.jpg') }}" alt="Image">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 gallery-item">
                    <img class="img-fluid" src="{{ asset('template/asset/news1.jpg') }}" alt="Image">
                    <div class="wrapper">
                        <div class="icon">
                            <span class="iconify" data-inline="false" data-icon="bi:chevron-right"
                                style="color: #0573ab; ; font-size: 30px;"></span>
                        </div>
                        <h4>temukan foto menarik lainnya disini</h4>
                    </div>
                </div>
            </div>
            <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,96L80,85.3C160,75,320,53,480,85.3C640,117,800,203,960,224C1120,245,1280,203,1360,181.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                </path>
            </svg>
        </section>

        <!-- BAGIAN KONTAK -->
        <section class="contact">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 contact-item">
                    <h4>ada pertanyaan seputar sekolah al-azhar ?</h4>
                    <p class="subtitle">tanyakan saja melalui form di bawah ini</p>
                    <div class="row">
                        <!-- FORM KONTAK -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <form method="post">
                                <div class="form-group">
                                    <label>email</label>
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Judul</label>
                                    <input type="text" class="form-control" placeholder="Judul" required>
                                </div>
                                <div class="form-group">
                                    <label>pesan</label>
                                    <textarea class="form-control" placeholder="Pesan" required></textarea>
                                </div>
                                <button type="submit" class="btn-contact">Kirim Pesan</button>
                            </form>
                        </div>

                        <!-- INFORMASI SOSIAL MEDIA SEKOLAH-->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <p>Anda Juga Bisa Mengirim Pertanyaan Kepada Kami Melalui Kontak Di Bawah Ini</p>
                            <p class="social-media-info">
                                <span class="iconify" data-inline="false" data-icon="ant-design:phone-filled"
                                    style="color: #0099ff; font-size: 25px;"></span> 021 1234 5678
                            </p>
                            <p class="social-media-info">
                                <span class="iconify" data-inline="false" data-icon="dashicons:whatsapp"
                                    style="color: #0099ff; font-size: 25px;"></span> 021 1234 5678
                            </p>
                            <p class="social-media-info">
                                <span class="iconify" data-inline="false" data-icon="ant-design:facebook-filled"
                                    style="color: #0099ff; font-size: 25px;"></span> alazharsragen
                            </p>
                            <p class="social-media-info">
                                <span class="iconify" data-inline="false" data-icon="ant-design:instagram-filled"
                                    style="color: #0099ff; font-size: 25px;"></span> alazharsragen
                            </p>
                        </div>
                    </div>

                </div>

                <!-- PETA SEKOLAH -->
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 contact-maps">
                    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=sragen+(Sekolah%20Al-Azhar%20Sragen)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                    <div class="location-detail">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 image">
                                <img src="{{ asset('template/asset/cover.jpg') }}" alt="location-image">
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 location-name">
                                <p><b>Sekolah Al-Azhar</b></p>
                                <p>Jl. ABC</p>
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 location-guide">
                                <div class="get-guide">
                                    <p>
                                        <span class="iconify" data-inline="false" data-icon="jam:gps-f"
                                            style="color: #ffffff; font-size: 15px;"></span> Petunjuk
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer>
            <div class="row">
                <div class="col">
                    <h5>sekolah al-azhar sragen</h5>
                    <a href="#">tentang kami</a>
                    <a href="#">visi misi</a>
                    <a href="#">karier</a>
                </div>
                <div class="col">
                    <h5>sitelink</h5>
                    <a href="#">home</a>
                    <a href="#">galeri</a>
                    <a href="#">karier</a>
                </div>
                <div class="col">
                    <h5>sosial media</h5>
                    <a href="#">
                        <span class="iconify" data-inline="false" data-icon="ant-design:facebook-filled"
                            style="color: #ffffff; font-size: 25px;"></span> alazharsragen
                    </a>
                </div>
            </div>

        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>