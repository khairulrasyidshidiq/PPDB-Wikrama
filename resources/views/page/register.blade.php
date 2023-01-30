@extends('templates.layout')

@section('content')
    <div data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-delay="0" data-aos-duration="2000">
        <form action="/store" method="POST">
            @csrf
            <div class="container w-50">
                <div class="card mx-md-5 mx-0 my-5 pb-3">
                    <div class="text-center mt-5">
                        <h4 class="fw-bold">Form Pendaftaran PPDB</h4>
                        <p class="fw-bold text-secondary">SMK Wikrama Bogor TP. 2023-2024</p>
                    </div>
                    <div class="container ">
                        <div class="container">
                            <div class="d-flex mt-4">
                                <div class="mb-3 me-5">
                                    <label class="form-label">NISN</label>
                                    <input type="number" name="nisn" class="form-control" placeholder="Masukkan NISN">
                                </div>
                                <div class="mb-3 ms-3" style="width: 235px">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" name="jenis_kelamin">
                                        <option hidden>--Jenis Kelamin--</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" placeholder="Masukkan Nama" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Asal Sekolah</label>
                                <select class="form-select form-select-md" aria-label=".form-select-lg example"
                                    name="asal_sekolah" id="sekolah">
                                    <option disabled selected hidden>Pilih Asal Sekolah</option>
                                    @foreach ($sekolah as $item)
                                        <option value="{{ $item['nama_sekolah'] }}">{{ $item['nama_sekolah'] }}</option>
                                    @endforeach
                                    <option value="lainnya">LAINNYA</option>
                                </select>
                            </div>
                            <div class="inputsekolah">
                                <div class="mb-3">
                                    <label class="form-label">Nama Sekolah</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama Sekolah"
                                        id="lain">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email"
                                    placeholder="Masukkan Email Aktif">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Handphone</label>
                                <input type="number" class="form-control" name="no_hp"
                                    placeholder="Contoh : 08----------">
                            </div>
                            <div class="d-flex">
                                <div class="mb-3 me-5">
                                    <label class="form-label">Nomor HP Ayah</label>
                                    <input type="number" class="form-control" name="no_hp_ayah"
                                        placeholder="Contoh : 08----------">
                                </div>
                                <div class="mb-3 ms-2">
                                    <label class="form-label">Nomor HP Ibu</label>
                                    <input type="number" class="form-control" name="no_hp_ibu"
                                        placeholder="Contoh : 08----------">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Referensi</label>
                                <select class="form-select" aria-label="Default select example" name="referensi"
                                    id="referensijs">
                                    <option hidden>Pilih Referensi</option>
                                    <option value="Guru/Staf/Laboran/Pegawai Wikrama">Guru/Staf/Laboran/Pegawai Wikrama
                                    </option>
                                    <option value="Siswa SMK Wikrama">Siswa SMK Wikrama</option>
                                    <option value="Alumni SMK Wikrama">Alumni SMK Wikrama</option>
                                    <option value="Guru SMP">Guru SMP</option>
                                    <option value="Calon Siswa SMK Wikrama">Calon Siswa SMK Wikrama</option>
                                    <option value="Sosial Media">Sosial Media</option>
                                    <option value="Referensi Langsung">Referensi Langsung</option>
                                </select>
                            </div>
                            <div class="hilang">
                                <div class="referensiwikrama">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Guru/Staf/Laboran/Pegawai Wikrama</label>
                                        <input type="text" class="form-control" id="wikrama">
                                    </div>
                                </div>
                                <div class="referensisiswa">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Siswa</label>
                                        <input type="text" class="form-control" id="siswa">
                                        <label class="form-label">Rayon</label>
                                        <select class="form-select" aria-label="Default select example" id="rayon">
                                            <option hidden>Pilih Rayon</option>
                                            <option value="Cia 1">Ciawi 1</option>
                                            <option value="Cia 2">Ciawi 2</option>
                                            <option value="Cia 3">Ciawi 3</option>
                                            <option value="Cia 4">Ciawi 4</option>
                                            <option value="Cia 5">Ciawi 5</option>
                                            <option value="Cib 1">Cibedug 1</option>
                                            <option value="Cib 2">Cibedug 2</option>
                                            <option value="Cib 3">Cibedug 3</option>
                                            <option value="Cic 1">Cicurug 1</option>
                                            <option value="Cic 2">Cicurug 2</option>
                                            <option value="Cic 3">Cicurug 3</option>
                                            <option value="Cic 4">Cicurug 4</option>
                                            <option value="Cic 5">Cicurug 5</option>
                                            <option value="Cic 6">Cicurug 6</option>
                                            <option value="Cic 7">Cicurug 7</option>
                                            <option value="Cis 1">Cisarua 1</option>
                                            <option value="Cis 2">Cisarua 2</option>
                                            <option value="Cis 3">Cisarua 3</option>
                                            <option value="Cis 4">Cisarua 4</option>
                                            <option value="Cis 5">Cisarua 5</option>
                                            <option value="Cis 6">Cisarua 6</option>
                                            <option value="Suk 1">Sukasari 1</option>
                                            <option value="Suk 2">Sukasari 2</option>
                                            <option value="Taj 1">Tajur 1</option>
                                            <option value="Taj 2">Tajur 2</option>
                                            <option value="Taj 3">Tajur 3</option>
                                            <option value="Taj 4">Tajur 4</option>
                                            <option value="Taj 5">Tajur 5</option>
                                            <option value="Wik 1">Wikrama 1</option>
                                            <option value="Wik 2">Wikrama 2</option>
                                            <option value="Wik 3">Wikrama 3</option>
                                            <option value="Wik 4">Wikrama 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="referensialumni">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Alumni</label>
                                        <input type="text" class="form-control" id="alumni">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tahun Lulus</label>
                                        <input type="number" class="form-control" id="lulus">
                                    </div>
                                </div>
                                <div class="referensiguru">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Guru</label>
                                        <input type="text" class="form-control" id="guru">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Asal SMP</label>
                                        <input type="text" class="form-control" id="smp">
                                    </div>
                                </div>
                                <div class="referensicalonsiswa">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Calon Peserta</label>
                                        <input type="text" class="form-control" id="calon">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">No Seleksi</label>
                                        <input type="number" class="form-control" id="no">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-warning button fw-bold"
                                    id="buttonhover">REGISTRASI</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('#sekolah').select2({
                placeholder: 'Pilih Sekolah',
            });
        });
        $(document).ready(function() {
            $(".inputsekolah").hide();
            $("#sekolah").change(function() {
                var val = $(this).val();
                console.log(val);
                if (val == "lainnya") {
                    document.getElementById("lain").setAttribute("name", "asal_sekolah")
                    document.getElementById("sekolah").removeAttribute("name")
                    $(".inputsekolah").show();
                } else {
                    document.getElementById("sekolah").setAttribute("name", "asal_sekolah")
                    document.getElementById("lain").removeAttribute("name")
                    $(".inputsekolah").hide();
                }
            });
            $(".referensiwikrama").hide();
            $(".referensialumni").hide();
            $(".referensisiswa").hide();
            $(".referensiguru").hide();
            $(".referensicalonsiswa").hide();
            $("#referensijs").change(function() {
                var val = $(this).val();
                console.log(val);
                if (val == "Guru/Staf/Laboran/Pegawai Wikrama") {
                    $(".referensiwikrama").show();
                    $(".referensialumni").hide();
                    $(".referensisiswa").hide();
                    $(".referensiguru").hide();
                    $(".referensicalonsiswa").hide();
                    document.getElementById("wikrama").setAttribute("name", "nama")
                    document.getElementById("guru").removeAttribute("name")
                    document.getElementById("siswa").removeAttribute("name")
                    document.getElementById("alumni").removeAttribute("name")
                    document.getElementById("calon").removeAttribute("name")
                    document.getElementById("smp").removeAttribute("name")
                    document.getElementById("no").removeAttribute("name")
                    document.getElementById("rayon").removeAttribute("name")
                } else if (val == "Siswa SMK Wikrama") {
                    $(".referensiwikrama").hide();
                    $(".referensialumni").hide();
                    $(".referensisiswa").show();
                    $(".referensiguru").hide();
                    $(".referensicalonsiswa").hide();
                    document.getElementById("siswa").setAttribute("name", "nama")
                    document.getElementById("rayon").setAttribute("name", "rayon")
                    document.getElementById("alumni").removeAttribute("name")
                    document.getElementById("calon").removeAttribute("name")
                    document.getElementById("wikrama").removeAttribute("name")
                    document.getElementById("guru").removeAttribute("name")
                    document.getElementById("lulus").removeAttribute("name")
                    document.getElementById("smp").removeAttribute("name")
                    document.getElementById("no").removeAttribute("name")
                } else if (val == "Alumni SMK Wikrama") {
                    $(".referensiwikrama").hide();
                    $(".referensialumni").show();
                    $(".referensisiswa").hide();
                    $(".referensiguru").hide();
                    $(".referensicalonsiswa").hide();
                    document.getElementById("siswa").removeAttribute("name")
                    document.getElementById("calon").removeAttribute("name")
                    document.getElementById("wikrama").removeAttribute("name")
                    document.getElementById("guru").removeAttribute("name")
                    document.getElementById("alumni").setAttribute("name", "nama")
                    document.getElementById("lulus").setAttribute("name", "lulus")
                    document.getElementById("rayon").removeAttribute("name")
                    document.getElementById("smp").removeAttribute("name")
                    document.getElementById("no").removeAttribute("name")
                } else if (val == "Guru SMP") {
                    $(".referensiwikrama").hide();
                    $(".referensialumni").hide();
                    $(".referensisiswa").hide();
                    $(".referensiguru").show();
                    $(".referensicalonsiswa").hide();
                    document.getElementById("alumni").removeAttribute("name")
                    document.getElementById("calon").removeAttribute("name")
                    document.getElementById("wikrama").removeAttribute("name")
                    document.getElementById("siswa").removeAttribute("name")
                    document.getElementById("guru").setAttribute("name", "nama")
                    document.getElementById("rayon").removeAttribute("name")
                    document.getElementById("lulus").removeAttribute("name")
                    document.getElementById("no").removeAttribute("name")
                    document.getElementById("smp").setAttribute("name", "asal_smp")
                } else if (val == "Calon Siswa SMK Wikrama") {
                    $(".referensiwikrama").hide();
                    $(".referensialumni").hide();
                    $(".referensisiswa").hide();
                    $(".referensiguru").hide();
                    $(".referensicalonsiswa").show();
                    document.getElementById("alumni").removeAttribute("name")
                    document.getElementById("siswa").removeAttribute("name")
                    document.getElementById("wikrama").removeAttribute("name")
                    document.getElementById("guru").removeAttribute("name")
                    document.getElementById("calon").setAttribute("name", "nama")
                    document.getElementById("rayon").removeAttribute("name")
                    document.getElementById("lulus").removeAttribute("name")
                    document.getElementById("smp").removeAttribute("name")
                    document.getElementById("no").setAttribute("name", "no_seleksi")
                } else {
                    $(".referensiwikrama").hide();
                    $(".referensialumni").hide();
                    $(".referensisiswa").hide();
                    $(".referensiguru").hide();
                    $(".referensicalonsiswa").hide();
                }
            });
        });
    </script>
@endsection
