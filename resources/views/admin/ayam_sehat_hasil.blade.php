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
          <div class="row1 d-lg-block mt-4 pt-3">
            <h3>{{ $jumlah_ayam }} ekor</h3>
          </div>
          <div class="row1 d-lg-block mt-4 pt-3">
            <h3>{{ $usia_ayam }} minggu</h3>
          </div>
          <div class="row1 d-lg-block mt-4 pt-3">
            <h3>{{ $bobot_ratarata }} gr</h3>
          </div>
          <div class="row d-lg-block mt-5">
            <h3 class="text">Keseragaman Pangan :</h3>
            <h1>{{ $keseragaman }}%</h1>
            <a href="{{ route('rekomendasi.sehat') }}" class="btn btn-success mt-1">Masukkan Ulang Data</a>
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
          <img src="{{ asset('/img/ayam_sehat.png') }}" style="width: 250px">
          <div class="container mt-5">
            <div class="row justify-content-center">
              <h4>Nilai Keseragaman Pakan : </h4>
            </div>
            <div class="row justify-content-center">
              <h4><b>{{ $status }}</b></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection