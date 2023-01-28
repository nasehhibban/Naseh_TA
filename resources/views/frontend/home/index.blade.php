<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('assets/fe/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- player movie html5 youtube embed css -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.3/plyr.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('assets/fe/img/Logo.png') }}" alt="Bootstrap" width="40" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pendaftaraan') }}">Pendaftaraan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pengecekkan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
                <a href="{{ route('login') }}" class="btn btn-success" type="submit">Masuk</a>
            </div>
        </div>
    </nav>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('assets/fe/img/header.png') }}" class="img-fluid" alt=""
                        style="width: 100%;">
                </div>
                <div class="col-md-7">
                    <h1>Penjelasan Singkat Tentang
                        Bansos (Bantuan Sosial)</h1>
                    <p class="justify-align-between">Bantuan sosial merupakan pemberian bantuan yang sifatnya tidak
                        secara terus menerus dan selektif
                        dalam bentuk uang/barang kepada masyarakat yang bertujuan untuk peningkatan kesejahteraan
                        masyarakat. Dalam pemberian bantuan sosial, baik Pemerintah Daerah sebagai pemberi bantuan
                        sosial
                        maupun Masyarakat/Lembaga Kemasyarakatan sebagai penerima bantuan sosial mempunyai kewajiban
                        untuk mempertanggungjawabkan bantuan sosial sesuai porsinya berdasarkan ketentuan yang berlaku.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="tujuan">
            <div class="container">
                <div class="row">
                    <h1 style="text-align:center">Tujuan Bansos</h1>
                    <div class="col-md-7">
                        <p class="justify-align-between">
                        <h3 style="margin-top: 150px;">1. Rehabilitasi Sosial</h3>
                        <p>Bansos bertujuan untuk memulihkan dan mengembangkan kemampuan seseorang yang mengalami
                            disfungsi
                            sosial agar dapat melaksanakan fungsi sosialnya secara wajar.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/fe/img/section1.png') }}" class="img-fluid" alt=""
                            style="width: 100%; margin-bottom: 10%;">
                    </div>
                </div>
            </div>
        </section>
        <section id="tujuan1"">
            <div class=" container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/fe/img/section2.png') }}" class="img-fluid naik" alt=""
                            style="width: 100%; margin-top: 10%;">
                    </div>
                    <div class="col-md-7">
                        <h3 style="margin-top: 180px;">2. Perlindungan Sosial</h3>
                        <p class="justify-align-between">Tujuan selanjutnya adalah untuk mencegah dan menangani risiko
                            dari
                            guncangan dan kerentanan sosial seseorang, keluarga, kelompok masyarakat agar kelangsungan
                            hidupnya dapat dipenuhi sesuai dengan kebutuhan dasar minimal.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="tujuan">
            <div id="" class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3 style="margin-top: 180px;"> 3. Pemberdayaan Sosial</h3>
                        <p class="justify-align-between">
                            Bansos bertujuan untuk memulihkan dan mengembangkan kemampuan seseorang yang mengalami
                            disfungsi
                            sosial agar dapat melaksanakan fungsi sosialnya secara wajar.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/fe/img/section3.png') }}" class="img-fluid" alt=""
                            style="width: 100%; margin-top: 10%;">
                    </div>
                </div>
            </div>
        </section>
        <section id="tujuan1">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/fe/img/section4.png') }}" class="img-fluid naik" alt=""
                            style="width: 100%; margin-top: 10%;">
                    </div>
                    <div class="col-md-7">
                        <h3 style="margin-top: 180px;">4. Jaminan Sosial </h3>
                        <p class="justify-align-between">Bansos sebagai jaminan sosial merupakan skema yang melembaga
                            untuk
                            menjamin penerima bantuan agar dapat memenuhi kebutuhan dasar hidupnya yang layak.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="tujuan">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h3 style="margin-top: 150px;">5. Penanggulangan Kemiskinan</h3>
                        <p class="justify-align-between">
                            Tujuan bansos sebagai penanggulangan kemiskinan memiliki arti bahwa bansos merupakan
                            kebijakan, program, kegiatan, dan sub kegiatan yang dilakukan terhadap orang, keluarga,
                            kelompok masyarakat yang tidak mempunyai atau mempunyai sumber mata pencaharian dan tidak
                            dapat memenuhi kebutuhan yang layak bagi kemanusiaan.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('assets/fe/img/section5.png') }}" class="img-fluid naik" alt=""
                            style="width: 100%; margin-top: 10%;">
                    </div>
                </div>
            </div>
        </section>
        <section id="tujuan1">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/fe/img/section6.png') }}" class="img-fluid naik"
                            style="width: 100%; margin-top: 10%;">
                    </div>
                    <div class="col-md-7">
                        <h3 style="margin-top: 180px;">6. Penanggulangan Bencana</h3>
                        <p class="justify-align-between">Terakhir, pemberian bansos bertujuan untuk penanggulangan
                            bencana merupakan serangkaian upaya yang ditujukan untuk rehabilitasi.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="jenisbansos">
            <div class="container">
                <div class="row">
                    <h1 style="margin-top: 100px;"> Jenis-Jenis Bansos: </h1>
                    <h2>Secara umum, bansos dibedakan menjadi tiga jenis, dan berikut sebagai penjelasannya :</h2>
                    <div class="col-md-4">
                        <div class="card p-2 shadow-sm rounded">
                            <h3>Bantuan Sosial Berupa Uang</h3>
                            <p>Bantuan sosial berupa uang diberikan secara langsung kepada penerima seperti beasiswa
                                bagi
                                anak miskin, yayasan pengelola yatim piatu, nelayan miskin, masyarakat lanjut usia,
                                terlantar, cacat berat dan tunjangan kesehatan putra putri pahlawan yang tidak mampu.
                                Bantuan jenis ini dapat diberikan secara tunai maupun non tunai.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-2 shadow-sm rounded">
                            <h3>Bantuan Sosial Berupa Barang</h3>
                            <p>Bantuan sosial berupa barang adalah barang yang diberikan secara langsung kepada penerima
                                seperti bantuan kendaraan operasional untuk sekolah luar biasa swasta dan masyarakat
                                tidak
                                mampu, bantuan perahu untuk nelayan miskin, bantuan makanan/pakaian kepada yatim
                                piatu/tuna
                                sosial, ternak bagi kelompok masyarakat kurang mampu
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-2 shadow-sm rounded">
                            <h3>Bantuan Sosial Berupa Jasa</h3>
                            <p>Bantuan sosial berupa jasa disalurkan sesuai dengan ketentuan peraturan
                                perundang-undangan.
                                Contoh bantuan berupa jasa adalah pemberian pelatihan untuk penerima bantuan dari satuan
                                kerja (pemberi bansos).
                            </p>
                        </div>
                    </div>
                </div>
        </section>

        <section id="webvideo">
            <h3 class="text-center text-light pt-5">
                Mudahnya Penggunaan Website Cek Bansos
            </h3>
            <div class="row justify-content-center mt-3">
                <div class="col-md-6 col-10">
                    <div class="card p-3 rounded shadow-sm">
                        <!-- ini embed link youtube -->
                        <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="LmzP6WiY0kY"></div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <footer class="bg-white text-center text-lg-start text-white">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row my-4">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                    <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto"
                        style="width: 130px; height: 130px;">
                        <img src="{{ asset('assets/fe/img/Logoo.png') }}" height="100" alt=""
                            loading="lazy" />
                    </div>

                    <div class="text-success">
                        <p class="text-justify">Ruko CekBansos, Jl. Gg Mesjid No 3, Koja, RBS Kota Jakarta Utara DKI
                            Jakarta. Nomor telepon: 081284799537</p>

                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-success">
                    <h5 class="text-uppercase mb-4">Cek Bansos</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>FAQ</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>Terms</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>Privacy</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>Cookies</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>Tentang Kami</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>Syarat dan
                                Ketentuan</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fas paw pe-3"></i>Kebijakan Privasi</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4 text-success">Ikuti Kami</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fa fa-facebook pe-3"></i>Facebook</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fa fa-instagram pe-3"></i>Instagram</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fa fa-twitter pe-3"></i>Twitter</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-success"><i class="fa fa-youtube pe-3"></i>Youtube</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0 text-success">
                    <h5 class="text-uppercase mb-4">Kontak Kami</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p><i class="fas map-marker-alt pe-2"></i>Ruko CekBansos, Jl. Gg Mesjid No3</p>
                        </li>
                        <li>
                            <p><i class="fas phone pe-2"></i>+62 812 8479 9537</p>
                        </li>
                        <li>
                            <p><i class="fas envelope pe-2 mb-0"></i>cekbansos@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-light p-4"
            style="background: linear-gradient(278.19deg, #48B279 4.25%, #4899B2 93.64%);">
            © 2022 Copyright Made With ♥
            <a class="text-reset" href="/">Cek Bansos</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- player movie html5 youtube embed js -->
    <script src="https://cdn.plyr.io/3.7.3/plyr.js"></script>
    <script>
        const player = new Plyr('#player');
    </script>



</body>

</html>
