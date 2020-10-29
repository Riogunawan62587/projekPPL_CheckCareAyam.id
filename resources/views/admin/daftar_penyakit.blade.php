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
    <div class="container">
      <form action="" method="get">
        <div class="form-horizontal text-center as d-inline-block">
          <input type="text" class="form-control text-white" name="kata" placeholder="Cari Disini...">
        </div>
      </form>
    </div>
    <hr class="garis">
    <div class="row">
      <div class="col-sm-3 pb-3 pt-3">
        <div class="card p-3">
          <img src="/img/logo2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nama Penyakit</h5>
            <p class="card-text">Blablablablablablablablablablablablablablablablablablablablablabla</p>
            <a href="#" class="btn btn-primary">Lihat Lebih Lengkap</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 pb-3 pt-3">
        <div class="card p-3">
          <img src="/img/logo2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 pb-3 pt-3">
        <div class="card p-3">
          <img src="/img/logo2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 pb-3 pt-3">
        <div class="card p-3">
          <img src="/img/logo2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 pb-3 pt-3">
        <div class="card p-3">
          <img src="/img/logo2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 pb-3 pt-3">
        <div class="card p-3">
          <img src="/img/logo2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 pb-3 pt-3">
        <div class="card p-3">
          <img src="/img/logo2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 pb-3 pt-3">
        <div class="card p-3">
          <img src="/img/logo2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <a href="{{}}" class="btn btn-success">Tambah Data</a>
    </div>



    {{-- <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama Penyakit</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="align-middle">1</th>
            <td><img src="/img/logo2.png" alt="" class="gbr"></td>
            <td class="align-middle">Mark</td>
            <td class="align-middle"><button type="button" class="btn btn-light btn-bntk">Detail</button>
            </td>
          </tr>
          <tr>
            <th scope="row" class="align-middle">2</th>
            <td><img src="/img/logo2.png" alt="" class="gbr"></td>
            <td class="align-middle">Jacob</td>
            <td class="align-middle"><button type="button" class="btn btn-light btn-bntk">Detail</button>
            </td>
          </tr>
        </tbody>
      </table> --}}
  </div>
</div>
</div>

@endsection