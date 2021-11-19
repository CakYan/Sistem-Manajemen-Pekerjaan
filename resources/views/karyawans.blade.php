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
                          <th>Jabatan</th>
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
                            <td>{{ $karyawan->jabatan }}</td>
                            <td>
                              <div class="row d-flex justify-content-center">
                                <a class="btn btn-sm btn-warning" data-toggle="modal"
                                  data-target="#modal{{ $karyawan->id }}"> Ubah</a>
                                <a href="" class="btn btn-sm btn-danger"> Hapus</a>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  @foreach ($karyawans as $k)
    <div class="modal fade" id="modal{{ $k->id }}" tabindex="-1"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-dismiss="modal"
              aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <form action="">
              <div class="form-group  ">
                <label class="control-label col-sm-2 " for="nik">NIK</label>
                <div class="col-sm-10 mb-1">
                  <input type="number" name="nik" readonly="readonly" class="form-control" id="nik"
                    value="{{ $k->nik }}">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Nama</label>
                <div class="col-sm-10 mb-1">
                  <input type="text" name="nama" class="form-control" id="nama"
                    value="{{ $k->nama }}">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="unit">Unit</label>
                <div class="col-sm-10 mb-1">
                  <input type="text" name="unit" class="form-control" id="unit"
                    value="{{ $k->unit }}">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="jabatan">Jabatan</label>
                <div class="col-sm-10 mb-1">
                  <input type="text" name="jabatan" class="form-control" id="jabatan"
                    value="{{ $k->jabatan }}">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="alamat">Alamat</label>
                <div class="col-sm-10 mb-1">
                  <input type="text" name="alamat" class="form-control" id="alamat"
                    value="{{ $k->alamat }}">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email</label>
                <div class="col-sm-10 mb-1">
                  <input type="text" name="email" class="form-control" id="email"
                    value="{{ $k->email }}">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-2" for="no_telp">No Telepon</label>
                <div class="col-sm-10 mb-1">
                  <input type="text" name="no_telp" class="form-control" id="no_telp"
                    value="{{ $k->no_telp }}">
                </div>
              </div>
            </form>
          </div>

          <div class="modal-footer">
            <div class="btn" style="float: right;">
              <a href="/daftar_karyawan"><button type="submit"
                  class="btn btn-primary btn-xs">Simpan</button></a>
              <a class="btn btn-danger btn-xs" data-dismiss="modal">Kembali</></a>
            </div>
            {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> --}}
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endsection
