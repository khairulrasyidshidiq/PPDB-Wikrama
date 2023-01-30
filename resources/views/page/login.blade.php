@extends('templates.layout')

@section('content')
    <div data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-delay="0" data-aos-duration="2000">
        <div class="container mt-5">
            <div class="card p-2 grid">
                <div class="image">
                    <img src="{{ asset('/assets/img/gedungwk.jpg') }}" alt="" width="550px" height="500px">
                </div>
                <div class="d-flex align-items-center">
                    <div class="container">
                        <div class="text-center">
                            <h4 class="fw-bold">Login</h4>
                            <p class="fw-bold text-secondary">Masuk ke Akun PPDB-mu</p>
                        </div>
                        <div class="loginform">
                            <form action="/loginstore" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Masukkan Email Aktif">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password"
                                        placeholder="Masukkan Password">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-warning button fw-bold"
                                        id="buttonhover">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
            }
            toastr.warning("{{ session('message') }}");
        @endif
    </script>
@endsection
