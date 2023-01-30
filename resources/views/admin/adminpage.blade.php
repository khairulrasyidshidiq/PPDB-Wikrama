@extends('admin.layout.admin')

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
        @if ($pembayaran->where('status', 'Pending')->count() != 0)
            <div class="alert alert-warning">
                <p>Silahkan mengecek data pendaftaran berserta bukti pembayaran calon siswa!</p>
            </div>
        @elseif($pembayaran->where('status', 'Pending')->count() == 0)
            <div class="alert alert-info">
                <p>Tidak ada data pendaftaran yang harus divalidasi.</p>
            </div>
        @endif
        <script>
            @if (Session::has('error'))
                toastr.options = {
                    "closeButton": true,
                }
                toastr.warning("{{ session('error') }}");
            @endif
        </script>
    @endsection
