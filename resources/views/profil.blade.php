<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Fanadesh</title>



    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- progress barstle -->
    <link rel="stylesheet" href="css/css-circular-prog-bar.css">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,600&display=swap" rel="stylesheet">
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />




    <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body class="sub_page">
    <div class="top_container ">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ url('/user') }}">
                        <span>
                            SMK ASSALAAM
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/user') }}"> Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/profil') }}"> Profil </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/jurusan') }}"> Jurusan </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/guru') }}">  Guru </a>
                                </li>

                            </ul>
                        </div>
                </nav>
            </div>
        </header>
    </div>
    <!-- end header section -->

    <div class="common_style">

        <!-- about section -->
        <section class="about_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_img-container">
                            <img src="images/profil.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about_detail-box">
                            <h3>
                                SMK ASSALAAM
                            </h3>
                            <p>
                                SMK Assalaam merupakan sekolah kejuruan dengan kompetensi keahlian teknik kendaraan
                                ringan (roda empat) plus sepeda motor dalam proses pendidikan pelatihan. Peka terhadap
                                perubahan perkembangan teknologi baru dan tuntutan kebutuhan pasar kerja, agar
                                lulusannya siap menghadapi perubahan.
                            </p>
                            <p>
                                SMK Assalaam dengan penuh kesadaran berani melakukan perubahan dengan berbagai inovasi
                                dan improvisasi, mencari terobosan untuk meraih keberhasilan bagi peserta didiknya.
                                Tekad tersebut sebagai wujud nyata dari SMK Assalaam didukung oleh sarana praktek yang
                                lengkap UP TO DATE, waktu praktek memadai dan praktek berstandar industri dengan
                                pelayanan prima.
                            </p>
                            {{-- <div class="">
                                <a href="" class="call_to-btn btn_white-border">
                                    Read More
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about section -->

        <!-- admission section -->
        <section class="admission_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="admission_detail-box">
                            <h2>
                                Keunggulan
                            </h2>
                            <p>
                                Program pembelajaran disusun berdasarkan standar Nasional dan dikembangkan berdasarkan
                                kebutuhan industri serta
                                bekerjasama dengan DU/DI (Dunia Usaha/Dunia Industri)
                            </p>
                            <p>
                                Menghasilkan lulusan yang siap bekerja,memiliki mentalitas kerja yang tangguh, dan
                                memiliki keterampilan ganda (jurusan otomotif : Mobil + Motor, jurusan RPL : programer + teknisi)
                            </p>
                            <p>
                                Pengembangan karakter dibentuk atas dasar ajaran ISLAM sebagai fondasi utama dalam berbagai aktivitas siswa.
                            </p>
                            {{-- <div class="">
                                <a href="" class="call_to-btn btn_white-border">
                                    Read More
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="admission_img-container">
                            <img src="images/sakola.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end admission section --}}




    </div>



    <section class="info_section layout_padding-top">
        <div class="info_logo-box">
            <h2>
                SMK ASSLAAM
            </h2>
        </div>
        <div class="container layout_padding2">
            <div class="row">
                <div class="col-md-4">
                    <h5>
                        SMK Assalaam
                    </h5>
                    <p>
                        SMK Assalaam adalah bagian dari Yayasan Assalaam yang mempersiapkan siswa untuk siap kerja
                        dengan keterampilan & profesional di bidang industri (sekolah berbasis industri) dan
                        kewirausahaan.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5>
                        Unit Pendidikan
                    </h5>
                    <ul>
                        <li>
                            <a href="">
                                SMK
                            </a>
                        </li>
                        <li>
                            <a href="">
                                SMA
                            </a>
                        </li>
                        <li>
                            <a href="">
                                MTS
                            </a>
                        </li>
                        <li>
                            <a href="">
                                SD
                            </a>
                        </li>
                        <li>
                            <a href="">
                                PG TK
                            </a>
                        </li>
                        <li>
                            <a href="">
                                TPQ
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>
                        Contact Us
                    </h5>
                    <p>
                        022 5420-220
                    </p>
                    <p>
                        info@smkassalaambandung.sch.id
                    </p>
                </div>

                {{-- <div class="col-md-3">
                    <div class="subscribe_container">
                        <h5>
                            Newsletter
                        </h5>
                        <div class="form_container">
                            <form action="">
                                <input type="email" placeholder="Enter your email">
                                <button type="submit">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
        <div class="container">
            <div class="social_container">

                <div class="social-box">
                    <a href="https://www.facebook.com/smkassalaam/">
                        <img src="images/fb.png" alt="">
                    </a>

                    <a href="https://twitter.com/smkassalaam/">
                        <img src="images/twitter.png" alt="">
                    </a>
                    {{-- <a href="">
                        <img src="images/linkedin.png" alt="">
                    </a> --}}
                    <a href="https://www.instagram.com/smkassalaam/">
                        <img src="images/instagram.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <section class="container-fluid footer_section">
        <p>
            Copyright &copy; 2019 All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>


</body>

</html>
