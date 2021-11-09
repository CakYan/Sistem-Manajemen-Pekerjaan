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
            <form action="/update_proyek/{{ $proyeks->nama_proyek ?? '' }}" method="POST"
              id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <input type="hidden" name="nama_proyek" value="{{ $proyeks->nama_proyek ?? '' }}">

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">Nama
                  Proyek<span class="required">:</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" name="nama_proyek" value="{{ $proyeks->nama_proyek ?? '' }}"
                    id="first-name" required="required" class="form-control ">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Ketua
                  Tim<span class="required">:</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" name="ketua_tim" value="{{ $proyeks->ketua_tim ?? '' }}"
                    id="first-name" required="required" class="form-control ">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">Anggota
                  tim<span class="required">:</span>
                </label>
                <div class="col-md-6 col-sm-61 ">
                  <input type="text" name="anggota" value="{{ $proyeks->anggota ?? '' }}"
                    id="first-name" required="required" class="form-control ">
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align"
                  for="leader">Deskripsi<span class="required">:</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  {{-- <label for="desr"><span class="required">:</span></label> --}}
                  {{-- <input type="text" id="project-name" name="leader" required="required" class="form-control"> --}}
                  <textarea id="descr" required="required" value="{{ $proyek->deskripsi ?? '' }}"
                    class="form-control" name="descr data-parsley-trigger=" keyup"
                    data-parsley-minlength="20" data-parsley-maxlength="100"
                    data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                    data-parsley-validation-threshold="10"></textarea>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Mulai <span
                    class="required">:</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="date" class="date-picker form-control" name="tgl_mulai" placeholder=""
                    value="{{ $proyeks->tgl_mulai ?? '' }}" type="text" required="required"
                    type="text" onfocus="this.type='date'" onmouseover="this.type='date'"
                    onclick="this.type='date'" onblur="this.type='text'"
                    onmouseout="timeFunctionLong(this)">
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
                      value="{{ $proyeks->tgl_akhir ?? '' }}" type="text" required="required"
                      type="text" onfocus="this.type='date'" onmouseover="this.type='date'"
                      onclick="this.type='date'" onblur="this.type='text'"
                      onmouseout="timeFunctionLong(this)">
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
                      <a href="/projects" class="btn btn-primary" type="reset">Kembali</a>
                      <input type="submit" class="btn btn-success" value="Update">
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
