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
        <div class="card">
            <div class="card-header">
                <h4>Detail Pembayaran</h4>
            </div>
            <div class="card-body">
                @if ($pembayaran == null)
                    <p>Belum melakukan pembayaran</p>
                @else
                    <ul class="m-0 text-center">
                        <div class="container">
                            <img src="{{ asset('assets/bukti/' . $pembayaran['gambar']) }}" alt="" width="600px">
                        </div>
                    </ul>
                    <ul class="m-0 text-center">Nama Bank : {{ $pembayaran['nama_bank'] }}</ul>
                    <ul class="m-0 text-center">Nama Pemilik Rekening : {{ $pembayaran['pemilik'] }}</ul>
                    <ul class="m-0 text-center">Nominal : {{ $pembayaran['nominal'] }} </ul>
                    <a href="/verifikasi" class="btn btn-primary">Kembali</a>
                @endif
            </div>
        </div>
    @endsection
