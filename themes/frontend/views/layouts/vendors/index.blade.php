@extends('layouts.app')
@section('content')

 <!-- INCLUDE HEADER -->
  @include('layouts.header.header-home')
 <!-- END INCLUDE HEADER -->

<div class="container">
      <div class="title w-75 mx-auto mb-5">
        <h1 class="text-center color-primary text-ptserif mb-5">Temukan kebutuhan untuk moment pernikahan anda</h1>
        <form class="seacrh" action="">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <div class="list">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-5">
            <div class="border-sort">
              <h4 class="text-ptserif">Kategori Vendor</h4>
              <hr>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="all">
                <label class="h5 form-check-label font-regular" for="all">
                  Semua
                </label>
              </div>
              @foreach ( $kategoris as $kategori)
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="{{ $kategori->nama_kategori }}">
                <label class="h5 form-check-label font-regular" for="{{ $kategori->nama_kategori }}">
                  {{ $kategori->nama_kategori }}
                </label>
              </div>
              @endforeach
            </div>
            <div class="border-sort">
              <h4 class="text-ptserif">Sortir Wilayah</h4>
              <hr>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="jaksel">
                <label class="h5 form-check-label font-regular" for="jaksel">
                  Jakarta Selatan
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="jakbar">
                <label class="h5 form-check-label font-regular" for="jakbar">
                  Jakarta Barat
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="jaktim">
                <label class="h5 form-check-label font-regular" for="jaktim">
                  Jakarta Timur
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="jakpus">
                <label class="h5 form-check-label font-regular" for="jakpus">
                  Jakarta Pusat
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="jakut">
                <label class="h5 form-check-label font-regular" for="jakut">
                  Jakarta Utara
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="bekasi">
                <label class="h5 form-check-label font-regular" for="bekasi">
                  Bekasi
                </label>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="bandung">
                <label class="h5 form-check-label font-regular" for="bandung">
                  Bandung
                </label>
              </div>
            </div>
            <div class="border-sort">
              <h4 class="text-ptserif">Sortir Rate Vendor</h4>
              <hr>
              <div class="form-check mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-wrap">
                  <input class="form-check-input mr-3 mt-0" type="checkbox" value="" id="jaksel">
                  <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                  <img class="mr-4" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                </div>
                <h5 class="form-check-label font-regular" for="jaksel">
                  5
                </h5>
              </div>
              <div class="form-check mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-wrap">
                  <input class="form-check-input mr-3 mt-0" type="checkbox" value="" id="jaksel">
                  <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                  <img class="mr-4" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                </div>
                <h5 class="form-check-label font-regular" for="jaksel">
                  4
                </h5>
              </div>
              <div class="form-check mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-wrap">
                  <input class="form-check-input mr-3 mt-0" type="checkbox" value="" id="jaksel">
                  <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                  
                </div>
                <h5 class="form-check-label font-regular" for="jaksel">
                  3
                </h5>
              </div>
              <div class="form-check mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-wrap">
                  <input class="form-check-input mr-3 mt-0" type="checkbox" value="" id="jaksel">
                  <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                  <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                </div>
                <h5 class="form-check-label font-regular" for="jaksel">
                  2
                </h5>
              </div>
              <div class="form-check mb-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center flex-wrap">
                  <input class="form-check-input mr-3 mt-0" type="checkbox" value="" id="jaksel">
                  <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                 
                </div>
                <h5 class="form-check-label font-regular" for="jaksel">
                  1
                </h5>
              </div>
            </div>
          </div>
          <div class="col-lf-9 col-md-8 col-7">

            @if( $vendors->count() > 0 )

            
            <div class="row">
              @foreach ( $vendors as $vendor )
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card noborder">
                 <img src="https://via.placeholder.com/100x100" class="card-img-top" alt="{{ $vendor->nama_vendor }}">
                  <div class="card-body no-paddingleft">
                    <h4 class="mb-2">{{ $vendor->nama_vendor }}</h4>
                    <p class="mb-2 font-light">{{ $vendor->alamat_lengkap  }}</p>
                    <div class="d-flex mb-2">
                    <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                    <img class="mr-2" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                    <img class="mr-4" src="{{ asset('themes/frontend/images/star-full.png') }}" alt="">
                    </div>
                    
                  </div>
                </div>
              </div>
             

            @endforeach
              
            </div>
            
            @else
            <div class="alert alert-primary" role="alert">
              DATA KOSONG, HUBUNGI ADMIN....!!!
            </div>
            @endif
           <!-- PENEMPATAN PAGINATION -->

             {{ $vendors->links('layouts.pagination.pagination') }}

           <!-- END -->
          </div>
        </div>
      </div>
    </div>

    @endsection