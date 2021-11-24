@extends('layout.main')

@section('container')
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3><small>Daftar karyawan yang telah ditambahkan</small></h3>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Menambahan Karyawan</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a class="dropdown-item" href="#">Settings 1</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
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
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
              action="add" method="POST">
              @csrf

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">NIK <span
                    class="required">:</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" required="required" name='nik'
                    class="form-control ">
                  <span style="color:red">@error('nik'){{ $message }}@enderror</span>
                  </div>
                </div>

                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Nama<span
                      class="required">:</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="first-name" required="required" name='nama'
                      class="form-control ">
                    <span style="color:red">@error('nama'){{ $message }}@enderror</span>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Username<span
                        class="required">:</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="first-name" required="required" name='username'
                        class="form-control ">
                      <span style="color:red">@error('username'){{ $message }}@enderror</span>
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Email<span
                          class="required">:</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" required="required" name='email'
                          class="form-control ">
                        <span style="color:red">@error('email'){{ $message }}@enderror</span>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                          for="nama-proyek">Unit<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-61 ">
                          <input type="text" id="first-name" required="required" name='unit'
                            class="form-control ">
                          <span style="color:red">@error('unit'){{ $message }}@enderror</span>
                          </div>
                        </div>

                        <div class="item form-group2">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Jabatan<span
                              class="required">:</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="first-name" required="required" name='jabatan'
                              class="form-control ">
                            <span style="color:red">@error('jabatan'){{ $message }}@enderror</span>
                            </div>
                          </div>

                          <div class="ln_solid"></div>
                          <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                              {{-- <button class="btn btn-primary"><a href="/karyawans"></a>Kembali</button> --}}
                              <button class="btn btn-danger" type="reset">Reset</button>
                              <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endsection
