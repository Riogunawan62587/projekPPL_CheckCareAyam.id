@extends('template.master')

@section('title', 'Rekomendasi Pakan')

@section('content')

<div class="jumbotron-ayam-sehat">
  <div class="jumbotron-form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-mr-auto">
          <div class="container text-center logo-ayam-sehat">
            <img src="/img/ayam_sehat.png" alt="">
          </div>
          <div class="container hitung" style="background-color: #f3e4de">
            <div class="text-center">
              <form method="POST" action="{{ route('rekomendasi.sehat_hasil') }}">
                @csrf
                <div class="container clgn">
                  <h3 class="lgn">REKOMENDASI PAKAN AYAM SEHAT</h3>
                </div>

                <div class="row">
                  <div class="col container isi text-black mt-3">
                    <h3><b>BOBOT :</b></h3>
                    <h5>{{ $data_kandang->bobot_ratarata }} gr</h5>
                  </div>

                  <div class="col container isi text-black mt-3">
                    <h3><b>USIA :</b></h3>
                    <h5>{{ $data_kandang->usia_ayam }} minggu</h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col container isi text-black mt-3">
                    <h3><b>BATAS TOLERANSI BAWAH :</b></h3>
                    <h5>{{ $batas_toleransi_bawah }} gr</h5>
                  </div>

                  <div class="col container isi text-black mt-3">
                    <h3><b>BATAS TOLERANSI ATAS :</b></h3>
                    <h5>{{ $batas_toleransi_atas }} gr</h5>
                  </div>
                </div>

                <div class="container isi text-black mt-3">
                  <h3><b>NILAI TOLERANSI :</b></h3>
                  <h5>{{ $nilai_toleransi }} gr</h5>
                </div>

                <div class="form-group text-center spnemail">
                  <div class="row">
                    <label for="jumlah_dalam_rentang"
                      class="col input_hitung">{{ __('Jumlah Ayam Dalam Rentang Toleransi') }}</label>
                  </div>

                  <div class="row text-center">
                    <div class="col"></div>
                    <div class="col form-horizontal text-center">
                      <input id="jumlah_dalam_rentang" type="text"
                        class="form-control @error('jumlah_dalam_rentang') is-invalid @enderror"
                        name="jumlah_dalam_rentang" value="{{ old('jumlah_dalam_rentang') }}" required
                        autocomplete="jumlah_dalam_rentang" autofocus>
                      @error('jumlah_dalam_rentang')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="col"></div>
                  </div>
                </div>

                <div class="form-group row mb-0">
                  <div class="container cn">
                    <button type="submit" class="btn btn-primary tmbl">
                      {{ __('Submit') }}
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