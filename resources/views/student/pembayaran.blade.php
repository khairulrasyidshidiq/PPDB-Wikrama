@extends('templates.user')

@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Pembayaran</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">Dashboard</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Pembayaran</h2>
            <p class="section-lead">Silahkan upload bukti bayar Anda di form berikut</p>
            <br>
            @if ($pembayaran == null)
                <form method="POST" action="/bayar" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form Pembayaran</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-start">
                                        <div class="col-sm-4">
                                            <label>Nama Bank</label>
                                            <select class="form-select form-select-md" aria-label=".form-select-lg example"
                                                name="nama_bank" id="bank">
                                                <option selected hidden>Pilih bank</option>
                                                @foreach ($bank as $item)
                                                    <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                                                @endforeach
                                                <option value="lainnya">LAINNYA</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Nama Pemilik Rekening</label>
                                            <input type="text" class="form-control" name="pemilik">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Nomimal</label>
                                            <input type="text" class="form-control" name="nominal" type-currency="IDR">
                                        </div>
                                    </div>
                                    <div class="inputbank">
                                        <div class="mb-2 mt-3">
                                            <label class="form-label">Nama Bank Lainnya</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Bank"
                                                id="lain">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row align-items-start">
                                        <div class="col-sm-6">
                                            <label>Foto Bukti</label>
                                            <input type="file" class="form-control" name="gambar">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row align-items-start">
                                        <div class="col-sm-8"></div>
                                        <div class="col-sm-4">
                                            <input type="submit" value="Upload Bukti Pembayaran"
                                                class="btn btn-block btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @elseif ($pembayaran->status == 'Pending')
                <div class="alert alert-warning">
                    <p>Pembayaran sedang diverifikasi, harap tunggu informasi selanjutnya.</p>
                </div>
            @elseif ($pembayaran->status == 'Success')
                <div class="alert alert-success">
                    <p>Pembayaran di verifikasi, silahkan untuk melakukan proses selanjutnya.</p>
                </div>
            @elseif ($pembayaran->status == 'Failed')
                <form method="POST" action="/bayar/pending" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Form Pembayaran</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-start">
                                        <div class="col-sm-4">
                                            <label>Nama Bank</label>
                                            <select class="form-select form-select-md" aria-label=".form-select-lg example"
                                                name="nama_bank" id="bank">
                                                <option hidden>Pilih bank</option>
                                                @foreach ($bank as $item)
                                                    <option value="{{ $item['name'] }}">{{ $item['name'] }}</option>
                                                @endforeach
                                                <option value="lainnya">LAINNYA</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Nama Pemilik Rekening</label>
                                            <input type="text" class="form-control" name="pemilik"
                                                value="{{ $pembayaran['pemilik'] }}">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Nomimal</label>
                                            <input type="text" class="form-control" name="nominal" type-currency="IDR"
                                                value="{{ $pembayaran['nominal'] }}">
                                        </div>
                                    </div>
                                    <div class="inputbank">
                                        <div class="mb-3 mt-3">
                                            <label class="form-label">Nama Bank Lainnya</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Bank"
                                                id="lain">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row align-items-start">
                                        <div class="col-sm-6">
                                            <label>Foto Bukti</label>
                                            <input type="file" class="form-control" name="gambar">
                                        </div>  
                                    </div>
                                    <br>
                                    <div class="row align-items-start">
                                        <div class="col-sm-8"></div>
                                        <div class="col-sm-4">
                                            <input type="submit" value="Upload Bukti Pembayaran"
                                                class="btn btn-block btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#bank').select2({
                placeholder: 'Pilih Sekolah',
            });
        });
        document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
            element.addEventListener('keyup', function(e) {
                let cursorPostion = this.selectionStart;
                let value = parseInt(this.value.replace(/[^,\d]/g, ''));
                let originalLenght = this.value.length;
                if (isNaN(value)) {
                    this.value = "";
                } else {
                    this.value = value.toLocaleString('id-ID', {
                        currency: 'IDR',
                        style: 'currency',
                        minimumFractionDigits: 0
                    });
                    cursorPostion = this.value.length - originalLenght + cursorPostion;
                    this.setSelectionRange(cursorPostion, cursorPostion);
                }
            });
        });
    </script>
    <script>
        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
            }
            toastr.warning("{{ session('error') }}");
        @endif
        $(document).ready(function() {
            $(".inputbank").hide();
            $("#bank").change(function() {
                var val = $(this).val();
                if (val == "lainnya") {
                    document.getElementById("lain").setAttribute("name", "nama_bank")
                    document.getElementById("bank").removeAttribute("name")
                    $(".inputbank").show();
                } else {
                    document.getElementById("bank").setAttribute("name", "nama_bank")
                    document.getElementById("lain").removeAttribute("name")
                    $(".inputbank").hide();
                }
            });
        });
    </script>
@endsection
