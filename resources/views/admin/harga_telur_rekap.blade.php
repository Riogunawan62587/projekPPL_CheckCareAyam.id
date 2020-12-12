@extends('template.master')

@section('title', 'Harga Telur - Rekap')

@section('content')
<div class="jumbotron-harga_telur">
  <div class="col-4 row justify-content-center m-0">
    <div class="col align-self-center">
      <div class="text-white text-center">
        <h1>Rekap Harga Telur</h1>
        <p>Disini kamu bisa melihat harga - harga telur semua peternak yang menggunakan sistem ini</p>
        <hr class="garis">
        @if (isset($rata_rata))
        <div class="container mt-2">
          <button type="button" class="btn btn-lg btn-light" disabled>Rata - Rata Harga Jual : Rp
            {{ number_format($rata_rata, 2,",",".") }}</button>
        </div>
        @endif
        <a href="/home" class="btn btn-info text-white mt-2">Kembali</a>
      </div>
    </div>
  </div>
  <div class="col-8 m-0 p-0">
    <div class="jumbotron-daftar_telur pt-4">
      <div class="container row justify-content-center">
        <table class="table table-striped table-hover tabel">
          <thead class="thead-dark">
            <tr class="text-center">
              <th scope="col">No</th>
              <th scope="col">Nama Peternakan</th>
              <th scope="col">Harga Jual</th>
              <th scope="col">Harga Beli</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($daftar_telur as $dt)
            <tr class="table-light text-center">
              <th scope="row">{{ ++$no }}</th>
              <td>{{ $dt->user->nama_peternakan }}</b></td>
              <td>Rp.{{ $dt->harga_jual }}</td>
              <td>Rp.{{ $dt->harga_beli }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <p>{{ $daftar_telur->links() }}</p>
      </div>
    </div>
  </div>
</div>
@endsection