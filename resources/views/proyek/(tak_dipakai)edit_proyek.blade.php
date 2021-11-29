@extends('layout.main')

@section('container')
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3><small>Edit Proyek</small></h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">

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
            {{-- FORM --}}
            <form action="{{ route('update_proyek') }}" method="POST" id="demo-form2">
              @csrf
              <input type="hidden" name="id" value="{{ $proyeks->id }}">
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">Nama
                  Proyek<span class="required">:</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" name="nama_proyek" value="{{ $proyeks->nama_proyek }}"
                    id="first-name" required="required" class="form-control "><span
                    style="color:red">@error('anggota'){{ $message }}@enderror</span>
                  </div>
                </div>

                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="ketua_tim">Ketua
                    Tim<span class="required">:</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" name="ketua_tim" value="{{ $proyeks->ketua_tim }}"
                      id="ketua_tim" required="required" class="form-control "><span
                      style="color:red">@error('anggota'){{ $message }}@enderror</span>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">Anggota
                      tim<span class="required">:</span>
                    </label>
                    <div class="col-md-6 col-sm-61 ">
                      <input type="text" name="anggota" value="{{ $proyeks->anggota }}" id="first-name"
                        required="required" class="form-control "><span
                        style="color:red">@error('anggota'){{ $message }}@enderror</span>
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">Unit
                        Pengaju<span class="required">:</span>
                      </label>
                      <div class="col-md-6 col-sm-61 ">
                        <input type="text" name="unit_pengaju" value="{{ $proyeks->unit_pengaju }}"
                          id="first-name" required="required" class="form-control "><span
                          style="color:red">@error('anggota'){{ $message }}@enderror</span>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                          for="leader">Deskripsi<span class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea id="descr" required="required" class="form-control"
                            name="deskripsi">{{ $proyeks->deskripsi }}</textarea><span
                            style="color:red">@error('anggota'){{ $message }}@enderror</span>
                          </div>
                        </div>

                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Mulai <span
                              class="required">:</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="date" class="date-picker form-control" name="tgl_mulai" placeholder=""
                              value="{{ $proyeks->tgl_mulai }}" type="text" required="required" type="text"
                              {{-- onfocus="this.type='date'" --}} onmouseover="this.type='date'" onclick="this.type='date'"
                              {{-- onblur="this.type='text'" --}} onmouseout="timeFunctionLong(this)">
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
                                value="{{ $proyeks->tgl_akhir }}" type="text" required="required" type="text"
                                {{-- onfocus="this.type='date'" --}} onmouseover="this.type='date'" onclick="this.type='date'"
                                {{-- onblur="this.type='text'" --}} onmouseout="timeFunctionLong(this)">
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
                                {{-- <a href="/projects" class="btn btn-primary" type="reset">Kembali</a> --}}
                                <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                            </div>
                          </form>
                          {{-- END of FORM --}}
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
                </div>
              @endsection
