@extends('layout.main')

@section('container')
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_right">
          <input type="hidden" name="id" value="{{ $proyeks->id }}">
          <h3>{{ $proyeks->nama_proyek }}</h3>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row ml-2">

        {{-- TUGAS --}}
        <div class="col-md-4">
          <div class="x_panel tile fixed_320">
            <div class="x_title">
              <h2>Tugas</h2>
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
                    <table id="datatable" class="table table-striped" style="width:100%">
                      <tbody>
                        @foreach ($tugas as $item)
                          <tr>
                            <!-- <td><input type="checkbox" name="pilih"></td> -->
                            <td><input type="checkbox" name="pilih">
                              <a href="" data-toggle="modal"
                                data-target="#modal-card">{{ $item->card }}</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card-composer">
                <form action="{{ route('add_card') }}" method="POST">
                  @csrf
                  <div class="list-card">
                    <div class="list-card-details">
                      <div class="list-card-labels">
                        <textarea class="list-card-composer" placeholder="Tuliskan tugas.."
                          style=" resize: none;" name="card"></textarea>
                        <div class="list-card-members"></div>
                      </div>
                    </div>
                  </div>
                  <div class="cc-controls">
                    <div class="add bg-light mt-2">
                      <button class="btn btn-light mr-5" href="#"><i class="fa fa-plus-square-o"></i>
                        Tambah
                        Tugas</button>
                      <button class="btn btn-light ml-3" href="#"><i
                          class="fa fa-trash"></i></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        {{-- END of TUGAS --}}

        {{-- PROSES --}}
        <div class="col-md-4">
          <div class="x_panel tile fixed_320">
            <div class="x_title">
              <h2>Progres</h2>
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
                    <table id="datatable" class="table table-striped" style="width:100%">
                      <tbody>
                        <tr>
                          <!-- <td><input type="checkbox" name="pilih"></td> -->
                          <td><input type="checkbox" name="pilih"><a href="" data-toggle="modal"
                              data-target="#modal-card"> Klinik</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card-composer">
                <div class="list-card">
                  <div class="list-card-details">
                    <div class="list-card-labels">
                      <textarea class="list-card-composer" placeholder="Tuliskan tugas.."
                        style=" resize: none;"></textarea>
                      <div class="list-card-members"></div>
                    </div>
                  </div>
                </div>
                <div class="cc-controls">
                  <div class="add bg-light mt-2">
                    <a class="btn btn-light mr-5" href="#"><i class="fa fa-plus-square-o"></i> Tambah
                      Tugas</a>
                    <a class="btn btn-light ml-3" href="#"><i class="fa fa-trash"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- END of PROSES --}}

        {{-- SELESAI --}}
        <div class="col-md-4">
          <div class="x_panel tile fixed_320">
            <div class="x_title">
              <h2>Selesai</h2>
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
                    <table id="datatable" class="table table-striped" style="width:100%">
                      <tbody>
                        <tr>
                          <!-- <td><input type="checkbox" name="pilih"></td> -->
                          <td><input type="checkbox" name="pilih"><a href="" data-toggle="modal"
                              data-target="#modal-card"> Klinik</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card-composer">
                <div class="list-card">
                  <div class="list-card-details">
                    <div class="list-card-labels">
                      <textarea class="list-card-composer" placeholder="Tuliskan tugas.."
                        style=" resize: none;"></textarea>
                      <div class="list-card-members"></div>
                    </div>
                  </div>
                </div>
                <div class="cc-controls">
                  <div class="add bg-light mt-2">
                    <a class="btn btn-light mr-5" href="#"><i class="fa fa-plus-square-o"></i> Tambah
                      Tugas</a>
                    <a class="btn btn-light ml-3" href="#"><i class="fa fa-trash"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- END of SELESAI --}}
      </div>
    </div>
  </div>
  @include('modal.projects.card');

@endsection
