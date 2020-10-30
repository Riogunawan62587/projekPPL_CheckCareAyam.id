@extends('template.master')

@section('title', 'Profil Saya')

@section('content')

<div class="jumbotrondetail">
  <div class="container">
    <div class="card">
      <h5 class="card-header text-center">DETAIL</h5>
      <div class="card-body">
        <table class="table table-striped tbl">
          <tbody>
            <tr>
              <th scope="row">Username :</th>
              <td>{{ $user->username }}</td>
            </tr>
            <tr>
              <th scope="row">Nama :</th>
              <td>{{ $user->nama }}</td>
            </tr>
            <tr>
              <th scope="row">Tanggal Lahir :</th>
              <td>{{ $user->tanggal_lahir }}</td>
            </tr>
            <tr>
              <th scope="row">Alamat :</th>
              <td>{{ $user->alamat }}</td>
            </tr>
            <tr>
              <th scope="row">Nomor Telpon :</th>
              <td>{{ $user->no_telp }}</td>
            </tr>
            <tr>
              <th scope="row">Email :</th>
              <td>{{ $user->email }}</td>
            </tr>
            <tr>
              <th scope="row">Jenis Kelamin :</th>
              <td>{{ $user->jenis_kelamin }}</td>
            </tr>
            <tr>
              <th scope="row">Nama Peternakan :</th>
              <td>{{ $user->nama_peternakan }}</td>
            </tr>
            <tr>
              <th scope="row">Alamat Peternakan :</th>
              <td>{{ $user->alamat_peternakan }}</td>
            </tr>
            <tr>
              <th scope="row">Tanggal Terbentuk :</th>
              <td>{{ $user->tanggal_terbentuk }}</td>
            </tr>
            <tr>
              <th scope="row">Visi :</th>
              <td>{{ $user->visi }}</td>
            </tr>
            <tr>
              <th scope="row">Surat Ijin Usaha :</th>
              <td><img src="{{ asset($user->surat_ijin_usaha) }}" alt="" style="width: 500px"></td>
            </tr>
            <tr class="float-left">

            </tr>
          </tbody>
        </table>
        <hr>
        <div class="container text-white grp">
          <td><a href="/home" class="btn btn-dark text-white">Kembali</a></td>
          <td><a href="{{ route('home.edit', $user->id) }}" class="btn btn-info text-white">Edit</a></td>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection