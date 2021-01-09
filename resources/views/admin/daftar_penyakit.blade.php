@extends('template.master')
<link href="css/app2.css" rel="stylesheet">

@section('title', 'Daftar Penyakit')

@section('content')

<div class="jumbotron-daftar_penyakit">
  <main class="main pt-4">
    <div class="container">
      <div class="container">
        <h1>DAFTAR PENYAKIT</h1>
      </div>
      <div class="container">
        <p>Berisikan Info Tentang Daftar Penyakit yang Biasanya Dialami Oleh Ayam Petelur</p>
      </div>
      <hr class="garis-bts" style="background-color: black">
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
                      value="{{ $daftar->nama_penyakit }}" required>
                  </div>
                  <div class="form-group">
                    <label for="penyebab_penyakit">Penyebab Penyakit</label>
                    <input type="text" class="form-control m-auto" id="penyebab_penyakit" name="penyebab_penyakit"
                      value="{{ $daftar->penyebab_penyakit }}" required>
                  </div>
                  <div class="form-group">
                    <label for="gejala_penyakit">Gejala Penyakit</label>
                    <textarea name="gejala_penyakit" id="gejala_penyakit" cols="30" rows="6" class="form-control m-auto"
                      required>{{ $daftar->gejala_penyakit }}</textarea>
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

        <div class="col-md-4">
          <article class="card mb-4">
            <header class="card-header bg-black-50">
              <h4 class="card-title"><b>{{ $daftar->nama_penyakit }}</b></h4>
            </header>
            <a href="#" id="pop" data-toggle="modal" data-target="#exampleModal">
              <img id="preview" class="card-img" src="img/articles/18.jpg" alt="" />
            </a>
            <div class="card-body text-left">
              <p class="card-text"><b>GEJALA :</b></p>
              @if (strlen($daftar->gejala_penyakit) > 100)
              <p class="card-text">{{ substr($daftar->gejala_penyakit, 0, 100).'...' }}</p>
              @else
              <p class="card-text">{{ $daftar->gejala_penyakit }}</p>
              @endif
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1{{ $daftar->id }}">Lihat
                Lebih
                Lengkap</button>
              @if (Auth::check() && Auth::user()->role_id == 1)
              <button class="btn btn-success" data-toggle="modal"
                data-target="#exampleModal2{{ $daftar->id }}">Edit</button>
              @endif
            </div>
          </article><!-- /.card -->
        </div>

        @endforeach
      </div>

      {{-- Modal Gambar --}}
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <img src="img/articles/18.jpg" id="preview" style="width: 450px">
            </div>
          </div>
        </div>
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
                  <input type="text" class="form-control m-auto" id="nama_penyakit" name="nama_penyakit" required>
                </div>
                <div class="form-group">
                  <label for="penyebab_penyakit">Penyebab Penyakit</label>
                  <input type="text" class="form-control m-auto" id="penyebab_penyakit" name="penyebab_penyakit"
                    required>
                </div>
                <div class="form-group">
                  <label for="gejala_penyakit">Gejala Penyakit</label>
                  <textarea name="gejala_penyakit" id="gejala_penyakit" cols="30" rows="6" class="form-control m-auto"
                    required></textarea>
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

      @if (Auth::check() && Auth::user()->role_id == 1)
      <div class="co modal-xl modal-dialog-centeredntainer">
        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal3"
          style="font-family: 'Viga', sans-serif">Tambah Data</a>
      </div>
      @endif

    </div>

  </main>

  <div class="site-instagram mt-5">
    <div class="row no-gutters">
      <div class="col-sm-6">
        <div class="row no-gutters">
          <div class="col-3">
            <div class="photo" href="#">
              <img class="img-fluid" src="img/instagram/1.jpg" alt="" style="height: 180px" />
            </div>
          </div>
          <div class="col-3">
            <div class="photo" href="home-threecolumn.html#">
              <img class="img-fluid" src="img/instagram/2.jpg" alt="" style="height: 180px" />
            </div>
          </div>
          <div class="col-3">
            <div class="photo" href="home-threecolumn.html#">
              <img class="img-fluid" src="img/instagram/3.jpg" alt="" style="height: 180px" />
            </div>
          </div>
          <div class="col-3">
            <div class="photo" href="home-threecolumn.html#">
              <img class="img-fluid" src="img/instagram/4.jpg" alt="" style="height: 180px" />
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row no-gutters">
          <div class="col-3">
            <div class="photo" href="home-threecolumn.html#">
              <img class="img-fluid" src="img/instagram/5.jpg" alt="" style="height: 180px" />
            </div>
          </div>
          <div class="col-3">
            <div class="photo" href="home-threecolumn.html#">
              <img class="img-fluid" src="img/instagram/6.jpg" alt="" style="height: 180px" />
            </div>
          </div>
          <div class="col-3">
            <div class="photo" href="home-threecolumn.html#">
              <img class="img-fluid" src="img/instagram/7.jpg" alt="" style="height: 180px" />
            </div>
          </div>
          <div class="col-3">
            <div class="photo" href="home-threecolumn.html#">
              <img class="img-fluid" src="img/instagram/8.jpg" alt="" style="height: 180px" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection