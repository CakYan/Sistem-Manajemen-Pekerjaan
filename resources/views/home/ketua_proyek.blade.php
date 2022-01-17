@extends('layout.main')
@section('container')
  <!-- page content -->
  <div class="right_col" role="main">

    <div class="clearfix"></div>

    @if (session('hak_akses') == 3)
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>List Proyek<small>as Ketua Proyek</small></h2>
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
                          <th>Nama Proyek</th>
                          <th>Progres</th>
                          <th>Dateline</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($proyeks as $proyek)
                          @if ($proyek->ketua_tim == session('nama'))
                            <tr>
                              <td><a
                                  href="/projects/projects_detail/{{ $proyek->id }}">{{ $proyek->nama_proyek }}</a>
                              </td>
                              @if ($proyek->finishedTask == 0)
                                <td>0%</td>
                              @else
                                <td>
                                  {{ round(($proyek->finishedTask * 100) / $proyek->totalTask, 2) }}%
                                </td>
                              @endif
                              <td>{{ $proyek->tgl_akhir }}</td>
                              <td>{{ $proyek->status->nama_status }}</td>
                            </tr>
                          @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>List Proyek<small>as Anggota Proyek</small></h2>
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
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>Nama Proyek</th>
                        <th>Progres</th>
                        <th>Dateline</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($proyeks as $proyek)
                        @if ($proyek->anggota == session('nama'))
                          <tr>
                            <td><a
                                href="/projects/projects_detail/{{ $proyek->id }}">{{ $proyek->nama_proyek }}</a>
                            </td>
                            @if ($proyek->finishedTask == 0)
                              <td>0%</td>
                            @else
                              <td>
                                {{ round(($proyek->finishedTask * 100) / $proyek->totalTask, 2) }}%
                              </td>
                            @endif
                            <td>{{ $proyek->tgl_akhir }}</td>
                            <td>{{ $proyek->status->nama_status }}</td>
                          </tr>
                        @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end page content -->
@endsection
