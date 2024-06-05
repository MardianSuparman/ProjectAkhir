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


    @php
    $guru = \App\Models\Guru::orderBy('id', 'asc')->get();
    @endphp
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
                                    <a class="nav-link" href="{{ url('/guru') }}"> Guru </a>
                                </li>

                            </ul>
                        </div>
                </nav>
            </div>
        </header>
    </div>
    <!-- end header section -->

    <div class="common_style">


        <section class="about_section layout_padding">
            <div class="container-title">
                <h2>
                    STAF GURU
                </h2>
                {{-- <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at
                    its layout. The point of using Lorem
                </p> --}}
            </div>

            <div class="container">
                <div class="about_card-container">

                @foreach ($guru as $item)

                    <div class="about_card">
                        <div class="about-detail">
                            <div class="about_img-box">
                                <img src="{{ asset('/storage/gurus/'. $item->foto) }}" class="rounded"
                                    style="width: 150px">
                            </div>
                            <div class="card_detail-ox">
                                <h4>{{ $item->nama }}</h4>
                                <p class="tmt-3">
                                    <small>TTL</small> <br>
                                    {{ $item->tempat_lahir }} , {{ $item->tanggal_lahir }} <br>
                                    <small>Agama</small> <br>
                                    {{ $item->agama }} <br>
                                    <small>Jenis kelamin</small> <br>
                                    @if ( $item->jenis_kelamin === 0 )
                                    Laki-laki
                                    @else
                                    Perempuan
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="aboute_button">
                            <a href="{{ route('guru.show', $item->id) }}" class="about_btn " >
                                Read More
                            </a>
                        </div>
                    </div>
                @endforeach

                    {{-- <div class="about_card">
                        <div class="about-detail">
                            <div class="about_img-box">
                                <img src="images/card-img-2.png" alt="">
                            </div>
                            <div class="card_detail-ox">
                                <h4>
                                    A PRO ARCHITECTS TEAM
                                </h4>
                                <p>
                                    Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor
                                    id nibh ultricies
                                    vehicula ut id elit. Morbi leo risus.
                                </p>
                            </div>
                        </div>
                        <div>
                            <a href="" class="about_btn">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="about_card">
                        <div class="about-detail">
                            <div class="about_img-box">
                                <img src="images/card-img-3.png" alt="">
                            </div>
                            <div class="card_detail-ox">
                                <h4>
                                    1000+ HAPPY CUSTOMERS
                                </h4>
                                <p>
                                    Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor
                                    id nibh ultricies
                                    vehicula ut id elit. Morbi leo risus.
                                </p>
                            </div>
                        </div>
                        <div>
                            <a href="" class="about_btn">
                                Read More
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
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
