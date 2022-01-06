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
              <h2>List Proyek</h2>
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
                          <th>Nama Ketua</th>
                          <th>Progres</th>
                          <th>Unit Pengaju</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($proyeks as $proyek)
                          <tr>
                            <td><a
                                href="/projects/projects_detail/{{ $proyek->id }}">{{ $proyek->nama_proyek }}</a>
                            </td>
                            <td>{{ $proyek->ketua_tim }}</td>
                            <td>{{ $hasil }}%</td>
                            <td>{{ $proyek->unit_pengaju }}</td>
                            <td>{{ $proyek->status->nama_status }}</td>
                          </tr>
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
  </div>

@endsection
