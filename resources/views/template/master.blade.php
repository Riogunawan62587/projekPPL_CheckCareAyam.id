<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>DASHBOARD</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>

  @include('template.navbar')

  <!-- ISI -->

  @yield('content')

  {{-- <div class="card">
            <div class="card-header">
              <h4>Judul Modul <a href="" class="btn btn-primary" style="float: right">
                  <i class="fa fa-plus"></i> Tambah Data</a></h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Artikel 1</td>
                  <td>Web Development</td>
                  <td>10 Mei 2020</td>
                  <td>
                    <a href="" class="btn btn-info">
                      <i class="fa fa-pencil-alt"></i> Edit
                    </a>
                    <a href="" class="btn btn-danger">
                      <i class="fa fa-times"></i> Hapus
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Artikel 2</td>
                  <td>Web Master</td>
                  <td>12 Mei 2020</td>
                  <td>
                    <a href="" class="btn btn-info">
                      <i class="fa fa-pencil-alt"></i> Edit
                    </a>
                    <a href="" class="btn btn-danger">
                      <i class="fa fa-times"></i> Hapus
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Artikel 3</td>
                  <td>Web Design</td>
                  <td>13 Mei 2020</td>
                  <td>
                    <a href="" class="btn btn-info">
                      <i class="fa fa-pencil-alt"></i> Edit
                    </a>
                    <a href="" class="btn btn-danger">
                      <i class="fa fa-times"></i> Hapus
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Artikel 4</td>
                  <td>Web Programming</td>
                  <td>14 Mei 2020</td>
                  <td>
                    <a href="" class="btn btn-info">
                      <i class="fa fa-pencil-alt"></i> Edit
                    </a>
                    <a href="" class="btn btn-danger">
                      <i class="fa fa-times"></i> Hapus
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Artikel 5</td>
                  <td>Web Developer</td>
                  <td>15 Mei 2020</td>
                  <td>
                    <a href="" class="btn btn-info">
                      <i class="fa fa-pencil-alt"></i> Edit
                    </a>
                    <a href="" class="btn btn-danger">
                      <i class="fa fa-times"></i> Hapus
                    </a>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  @include('template.footer')