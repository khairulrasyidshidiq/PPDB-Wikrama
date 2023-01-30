@extends('templates.layout')

@section('content')
    <div data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-delay="0" data-aos-duration="2000">
        <div class="container mt-4 sticky-top">
            <nav class="navbar navbar-expand-lg bg-dark rounded-pill">
                <div class="container-fluid">
                    <a class="navbar-brand"><img src="{{ asset('assets/img/Wikrama.png') }}" alt="" height="50"></a>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/login">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="parentbody">
            <div class="container mt-5">
                <h2 class="fw-bold fs-1 mb-3">PPDB TP 2023-2024 <br>SMK Wikrama Bogor</h2>
                <p class="">Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik <strong>PENDAFTARAN
                        PPDB</strong> dibawah ini!<br>
                    <strong> yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</strong>
                </p>
            </div>
            <div class="container mt-5">
                <a href="/register" class="btn btn-warning button"><span id="buttonhover"><strong>PENDAFTARAN
                            PPDB</strong></span></a>
            </div>
            <div class="container mt-5">
                <div class="rounded p-5 bg-dark">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-0 text-center">
                            <h4 class="fw-bold text-white">MOTTO</h4>
                            <p class="text-light">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-0 text-center">
                            <h4 class="fw-bold text-white">AFIRMASI</h4>
                            <p class="text-light">Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-0 text-center">
                            <h4 class="fw-bold text-white">ATITUDE</h4>
                            <p class="text-light">Aku ada lingkunganku bahagia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jurusanbody bg-dark">
            <div class="container">
                <h2 class="fw-bold mb-4 text-white">Jurusan</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card" id="cardhover">
                            <div class="card-body p-5" id="cardheight">
                                <h5 class="card-title text-primary fw-bold">PPLG</h5>
                                <h4 class="card-title">Pengembangan Perangkat Lunak dan Gim</h4>
                                <span class="text-secondary fw-bold">Keunggulan</span>
                                <p class="card-text"> Desktop Programming, Web Programming, Mobile Programming, Bussiness
                                    Analyst, Database Administration.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card" id="cardhover">
                            <div class="card-body p-5" id="cardheight">
                                <h5 class="card-title text-primary fw-bold">TJKT</h5>
                                <h4 class="card-title">Teknik Jaringan Komputer dan Telekomunikasi</h4>
                                <span class="text-secondary fw-bold">Keunggulan</span>
                                <p class="card-text">Kompetensi keahlian Teknik Komputer dan Jaringan sudah memiliki
                                    sertifikasi internasional seperti CNAP (Cisco Networking Academy Program) dan MCNA
                                    (Mikrotik Certified Network Associate).</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hide row">
                    <div class="col-sm-6">
                        <div class="card mt-4" id="cardhover" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-body p-5" id="cardheight">
                                <h5 class="card-title text-primary fw-bold">DKV</h5>
                                <h4 class="card-title">Desain Komunikasi Visual</h4>
                                <span class="text-secondary fw-bold">Keunggulan</span>
                                <p class="card-text"> Lulusan dapat memiliki kesempatan kerja yang luas dibidang periklanan,
                                    production house, radio & televisi, studio foto, percetakan grafis, corporate brand
                                    identity, penerbit majalan/Koran, dll.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mt-4" id="cardhover" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-body p-5" id="cardheight">
                                <h5 class="card-title text-primary fw-bold">PMN</h5>
                                <h4 class="card-title">Pemasaran</h4>
                                <span class="text-secondary fw-bold">Keunggulan</span>
                                <p class="card-text">Kompetensi keahlian Bisnis Daring dan Pemasaran memiliki kompetensi
                                    yang mirip dengan program Multimedia dan Perkantoran. Lulusan program ini diharuskan
                                    mampu membuat foto produk, desain, copy writing, dll.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mt-4" id="cardhover" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-body p-5" id="cardheight">
                                <h5 class="card-title text-primary fw-bold">MPLB</h5>
                                <h4 class="card-title">Manajemen Perkantoran Lembaga Bisnis</h4>
                                <span class="text-secondary fw-bold">Keunggulan</span>
                                <p class="card-text"> Kompetensi keahlian Otomatisasi dan Tata Kelola
                                    Perkantoran/Administrasi Perkantoran memiliki keunggulan dibidang prestasi peserta didik
                                    seperti juara II lomba keterampilan siswa bidang lomba sekretaris tingkat provinsi tahun
                                    2016 dan juara I lomba olimpiade sekretaris tingkat nasional tahun 2017.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mt-4" id="cardhover" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-body p-5" id="cardheight">
                                <h5 class="card-title text-primary fw-bold">TBG</h5>
                                <h4 class="card-title">Tata Boga</h4>
                                <span class="text-secondary fw-bold">Keunggulan</span>
                                <p class="card-text"> Siswa jurusan Tata Boga mampu bekerja diberbagai bidang jasa boga
                                    seperti restoran, hotel, rumah sakit, katering sesuai dengan minat dan bakat yang telah
                                    dipelajari.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card mt-4" id="cardhover" data-aos="fade-up" data-aos-duration="1500">
                            <div class="card-body p-5" id="cardheight">
                                <h5 class="card-title text-primary fw-bold">HTL</h5>
                                <h4 class="card-title">Perhotelan</h4>
                                <span class="text-secondary fw-bold">Keunggulan</span>
                                <p class="card-text">Siswa jurusan Perhotelan akan mampu bekerja di departemen yang ada di
                                    hotel dengan kompetensi yang mereka pelajari.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center"><button class="btn"><i class="bi bi-chevron-compact-down"
                            id="icon" style="font-size: 40px"></i></button></div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".hide").hide();
            $(".btn").click(function() {
                $(".hide").show();
            });
        });
    </script>
@endsection
