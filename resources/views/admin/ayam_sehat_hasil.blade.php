@extends('template.master')

@section('title', 'Rekomendasi Pakan')

@section('content')

<?php 
  if ($keseragaman >= 80) {
    $status = 'Baik';
  } else {
    $status = 'Tidak Baik';
  } 
?>

<div class="jumbotron-ayam-sehat">
  <div class="jumbotron-form align-items-center">
    <div class="container-hasil mx-auto text-center align-items-center">
      <div class="col-5 p-0 ml-3 mb-3">
        <div class="container">
          <div class="row1 d-lg-block mt-4 pt-1">
            <p class="m-0">Jumlah Ayam</p>
            <h3><b>{{ $jumlah_ayam }} ekor</b></h3>
          </div>
          <div class="row1 d-lg-block mt-4 pt-1">
            <p class="m-0">Usia Ayam</p>
            <h3><b>{{ $usia_ayam }} minggu</b></h3>
          </div>
          <div class="row1 d-lg-block mt-4 pt-1">
            <p class="m-0">Bobot Rata - Rata</p>
            <h3><b>{{ $bobot_ratarata }} gr</b></h3>
          </div>
          <div class="row d-lg-block mt-4">
            <h3 class="text">Keseragaman Bobot :</h3>
            <h2><b>{{ $keseragaman }}%</b></h2>
            <h4>Nilai Keseragaman Bobot : </h4>
            <h2><b>{{ $status }}</b></h2>
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
          <img src="{{ asset('/img/ayam_sehat.png') }}" style="width: 180px">
          <div class="container mt-3">
            <div class="row justify-content-center">
              <h4>Total Pakan : {{ $jumlah_pakan_perkandang }} gr</h4>
            </div>
            <div class="row justify-content-center">
              <div class="col mt-2">
                <div class="row2 d-lg-block pt-1">
                  <p class="m-0">Jagung</p>
                  <h4><b>{{ $data_jagung }} gr</b></h4>
                </div>
              </div>
              <div class="col mt-2">
                <div class="row2 d-lg-block pt-1">
                  <p class="m-0">Konsentrat</p>
                  <h4><b>{{ $data_konsentrat }} gr</b></h4>
                </div>
              </div>
              <div class="col mt-2">
                <div class="row2 d-lg-block pt-1">
                  <p class="m-0">Bekatul</p>
                  <h4><b>{{ $data_bekatul }} gr</b></h4>
                </div>
              </div>
            </div>
            <div class="row justify-content-center mt-4">
              <a href="{{ route('rekomendasi.sehat') }}" class="btn btn-success mt-1">Masukkan Ulang Data</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection