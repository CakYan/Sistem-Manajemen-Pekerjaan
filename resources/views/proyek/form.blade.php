@extends('layout.main')

@section('container')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Menambahkan Proyek </h2>
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
              @if (Session::get('berhasil'))
                <div class="alert alert-success">
                  {{ Session::get('berhasil') }}
                </div>
              @endif
              @if (Session::get('fail'))
                <div class="alert alert-danger">
                  {{ Session::get('fail') }}
                </div>
              @endif
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
                action="add_proyek" method="POST">
                @csrf
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">Nama
                    Proyek <span class="required"></span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="first-name" name="nama_proyek" required="required"
                      class="form-control ">
                    <span style="color:red">@error('nama_proyek'){{ $message }}@enderror</span>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">Unit
                      yang Mengajukan <span class="required"></span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="first-name" name="unit_pengaju" required="required"
                        class="form-control ">
                      <span style="color:red">@error('unit_pengaju'){{ $message }}@enderror</span>
                      </div>
                    </div>

                    @if (session('hak_akses') == 3)
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Ketua
                          Proyek<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" class="form-control" value="{{ session('nama') }}"
                            readonly>
                          <span style="color:red">@error('ketua_tim'){{ $message }}@enderror</span>
                          </div>
                        </div>
                      @else
                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Ketua
                            Proyek<span class="required">:</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <select class="form-control" data-live-search="true" name="ketua_tim">
                              <option value="">-- Pilih --</option>
                              @foreach ($karyawans as $karyawan)
                                <option value="{{ $karyawan->nama }}">
                                  {{ $karyawan->nama }},
                                  <i>{{ $karyawan->unit }}</i>
                                </option>
                              @endforeach
                            </select>
                            <span style="color:red">@error('ketua_tim'){{ $message }}@enderror</span>
                            </div>
                          </div>
                        @endif

                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="leader">Anggota
                            Proyek<span class="required">:</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <select class="form-control" data-live-search="true" multiple name="anggota[]">
                              @foreach ($karyawans as $karyawan)
                                <option value="{{ $karyawan->nama }}">{{ $karyawan->nama }},
                                  <i>{{ $karyawan->unit }}</i>
                                </option>
                              @endforeach
                            </select>
                            <span style="color:red">@error('anggota'){{ $message }}@enderror</span>
                            </div>
                          </div>

                          <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="leader">Deskripsi
                              Proyek<span class="required">:</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <textarea id="descr" required="required" class="form-control"
                                name="deskripsi"></textarea>
                            </div>
                          </div>


                          <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Mulai <span
                                class="required">:</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="date" class="date-picker form-control" name="tgl_mulai" placeholder=""
                                type="text" required="required" type="text" onfocus="this.type='date'"
                                onmouseover="this.type='date'" onclick="this.type='date'"
                                onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                              <span style="color:red">@error('tgl_mulai'){{ $message }}@enderror</span>
                                <script>
                                  function timeFunctionLong(input) {
                                    setTimeout(function() {
                                      input.type = 'text';
                                    }, 60000);
                                  }
                                </script>
                              </div>
                            </div>

                            <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Selesai <span
                                  class="required">:</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input id="date" class="date-picker form-control" name="tgl_akhir" placeholder=""
                                  type="text" required="required" type="text" onfocus="this.type='date'"
                                  onmouseover="this.type='date'" onclick="this.type='date'"
                                  onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <span style="color:red">@error('tgl_akhir'){{ $message }}@enderror</span>
                                  <script>
                                    function timeFunctionLong(input) {
                                      setTimeout(function() {
                                        input.type = 'text';
                                      }, 60000);
                                    }
                                  </script>
                                </div>
                              </div>

                              <div class="ln_solid"></div>
                              <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                  <button class="btn btn-primary" type="reset">Reset</button>
                                  <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /page content -->
              @endsection
