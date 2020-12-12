@extends('template.master')

@section('title', 'Harga Telur')

@section('content')
<div class="jumbotron-harga_telur">
  <div class="col-4 row justify-content-center m-0">
    <div class="col align-self-center">

      {{-- Modal Tambah --}}
      <div class="modal fade modalst text-center" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Harga Telur</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('telur.store') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="nama_pasar">Nama Pasar</label>
                  <input type="text" class="form-control m-auto" id="nama_pasar"
                    value="{{Auth::user()->nama_peternakan}}" disabled>
                </div>
                <div class="form-group">
                  <label for="harga_jual">Harga Jual Telur</label>
                  <input type="text" class="form-control m-auto" id="harga_jual" name="harga_jual" required>
                </div>
                <div class="form-group">
                  <label for="harga_beli">Harga Beli Telur</label>
                  <input type="text" class="form-control m-auto" id="harga_beli" name="harga_beli" required>
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="text" class="form-control m-auto" id="tanggal" name="tanggal"
                    value="{{ $tanggal_sekarang->format('Y-m-d') }}" disabled>
                </div>
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="text-white text-center">
        <h1>Daftar Harga Telur</h1>
        <p>Disini kamu bisa menambahkan serta melihat harga - harga telur antar peternak yang menggunakan sistem ini</p>
        <hr class="garis">
        @if (Auth::check() && Auth::user()->role_id == 2 && Auth::user()->status_akun =='Terverifikasi')
        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Tambah Data</a>
        <a href="/home" class="btn btn-info text-white">Kembali</a>
        <div class="row justify-content-center mt-2">
          <p>{{ $daftar_telur->links() }}</p>
        </div>
        @endif
        @if (Auth::check() && Auth::user()->role_id == 1)
        <a href="/rekap_harga_telur" class="btn btn-success">Rekap Data
          Harga
          Telur</a>
        <a href="/home" class="btn btn-info text-white">Kembali</a>
        <div class="row justify-content-center mt-2">
          <p>{{ $daftar_telur->links() }}</p>
        </div>
        @endif
      </div>
    </div>
  </div>
  <div class="col-8 m-0 p-0">
    <div class="jumbotron-daftar_telur pt-4">
      <div class="container row justify-content-center">
        @foreach ($daftar_telur as $dt)
        <div class="col-4 cd1">
          <div class="card cd m-0" style="width: 15rem;">
            <img src="/img/telur_daftar.jpg" class="card-img-top" alt="..." style="width: 15rem; border-radius: 10px">
            <div class="card-body text-center">
              <p class="card-text"><b>{{ $dt->user->nama_peternakan }}</b></p>
              <hr class="garis2">
              <p class="card-text"><b>Harga Jual : </b>Rp.{{ $dt->harga_jual }}</p>
              <p class="card-text"><b>Harga Beli : </b>Rp.{{ $dt->harga_beli }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection