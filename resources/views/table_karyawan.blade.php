@extends('layout.main')
@section('container')
    

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h2><i class="fa fa-tachometer"></i> Form Service</h2>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Tabel Karyawan</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <a href="/tambahkaryawan"><button class="btn btn-primary btn-xs mb-3" ><i class=" fa fa-plus-square"></i> Tambahkan</button></a>
          @if ($massage=Session::get('success'))
          <div class="alert alert-success mt-1" role="alert">
              {{ $massage }}
          </div>
              
          @endif
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
                        <table class="table table-hover" id="datatables" style=" border-color:white">
                        <thead class="bg-primary" style="color: white">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Unit</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No. Telp</th>
                                <th scope="col">Email</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        @foreach ($karyawan as $k)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $k->id }}</th>
                                <td>{{ $k->nik }}</td>
                                <td>{{ $k->nama }}</td>
                                <td>{{ $k->unit }}</td>
                                <td>{{ $k->jabatan }}</td>
                                <td>{{ $k->unit}}</td>
                                <td>{{ $k->no_tlp }}</td>
                                <td>{{ $k->email }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <a href="/tampilkaryawan/{{ $k->id }}" class="badge bg-primary btn-xs"><i class=" fa fa-edit"></i></a>
                                            <a href="/hapuskaryawan/{{ $k->id }}" class="badge bg-danger btn-xs"><i class=" fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                </table>	
            </div>
        </div>
    </div>
  </div>
      </div>
    </div>

    <!-- Button trigger modal -->


<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal{{ $karyawan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Silakan Edit Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">
              <div class="form-group  ">
                <label class="control-label col-sm-2 " for="nik">NIK</label>
                <div class="col-sm-10 mb-1">
                    <input type="number" name="nik" value="{{ $karyawan->nik }}" readonly="readonly"  class="form-control" id="nik">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Nama</label>
                <div class="col-sm-10 mb-1">
                    <input type="text" name="nama"  value="{{ $k->nama }}" class="form-control" id="nama">
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="unit">Unit</label>
              <div class="col-sm-10 mb-1">
                  <input type="text" name="unit" value="{{ $k->unit }}"  class="form-control" id="unit">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="jabatan">Jabatan</label>
              <div class="col-sm-10 mb-1">
                  <input type="text" name="jabatan" value="{{ $k->jabatan }}" class="form-control" id="jabatan">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="alamat">Alamat</label>
              <div class="col-sm-10 mb-1">
                  <input type="text" name="alamat"  class="form-control" value="{{ $k->alamat }}" id="alamat">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email</label>
              <div class="col-sm-10 mb-1">
                  <input type="number" name="email"  class="form-control" id="email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="no_telp">No Telepon</label>
              <div class="col-sm-10 mb-1">
                  <input type="number" name="no_tlp"  class="form-control" id="no_telp">
              </div>
            </div>
            
            <div class="btn" style="float: right;">	
              <a href="/data_karyawan"><button type="submit" class="btn btn-primary btn-xs" >Simpan</button></a>
              <a href="/data_karyawan" class="btn btn-danger btn-xs">Kembali</></a>
            </div>
        </form>
      </div>
    </div>
  </div>
</div> --}}
@endsection