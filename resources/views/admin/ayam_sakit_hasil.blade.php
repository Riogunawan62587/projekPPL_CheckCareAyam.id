@extends('template.master')

@section('title', 'Rekomendasi Pakan')

@section('content')

<div class="jumbotron-ayam-sakit">
  <div class="jumbotron-form align-items-center">
    <div class="container-hasil mx-auto text-center align-items-center">
      <div class="col-5 p-0 ml-3 mb-3">
        <h1>Data Ayam</h1>
        <div class="container">
          <div class="row1 d-lg-block mt-4 pt-1">
            <p class="m-0">Usia Ayam</p>
            <h3><b>{{ $usia_ayam }} minggu</b></h3>
          </div>
          <div class="row1 d-lg-block mt-4 pt-1">
            <p class="m-0">Bobot</p>
            <h3><b>{{ $bobot_ratarata }} gr</b></h3>
          </div>
          <div class="row1 d-lg-block mt-4 pt-1">
            <p class="m-0">Ciri - Ciri</p>
            <h3><b>{{ $ciri_ciri }}</b></h3>
          </div>
          <div class="row1 d-lg-block mt-4 pt-1">
            <p class="m-0">Bobot Ayam Normal (Sehat) di Umur {{ $usia_ayam }} minggu</p>
            <h3><b>{{ $bobot_sebenarnya }} gr</b></h3>
          </div>
          <div class="row justify-content-center mt-4">
            <a href="{{ route('rekomendasi.sakit') }}" class="btn btn-success mt-1">Masukkan Ulang Data</a>
          </div>
        </div>
      </div>
      <div class="col-1">
        <div class="row justify-content-center">
          <div class="row-garis-tengah"></div>
        </div>
      </div>
      <div class="col-6">
        <div class="container content-kanan">
          <h1>Rekomendasi Pakan</h1>
          <img src="{{ asset('/img/ayam_sakit.png') }}" style="width: 180px">
          <div class="container mt-4 mb-1">
            <div class="row justify-content-center">
              <h4>Total Pakan : {{ $pakan_per_umur }} gr</h4>
            </div>
            <div class="row justify-content-center">
              <h5>50% : 35% : 15%
              </h5>
            </div>
            <div class="row justify-content-center">
              <div class="col mt-2 p1">
                <div class="row2 d-lg-block pt-1" style="width: 87px">
                  <p class="m-0">Jagung</p>
                  <h4><b>{{ $data_jagung }} gr</b></h4>
                </div>
              </div>
              <div class="col mt-2">
                <div class="row2 d-lg-block pt-1" style="width: 87px">
                  <p class="m-0">Konsentrat</p>
                  <h4><b>{{ $data_konsentrat }} gr</b></h4>
                </div>
              </div>
              <div class="col mt-2 p2">
                <div class="row2 d-lg-block pt-1" style="width: 87px">
                  <p class="m-0">Bekatul</p>
                  <h4><b>{{ $data_bekatul }} gr</b></h4>
                </div>
              </div>
            </div>
            <div class="col mt-3">
              <div class="row2 d-lg-block pt-1">
                <p class="m-0">Vitamin (VitaChick)</p>
                <h4><b>{{ $vitamin }} sendok makan</b></h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection