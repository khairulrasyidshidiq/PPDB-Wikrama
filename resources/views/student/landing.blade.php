@extends('templates.user')

@section('content')
<div class="section">
    <div class="section-header">
        <h1>{{ auth()->user()->roles }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">Dashboard</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Hi, {{ auth()->user()->name }}</h2>
        <p class="section-lead">Selamat datang!</p>
    </div>
    @if($pembayaran ==  null)
    @elseif($pembayaran->status == 'Pending')
    <div class="alert alert-warning">
        <p>Pembayaran sedang diverifikasi, harap tunggu informasi selanjutnya.</p>
    </div>
    @elseif($pembayaran->status == 'Success')
    <div class="alert alert-success">
        <p>Pembayaran di verifikasi, silahkan untuk melakukan proses selanjutnya.</p>
    </div>
    @elseif($pembayaran->status == 'Failed')
    <div class="alert alert-danger">
        <p>Pembayaran gagal, silahkan cek ke halaman form pembayaran untuk melakukan pengulangan pembayaran.</p>
    </div>
    @endif
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
<script>
    @if(Session::has('error'))
        toastr.options =
        {
          "closeButton" : true,
        }
              toastr.warning("{{ session('error') }}");
        @endif
</script>
@endsection