@extends('template.master')

@section('title', 'Informasi Penyakit')

@section('content')

<div class="jumbotron-daftar_penyakit">
  <div class="daftar_penyakit text-center">
    <div class="container">
      <h1>DAFTAR PENYAKIT</h1>
    </div>
    <div class="container">
      <p>Berisikan Info Tentang Daftar Penyakit yang Biasanya Dialami Oleh Ayam Petelur</p>
    </div>
    <hr class="garis">
    <div class="row">
      @foreach ($daftar_penyakit as $daftar)

      {{-- Modal Lebih Lengkap --}}
      <div class=" modal fade modalst" id="exampleModal1{{ $daftar->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">{{ $daftar->nama_penyakit }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <label for="penyebab_penyakit">
                <h4><b>Penyebab Penyakit</b></h4>
              </label>
              <p id="penyebab_penyakit">{{ $daftar->penyebab_penyakit }}</p>

              <label for="gejala_penyakit">
                <h4><b>Gejala Penyakit</b></h4>
              </label>
              <p id="gejala_penyakit">{{ $daftar->gejala_penyakit }}</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      {{-- Modal Edit --}}
      <div class="modal fade modalst" id="exampleModal2{{ $daftar->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Informasi Penyakit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('daftar_penyakit.update_penyakit', $daftar->id) }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="nama_penyakit">Nama Penyakit</label>
                  <input type="text" class="form-control m-auto" id="nama_penyakit" name="nama_penyakit"
                    value="{{ $daftar->nama_penyakit }}">
                </div>
                <div class="form-group">
                  <label for="penyebab_penyakit">Penyebab Penyakit</label>
                  <input type="text" class="form-control m-auto" id="penyebab_penyakit" name="penyebab_penyakit"
                    value="{{ $daftar->penyebab_penyakit }}">
                </div>
                <div class="form-group">
                  <label for="gejala_penyakit">Gejala Penyakit</label>
                  <textarea name="gejala_penyakit" id="gejala_penyakit" cols="30" rows="6"
                    class="form-control m-auto">{{ $daftar->gejala_penyakit }}</textarea>
                  {{-- <input type="text-area" class="form-control m-auto" id="gejala_penyakit" name="gejala_penyakit"
                    value="{{ $daftar->gejala_penyakit }}"> --}}
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      {{-- Untuk gejala hanya akan ditampilkan 100 karakter pertama saja jika lebih dari 100 karakter --}}
      <div class="col-sm-3 pb-3 pt-3">
        <div class="card p-3">
          <img src="/img/logo2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title text-uppercase"><b>{{ $daftar->nama_penyakit }}</b></h4>
            <h5 class="card-text"><b>GEJALA :</b></h5>
            @if (strlen($daftar->gejala_penyakit) > 100)
            <p class="card-text">{{ substr($daftar->gejala_penyakit, 0, 100).'...' }}</p>
            @else
            <p class="card-text">{{ $daftar->gejala_penyakit }}</p>
            @endif
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1{{ $daftar->id }}">Lihat
              Lebih
              Lengkap</button>
            <button class="btn btn-success" data-toggle="modal"
              data-target="#exampleModal2{{ $daftar->id }}">Edit</button>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    {{-- Modal Tambah Penyakit --}}
    <div class="modal fade modalst" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Informasi Penyakit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('daftar_penyakit.simpan_penyakit') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="nama_penyakit">Nama Penyakit</label>
                <input type="text" class="form-control m-auto" id="nama_penyakit" name="nama_penyakit">
              </div>
              <div class="form-group">
                <label for="penyebab_penyakit">Penyebab Penyakit</label>
                <input type="text" class="form-control m-auto" id="penyebab_penyakit" name="penyebab_penyakit">
              </div>
              <div class="form-group">
                <label for="gejala_penyakit">Gejala Penyakit</label>
                <textarea name="gejala_penyakit" id="gejala_penyakit" cols="30" rows="6"
                  class="form-control m-auto"></textarea>
                {{-- <input type="text" class="form-control m-auto" id="gejala_penyakit" name="gejala_penyakit"> --}}
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    {{-- @if (Auth::check() && Auth::user()->role_id == 1) --}}
    <div class="co modal-xl modal-dialog-centeredntainer">
      <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal3">Tambah Data</a>
    </div>
    {{-- @endif --}}

  </div>
</div>
</div>

@endsection