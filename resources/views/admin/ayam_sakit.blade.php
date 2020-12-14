@extends('template.master')

@section('title', 'Rekomendasi Pakan')

@section('content')

<div class="jumbotron-ayam-sakit">
  <div class="jumbotron-form">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-mr-auto">
          <div class="container text-center logo-ayam-sehat">
            <img src="/img/ayam_sehat.png" alt="">
          </div>
          <div class="container as" style="background-color: white">
            <div class="text-center">
              <form method="POST" action="{{ route('rekomendasi.sakit_perhitungan') }}">
                @csrf
                <div class="container clgn">
                  <h3 class="lgn">REKOMENDASI PAKAN AYAM SAKIT</h3>
                </div>

                <div class="form-group text-center spnemail">
                  <div class="row">
                    <label for="usia" class="col">{{ __('Usia (1-17 minggu)') }}</label>
                  </div>

                  <div class="row text-center">
                    <div class="col"></div>
                    <div class="col form-horizontal text-center">
                      <input id="usia" type="text" class="form-control @error('usia') is-invalid @enderror" name="usia"
                        value="{{ old('usia') }}" autocomplete="usia" autofocus>
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
                    <label for="bobot" class="col">{{ __('Bobot ayam (>= 60 gr)') }}</label>
                  </div>

                  <div class="row text-center">
                    <div class="col"></div>
                    <div class="col form-horizontal">
                      <input id="bobot" type="text" class="form-control @error('bobot') is-invalid @enderror"
                        name="bobot" value="{{ old('bobot') }}" autocomplete="bobot" autofocus>

                      @error('bobot')
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
                    <label for="ciri" class="col">{{ __('Ciri - ciri ayam') }}</label>
                  </div>

                  <div class="row text-center">
                    <div class="col"></div>
                    <div class="col form-horizontal">
                      <input id="ciri" type="text" class="form-control @error('ciri') is-invalid @enderror" name="ciri"
                        value="{{ old('ciri') }}" autocomplete="ciri" autofocus>

                      @error('ciri')
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