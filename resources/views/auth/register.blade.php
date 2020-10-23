@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Username"
                                class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="Username" type="text"
                                    class="form-control @error('Username') is-invalid @enderror" name="Username"
                                    value="{{ old('Username') }}" required autocomplete="Username" autofocus>

                                @error('Username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Nama"
                                class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="Nama" type="text" class="form-control @error('Nama') is-invalid @enderror"
                                    name="Nama" value="{{ old('Nama') }}" required autocomplete="Nama" autofocus>

                                @error('Nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Tanggal_Lahir"
                                class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                            <div class="col-md-6">
                                <input id="Tanggal_Lahir" type="date"
                                    class="form-control @error('Tanggal_Lahir') is-invalid @enderror"
                                    name="Tanggal_Lahir" value="{{ old('Tanggal_Lahir') }}" required
                                    autocomplete="Tanggal_Lahir" autofocus>

                                @error('Tanggal_Lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="Alamat" type="text"
                                    class="form-control @error('Alamat') is-invalid @enderror" name="Alamat"
                                    value="{{ old('Alamat') }}" required autocomplete="Alamat" autofocus>

                                @error('Alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="No_Telp"
                                class="col-md-4 col-form-label text-md-right">{{ __('No Telp') }}</label>

                            <div class="col-md-6">
                                <input id="No_Telp" type="text"
                                    class="form-control @error('No_Telp') is-invalid @enderror" name="No_Telp"
                                    value="{{ old('No_Telp') }}" required autocomplete="No_Telp" autofocus>

                                @error('No_Telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Jenis_Kelamin"
                                class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>

                            <div class="col-md-6" style="margin-top: auto; margin-bottom: auto">
                                <div class="col" style="display: inline">
                                    <input id="Jenis_Kelamin" type="Radio"
                                        class="form-control @error('Jenis_Kelamin') is-invalid @enderror"
                                        name="Jenis_Kelamin" value="laki - laki" required> Laki
                                    - Laki
                                </div>

                                <div class="col" style="display: inline">
                                    <input id="Jenis_Kelamin" type="Radio"
                                        class="form-control @error('Jenis_Kelamin') is-invalid @enderror"
                                        name="Jenis_Kelamin" value="perempuan" required> Perempuan
                                    @error('Jenis_Kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="Email" type="email" class="form-control @error('Email') is-invalid @enderror"
                                    name="Email" value="{{ old('Email') }}" required autocomplete="Email">

                                @error('Email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="Password" type="password"
                                    class="form-control @error('Password') is-invalid @enderror" name="Password"
                                    required autocomplete="new-password">

                                @error('Password')
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
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection