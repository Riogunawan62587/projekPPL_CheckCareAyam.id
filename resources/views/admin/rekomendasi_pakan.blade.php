@extends('template.master')

@section('title', 'Rekomendasi Pakan')

@section('content')

<div class="jumbotron-rekomendasi">

  <div class="jumbotron-pilihan align-items-center">
    <div class="container-pilihan mx-auto text-center">
      <div class="container-1 pt-2">
        <h1 class="mt-4">Ayam Sehat</h1>
        <img src="{{ asset('/img/ayam_sehat.png') }}" style="width: 300px">
        <div class="container mt-5">
          <a href="{{ route('rekomendasi.sehat') }}" class="btn btn-success btn-1">Klik Disini</a>
        </div>
      </div>
      <div class="container-2 pt-2">
        <h1 class="mt-4">Ayam Sakit</h1>
        <img src="{{ asset('/img/ayam_sakit.png') }}" style="width: 300px">
        <div class="container mt-4">
          <a href="{{ route('rekomendasi.sakit') }}" class="btn btn-success btn-2">Klik Disini</a>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="containerr">
    <div class="row justify-content-center">
      <div class="col-mr-auto">
        <div class="container text-center logo">
          <img src="/img/logo2.png" alt="">
        </div>
        <div class="container as" style="background-color: white">
          <div class="text-center">
            <form method="POST" action="{{ route('login') }}">
  @csrf
  <div class="container clgn">
    <h3 class="lgn">REKOMENDASI PAKAN</h3>
  </div>

  <div class="form-group text-center spnemail">
    <div class="row">
      <label for="email" class="col">{{ __('Jumlah Ayam per kandang') }}</label>
    </div>

    <div class="row text-center">
      <div class="col"></div>
      <div class="col form-horizontal text-center">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
          value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
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
      <label for="email" class="col">{{ __('Usia rata - rata') }}</label>
    </div>

    <div class="row text-center">
      <div class="col"></div>
      <div class="col form-horizontal text-center">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
          value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
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
      <label for="password" class="col">{{ __('Bobot rata - rata') }}</label>
    </div>

    <div class="row text-center">
      <div class="col"></div>
      <div class="col form-horizontal">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
          name="password" required autocomplete="current-password">

        @error('password')
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
</div> --}}
</div>

@endsection