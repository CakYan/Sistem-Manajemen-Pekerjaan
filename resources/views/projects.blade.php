@extends('layout.main');

@section('container')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>List Projek</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
            <p>List proyek dan tim</p>
            <!-- start project list -->
            <table class="table table-striped projects">
              <thead>
                <th>
                  {{-- <th style="width: 1%">No</th> --}}
                <th style="width: 20%">Nama Proyek</th>
                <th>Ketua TIM</th>
                <th>Anggota</th>
                <th>Deskripsi</th>
                <th>Tgl_Mulai</th>
                <th>Tgl_Selesai</th>
                <th>Progres</th>
                <th>Status</th>
                <th style="width: 20%">Edit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach ($proyeks as $proyek)
                    <td></td>
                    <td>
                      <a href="/project_detail">{{ $proyek->nama_proyek }}</a>
                      <br />
                      <br>
                      <br>
                      <small>Dibuat pada {{ $proyek->created_at }}</small>
                    </td>
                    <td>
                      <a>{{ $proyek->ketua_tim }}</a>
                    </td>
                    <td>
                      <ul class="list-inline">
                        <li>
                          <img src="images/user.png" class="avatar" alt="Avatar">
                          <small></small>
                        </li>
                        <li>
                          <img src="images/user.png" class="avatar" alt="Avatar">
                        </li>
                        <li>
                          <img src="images/user.png" class="avatar" alt="Avatar">
                        </li>
                        <li>
                          <img src="images/user.png" class="avatar" alt="Avatar">
                        </li>
                      </ul>
                    </td>
                    <td>
                      <a>{{ $proyek->deskripsi }}</a>
                    </td>
                    <td>
                      <a>{{ $proyek->tgl_mulai }}</a>
                    </td>
                    <td>
                      <a>{{ $proyek->tgl_akhir }}</a>
                    </td>
                    <td class="project_progress">
                      <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar"
                          data-transitiongoal="57"></div>
                      </div>
                      <small>57% Complete</small>
                    </td>
                    <td>
                      <button type="button" class="btn btn-success btn-xs">Success</button>
                    </td>
                    <td>
                      <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View
                      </a>
                      <a href="/edit_proyek/{{ $proyek->nama_proyek }}"
                        class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                      <a href="/delete_proyek/{{ $proyek->nama_proyek }}"
                        class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- end project list -->
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- /page content -->
@endsection
