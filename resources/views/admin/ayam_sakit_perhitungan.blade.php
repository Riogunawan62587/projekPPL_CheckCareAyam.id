@extends('template.master')

@section('title', 'Rekomendasi Pakan')

@section('content')

<div class="jumbotron-ayam-sakit">
  <div class="jumbotron-form">
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-mr-auto">
          <div class="container text-center logo-ayam-sakit">
            <img src="/img/ayam_sakit.png" alt="">
          </div>
          <div class="container hitungs" style="background-color: #f3e4de">
            <div class="text-center">
              <form method="POST" action="{{ route('rekomendasi.sakit_hasil') }}">
                @csrf
                <div class="container clgn">
                  <h3 class="lgn">REKOMENDASI PAKAN AYAM SAKIT</h3>
                </div>

                <div class="row">
                  <div class="col container isi text-black mt-4">
                    <h3><b>BOBOT :</b></h3>
                    <h5>{{ $data_kandang->bobot_ratarata }} gr</h5>
                  </div>

                  <div class="col container isi text-black mt-4">
                    <h3><b>USIA :</b></h3>
                    <h5>{{ $data_kandang->usia_ayam }} minggu</h5>
                  </div>
                </div>

                <div class="container isi text-black mt-4">
                  <h3><b>CIRI - CIRI :</b></h3>
                  <h5>{{ $data_kandang->ciri_ciri }}</h5>
                </div>

                <div class="form-group row mb-0">
                  <div class="container cn">
                    <button type="submit" class="btn btn-primary tmbl">
                      {{ __('Lihat Rekomendasi Pakan') }}
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection