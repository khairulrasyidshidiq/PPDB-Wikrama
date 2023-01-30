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
                <h4>Detail Calon Siswa</h4>
            </div>
            <div class="card-body">
                <li class="text-center">NISN : {{ $student['nisn'] }}</li>
                <li class="text-center">Nama Siswa : {{ $student['name'] }}</li>
                <li class="text-center">Jenis Kelamin : {{ $student['jenis_kelamin'] }}</li>
                <li class="text-center">Asal Sekolah : {{ $student['asal_sekolah'] }}</li>
                <li class="text-center">Email : {{ $student['email'] }}</li>
                <li class="text-center">No HP : {{ $student['no_hp'] }}</li>
                <li class="text-center">No HP Ayah : {{ $student['no_hp_ayah'] }}</li>
                <li class="text-center">No HP Ibu : {{ $student['no_hp_ibu'] }}</li>
                <a href="/verifikasi" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    @endsection
