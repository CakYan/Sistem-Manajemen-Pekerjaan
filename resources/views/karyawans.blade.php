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
                <div class="col-sm-6">
                  <div class="dataTables_length" id="datatable_length">
                    <label>Show
                      <select name="datatable_length" aria-controls="datatable"
                        class="form-control input-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select> entries</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div id="datatable_filter" class="dataTables_filter">
                    <label>Cari:
                      <form action="/cari_karyawan" method="GET">
                        <input type="text" name="cari" placeholder="Cari Pegawai .."
                          value="{{ old('cari') }}">
                        <input type="submit" value="CARI">
                      </form>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
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
                          <td>{{ $karyawan->id }}</td>
                          <td>{{ $karyawan->nama }}</td>
                          <td>{{ $karyawan->username }}</td>
                          <td>{{ $karyawan->email }}</td>
                          <td>{{ $karyawan->unit }}</td>
                          <td>{{ $karyawan->jabatan }}</td>
                          <td>
                            <div class="row d-flex justify-content-center">
                              <a href="" class="btn btn-sm btn-warning"> Ubah</a>
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
    Halaman : {{ $karyawans->currentPage() }}<br />
    Jumlah Data : {{ $karyawans->total() }} <br />
    Data Per Halaman : {{ $karyawans->perPage() }} <br />
    <br>
    {{ $karyawans->links() }}

    <a href="#" class="btn btn-primary btn-md ml-3">Tambah Karyawan</a>
  </div>
  </div>
@endsection
