@extends('layout.main')
@section('container')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3><small>Daftar karyawan yang telah ditambahkan</small></h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            @if (Session::get('success'))
              <div class="alert alert-success">
                {{ Session::get('success') }}
              </div>
            @endif
            @if (Session::get('fail'))
              <div class="alert alert-danger">
                {{ Session::get('fail') }}
              </div>
            @endif
            <div class="x_title">
              <h2>Karyawan <small>Users</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Settings 1</a>
                  </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered"
                      style="width:100%">
                      <thead>
                        <tr>
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Unit</th>
                          <th>Hak Akses</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($karyawans as $karyawan)
                          <tr>
                            <td>{{ $karyawan->nik }}</td>
                            <td>{{ $karyawan->nama }}</td>
                            <td>{{ $karyawan->username }}</td>
                            <td>{{ $karyawan->email }}</td>
                            <td>{{ $karyawan->unit }}</td>
                            <td>{{ $karyawan->role->hak_akses }}</td>
                            <td>
                              <div class="row d-flex justify-content-center">
                                <a href="" class="btn btn-sm btn-warning" data-toggle="modal"
                                  data-target="#modal-edit{{ $karyawan->id }}"> Ubah</a>
                                <a href="" class="btn btn-sm btn-danger"> Hapus</a>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <button class="btn btn-sm btn-danger" data-toggle="modal"
                      data-target="#modal-add">Tambah</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('modal.edit_karyawan')

  @include('modal.create_karyawan')
@endsection
