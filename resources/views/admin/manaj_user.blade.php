@extends('template.master')

@section('title', 'Manajemen User')

@section('content')

<div class="jumbotrondash">
  <div class="container konten">
    <h4>DAFTAR PENGGUNA</h4>
    <hr>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Lengkap</th>
          <th>Username</th>
          <th>Email</th>
          <th>Role</th>
          <th>Status Akun</th>
          <th>Surat Ijin Usaha</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($user as $pengguna)

        {{-- Modal --}}
        <div class="modal fade" id="exampleModal{{$pengguna->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div style="z-index: 9999" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Status Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{ route('user.simpan_status', $pengguna->id) }}" method="POST">
                  @csrf
                  <select class="custom-select" name="status_akun" required>
                    <option value="">--</option>
                    <option value="Terverifikasi">Terverifikasi</option>
                    <option value="Belum Terverifikasi">Belum Terverifikasi</option>
                  </select>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        {{-- Tabel --}}
        <tr>
          <td style="text-align: center; vertical-align: middle;">{{ ++$no }}</td>
          <td style="text-align: center; vertical-align: middle;">{{ $pengguna->nama }}</td>
          <td style="text-align: center; vertical-align: middle;">{{ $pengguna->username }}</td>
          <td style="text-align: center; vertical-align: middle;">{{ $pengguna->email }}</td>
          <td style="text-align: center; vertical-align: middle;">{{ $pengguna->role_id }}</td>
          <td style="text-align: center; vertical-align: middle;">{{ $pengguna->status_akun }}</td>
          <td style="text-align: center; vertical-align: middle;"><img src="{{ asset($pengguna->surat_ijin_usaha) }}"
              alt="" style="width: 100px"></td>
          <td style="text-align: center; vertical-align: middle;">
            <button class="btn btn-sm btn-ubah text-white" data-toggle="modal"
              data-target="#exampleModal{{$pengguna->id}}">Ubah
              Status</button>
            <form action="{{ route('user.destroy', $pengguna->id) }}" method="post" class="d-inline">
              @csrf
              <a href="{{ route('user.detail', $pengguna->id) }}" class="btn btn-info btn-sm text-white">Detail</a>
              <button onclick="return confirm('Apakah Anda Ingin Menghapus Pengguna Ini?')"
                class="btn btn-danger btn-sm">Delete
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class=" container row justify-content-between">
      <div class="jumlah_pengguna d-inline-flex">
        <strong>Jumlah Pengguna : {{ $jumlah_user }}</strong>
      </div>
      <div class="d-inline-flex">{{ $user->links() }}</div>
    </div>

    <hr>
    <a class="vtn btn-success btn-sm" href="{{ route('user.create') }}">Tambah Pengguna</a>
  </div>


</div>

@endsection