@extends('template.master')

@section('title', 'Edit')

@section('content')

<div class="jumbotronedit">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Edit Data') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('user.update', $user->id) }}">
              @csrf

              <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                <div class="col-md-6">
                  <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                    name="username" value="{{ ($user->username) }}" required autocomplete="username" autofocus>

                  @error('username')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                <div class="col-md-6">
                  <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ ($user->nama) }}" required autocomplete="nama" autofocus>

                  @error('nama')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="tanggal_lahir"
                  class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                <div class="col-md-6">
                  <input id="tanggal_lahir" type="date"
                    class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir"
                    value="{{ ($user->tanggal_lahir) }}" required autocomplete="tanggal_lahir" autofocus>

                  @error('tanggal_lahir')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                <div class="col-md-6">
                  <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                    name="alamat" value="{{ ($user->alamat) }}" required autocomplete="alamat" autofocus>

                  @error('alamat')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="no_telp" class="col-md-4 col-form-label text-md-right">{{ __('No Telp') }}</label>

                <div class="col-md-6">
                  <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror"
                    name="no_telp" value="{{ ($user->no_telp) }}" required autocomplete="no_telp" autofocus>

                  @error('no_telp')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="jenis_kelamin"
                  class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>

                <div class="col-md-6" style="margin-top: auto; margin-bottom: auto">
                  <div class="col" style="display: inline">
                    <input id="jenis_kelamin" type="radio" class=" @error('jenis_kelamin') is-invalid @enderror"
                      name="jenis_kelamin" value="laki - laki" required> Laki
                    - Laki
                  </div>

                  <div class="col" style="display: inline">
                    <input id="jenis_kelamin" type="Radio" class=" @error('jenis_kelamin') is-invalid @enderror"
                      name="jenis_kelamin" value="perempuan" required> Perempuan
                    @error('jenis_kelamin')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ ($user->email) }}" required autocomplete="email">

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-0 justify-content-center">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Update') }}
                  </button>
                  <a href="/user" class="btn btn-danger">Batal</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection