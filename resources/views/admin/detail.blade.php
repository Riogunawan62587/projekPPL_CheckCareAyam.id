@extends('template.master')

@section('title', 'Detail')

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
            <tr class="float-left">
              <div class="container text-white grp">
                <td><a href="/user" class="btn btn-dark text-white">Kembali</a></td>
                <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-info text-white">Edit</a></td>
              </div>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection