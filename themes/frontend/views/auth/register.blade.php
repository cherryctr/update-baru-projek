@extends('layouts.app')

@section('content')
<header class="py-sm-5 py-3">
      <div class="container">
        <div class="d-flex flex-sm-row flex-column align-items-center justify-content-between">
          <div class="d-flex align-items-center mb-sm-0 mb-2">
            <img src="{{ asset('themes/frontend/images/logo.png') }}" alt="">
          </div>
          <h1 class="h5 font-regular mr-3 pointer">Sudah punya akun? <a href="login.html" class="color-primary font-regular ml-2 pointer">Masuk</a></h1>
        </div>
      </div>
    </header>

    <div class="container pb-5">
      <div class="row">
        <div class="col-md-7 mx-auto">
          <h1 class="text-secondary text-center text-ptserif mb-2">Halo, selamat datang kembali!</h1>
          <h2 class="h3 font-regular text-center text-secondary mb-5">Daftarkan dirimu sekarang untuk mendapatkan penawaran exclusive</h2>
          <form>
            <div class="form-group">
              <label for="name">Nama Pengguna</label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="notel">Nomor Handphone</label>
              <input type="text" class="form-control" id="notel" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="email">Alamat Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password">
            </div>
            <div class="p-4">
              <div class="login-or">
                <p class="mb-0">or</p>
              </div>
            </div>
            <a class="btn btn-outline-dark w-100 py-2 mb-4"><img class="mr-4 icon-google" src="{{ asset('themes/frontend/images/icon-google.svg') }}"> Sign in with Google</a> 
            <a href="login.html" class="btn btn-booking py-2">Daftar</a>
          </form>
        </div>
      </div>
    </div>
@endsection
