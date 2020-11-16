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
          <div class="container as" style="background-color: white">
            <div class="text-center">
              <form method="POST" action="{{ route('rekomendasi.sehat_hasil') }}">
                @csrf
                <div class="container clgn">
                  <h3 class="lgn">REKOMENDASI PAKAN AYAM SEHAT</h3>
                </div>

                <div class="form-group text-center spnemail">
                  <div class="row">
                    <label for="jumlah" class="col">{{ __('Jumlah Ayam per kandang') }}</label>
                  </div>

                  <div class="row text-center">
                    <div class="col"></div>
                    <div class="col form-horizontal text-center">
                      <input id="jumlah" type="text" class="form-control @error('jumlah') is-invalid @enderror"
                        name="jumlah" value="{{ old('jumlah') }}" required autocomplete="jumlah" autofocus>
                      @error('jumlah')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="col"></div>
                  </div>
                </div>

                <div class="form-group text-center spnemail">
                  <div class="row">
                    <label for="usia" class="col">{{ __('Usia rata - rata') }}</label>
                  </div>

                  <div class="row text-center">
                    <div class="col"></div>
                    <div class="col form-horizontal text-center">
                      <input id="usia" type="text" class="form-control @error('usia') is-invalid @enderror" name="usia"
                        value="{{ old('usia') }}" required autocomplete="usia" autofocus>
                      @error('usia')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="col"></div>
                  </div>
                </div>

                <div class="form-group border-0 text-center spnpassword">
                  <div class="row">
                    <label for="bobot" class="col">{{ __('Bobot rata - rata') }}</label>
                  </div>

                  <div class="row text-center">
                    <div class="col"></div>
                    <div class="col form-horizontal">
                      <input id="bobot" type="text" class="form-control @error('bobot') is-invalid @enderror"
                        name="bobot" required autocomplete="bobot">

                      @error('bobot')
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