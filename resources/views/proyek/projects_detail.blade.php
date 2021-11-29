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
                        @foreach ($tasks as $tugas)
                          @if ($tugas->kelas_id == '1')
                            <tr>
                              <!-- <td><input type="checkbox" name="pilih"></td> -->
                              <td><input type="checkbox" name="pilih">
                                <a href="" data-toggle="modal"
                                  data-target="#modal-card{{ $tugas->id }}"><strong>{{ $tugas->nama_task }}</strong></a>
                                <a href="/delete_task/{{ $tugas->id }}"
                                  class="btn btn-danger btn-sm" style="float: right"
                                  onclick="return confirm('Are you sure?')">delete</a>
                              </td>
                            </tr>
                          @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card-composer">
                <form action="/add_tugas" method="POST">
                  @csrf
                  <div class="list-card">
                    <div class="list-card-details">
                      <div class="list-card-labels">
                        <textarea class="list-card-composer" placeholder="Tuliskan task.."
                          style=" resize: none;" name="nama_task"></textarea><span
                          style="color:red">@error('nama_task'){{ $message }}@enderror</span>
                          <div class="list-card-members"></div>
                        </div>
                      </div>
                    </div>
                    <div class="cc-controls">
                      <div class="add bg-light mt-2">
                        <button class="btn btn-light mr-5" href="#"><i class="fa fa-plus-square-o"></i>
                          Tambah
                          Task</button>
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

          {{-- PROGRES --}}
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
                          @foreach ($tasks as $progres)
                            @if ($progres->kelas_id == '2')
                              <tr>
                                <td><input type="checkbox" name="pilih">
                                  <a href="" data-toggle="modal"
                                    data-target="#modal-card{{ $progres->id }}"><strong>
                                      {{ $progres->nama_task }}
                                    </strong></a>
                                  <a href="/delete_task/{{ $progres->id }}"
                                    class="btn btn-danger btn-sm" style="float: right"
                                    onclick="return confirm('Are you sure?')">delete</a>
                                </td>
                              </tr>
                            @endif
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card-composer">
                  <div class="cc-controls">
                    <form action="/add_progres" method="POST">
                      @csrf
                      <div class="list-card">
                        <div class="list-card-details">
                          <div class="list-card-labels">
                            <textarea class="list-card-composer" placeholder="Tuliskan task.."
                              style=" resize: none;" name="nama_task"></textarea><span
                              style="color:red">@error('nama_task'){{ $message }}@enderror</span>
                              <div class="list-card-members"></div>
                            </div>
                          </div>
                        </div>
                        <div class="cc-controls">
                          <div class="add bg-light mt-2">
                            <button class="btn btn-light mr-5" href="#"><i
                                class="fa fa-plus-square-o"></i>
                              Tambah
                              Task</button>
                            <button class="btn btn-light ml-3" href="#"><i
                                class="fa fa-trash"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- END of PROGRES --}}

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
                            @foreach ($tasks as $selesai)
                              @if ($selesai->kelas_id == '3')
                                <tr>
                                  <td><input type="checkbox" name="pilih">
                                    <a href="" data-toggle="modal"
                                      data-target="#modal-card{{ $selesai->id }}"><strong>
                                        {{ $selesai->nama_task }}
                                      </strong></a>
                                    <a href="/delete_task/{{ $selesai->id }}"
                                      class="btn btn-danger btn-sm" style="float: right"
                                      onclick="return confirm('Are you sure?')">delete</a>
                                  </td>
                                </tr>
                              @endif
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="card-composer">
                    <div class="list-card">
                      <div class="list-card-details">
                        <div class="list-card-labels">
                          <div class="list-card-members"></div>
                        </div>
                      </div>
                    </div>
                    <div class="cc-controls">
                      <form action="/add_selesai" method="POST">
                        @csrf
                        <div class="list-card">
                          <div class="list-card-details">
                            <div class="list-card-labels">
                              <textarea class="list-card-composer" placeholder="Tuliskan task.."
                                style=" resize: none;" name="nama_task"></textarea><span
                                style="color:red">@error('nama_task'){{ $message }}@enderror</span>
                                <div class="list-card-members"></div>
                              </div>
                            </div>
                          </div>
                          <div class="cc-controls">
                            <div class="add bg-light mt-2">
                              <button class="btn btn-light mr-5" href="#"><i
                                  class="fa fa-plus-square-o"></i>
                                Tambah
                                Task</button>
                              <button class="btn btn-light ml-3" href="#"><i
                                  class="fa fa-trash"></i></button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- END of SELESAI --}}
            </div>
          </div>
        </div>
        @include('modal.projects_detail.card');

      @endsection
