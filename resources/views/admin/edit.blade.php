@extends('template.master')

@section('title', 'Edit')

@section('content')

<div class="jumbotronedit">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{ __('Edit Data') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('user.update', $user->id) }}">
              @csrf

              <div class="row align-items-center">

                {{-- container kiri --}}
                <div class="container col-6">
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
                      @if ($user->jenis_kelamin == 'laki - laki')
                      <div class="col" style="display: inline">
                        <input id="jenis_kelamin" type="radio" class=" @error('jenis_kelamin') is-invalid @enderror"
                          name="jenis_kelamin" value="laki - laki" checked> Laki- Laki
                      </div>
                      @else
                      <div class="col" style="display: inline">
                        <input id="jenis_kelamin" type="radio" class=" @error('jenis_kelamin') is-invalid @enderror"
                          name="jenis_kelamin" value="laki - laki"> Laki- Laki
                      </div>
                      @endif

                      @if ($user->jenis_kelamin == 'perempuan')
                      <div class="col" style="display: inline">
                        <input id="jenis_kelamin" type="Radio" class=" @error('jenis_kelamin') is-invalid @enderror"
                          name="jenis_kelamin" value="perempuan" checked> Perempuan
                        @error('jenis_kelamin')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      @else
                      <div class="col" style="display: inline">
                        <input id="jenis_kelamin" type="Radio" class=" @error('jenis_kelamin') is-invalid @enderror"
                          name="jenis_kelamin" value="perempuan"> Perempuan
                        @error('jenis_kelamin')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ ($user->email) }}" required autocomplete="email">

                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                </div>

                {{-- container kanan --}}
                <div class="container col-6">
                  <div class="form-group row">
                    <label for="nama_peternakan"
                      class="col-md-4 col-form-label text-md-right">{{ __('Nama Peternakan') }}</label>

                    <div class="col-md-6">
                      <input id="nama_peternakan" type="text"
                        class="form-control @error('nama_peternakan') is-invalid @enderror" name="nama_peternakan"
                        value="{{ ($user->nama_peternakan) }}" required autocomplete="nama_peternakan" autofocus>

                      @error('nama_peternakan')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="alamat_peternakan"
                      class="col-md-4 col-form-label text-md-right">{{ __('Alamat Peternakan') }}</label>

                    <div class="col-md-6">
                      <input id="alamat_peternakan" type="text"
                        class="form-control @error('alamat_peternakan') is-invalid @enderror" name="alamat_peternakan"
                        value="{{ ($user->alamat_peternakan) }}" required autocomplete="alamat_peternakan" autofocus>

                      @error('alamat_peternakan')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="tanggal_terbentuk"
                      class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Terbentuk') }}</label>

                    <div class="col-md-6">
                      <input id="tanggal_terbentuk" type="date"
                        class="form-control @error('tanggal_terbentuk') is-invalid @enderror" name="tanggal_terbentuk"
                        value="{{ ($user->tanggal_terbentuk) }}" required autocomplete="tanggal_terbentuk" autofocus>

                      @error('tanggal_terbentuk')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="visi" class="col-md-4 col-form-label text-md-right">{{ __('Visi') }}</label>

                    <div class="col-md-6">
                      <input id="visi" type="text" class="form-control @error('alamat') is-invalid @enderror"
                        name="visi" value="{{ ($user->visi) }}" required autocomplete="visi" autofocus>

                      @error('visi')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">

                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="password-confirm"
                      class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row mb-0 justify-content-center">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Update') }}
                  </button>
                  <a href="{{ route('user.detail', $user->id)}}" class="btn btn-danger">Batal</a>
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