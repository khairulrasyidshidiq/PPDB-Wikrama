@extends('admin.layout.admin')

@section('content')
    <div class="section">
        <div class="section-header">
            <h1>Verifikasi Pembayaran</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">Dashboard</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Siswa</h4>
                    </div>
                    <div class="card-body">
                        <table id="data-admin" class="table table-striped table-bordered table-md"
                            style="width: 100%; padding:2%;" cellspacing="1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Registrasi</th>
                                    <th>Nama</th>
                                    <th>Bukti Pembayaran</th>
                                    <th>Detail Pendaftaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($student as $item)
                                    <tr>
                                        @if ($item['roles'] == 'Student')
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item['id'] }}</td>
                                            <td>{{ $item['name'] }}</td>
                                            <td><a href="/admin/pembayaran/{{ $item['id'] }}">Lihat</a></td>
                                            <td><a href="/admin/detail/{{ $item['id'] }}">Detail</a></td>
                                            <td class="d-flex">
                                                @if ($item->payment == null)
                                                    Belum melakukan pembayaran
                                                @elseif($item->payment->status == 'Pending')
                                                    <form action="/admin/success/{{ $item['id'] }}" method="POST"
                                                        class="me-2">
                                                        @csrf
                                                        @method('patch')
                                                        <button type="submit" class="btn btn-info">Validasi</button>
                                                    </form>
                                                    <form action="/admin/failed/{{ $item['id'] }}" method="POST">
                                                        @csrf
                                                        @method('patch')
                                                        <button type="submit" class="btn btn-danger">Tolak</button>
                                                    </form>
                                                @elseif($item->payment->status == 'Success')
                                                    Success
                                                @elseif($item->payment->status == 'Failed')
                                                    Rejected
                                                @endif
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
