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
          @if (Session::get('update'))
            <div class="alert alert-success">
              {{ Session::get('update') }}
            </div>
          @endif
          @if (Session::get('gagal_update'))
            <div class="alert alert-danger">
              {{ Session::get('gagal_update') }}
            </div>
          @endif
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
                <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($proyeks as $proyek)
                  <tr>
                    <td></td>
                    <td>
                      <a
                        href="/projects/projects_detail/{{ $proyek->id }}">{{ $proyek->nama_proyek }}</a>
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
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="0">
                        </div>
                      </div>
                      <small>0% Complete</small>
                    </td>
                    <td>
                      @if ($proyek->status_id == '1')
                        <button type="button"
                          class="btn btn-secondary btn-xs">{{ $proyek->status->nama_status }}</button>
                      @endif
                      @if ($proyek->status_id == '2')
                        <button type="button"
                          class="btn btn-info btn-xs">{{ $proyek->status->nama_status }}</button>
                      @endif
                      @if ($proyek->status_id == '3')
                        <button type="button"
                          class="btn btn-danger btn-xs">{{ $proyek->status->nama_status }}</button>
                      @endif
                      @if ($proyek->status_id == '4')
                        <button type="button"
                          class="btn btn-warning btn-xs">{{ $proyek->status->nama_status }}</button>
                      @endif
                      @if ($proyek->status_id == '5')
                        <button type="button"
                          class="btn btn-success btn-xs">{{ $proyek->status->nama_status }}</button>
                      @endif
                    </td>
                    <td>
                      <a href="/projects/projects_detail/{{ $proyek->id }}"
                        class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View
                      </a>
                      <br>
                      {{-- <a href="/edit_proyek/{{ $proyek->id }}" class="btn btn-info btn-xs" style="width: 95%"><i class="fa fa-pencil"></i> Edit </a> --}}
                      <a href="" class="btn btn-info btn-xs" style="width: 95%" data-toggle="modal"
                        data-target="#modal-card{{ $proyek->id }}"><i class="fa fa-pencil"></i>
                        Edit </a>
                      <br>
                      <a href="/delete_proyek/{{ $proyek->id }}" class="btn btn-danger btn-xs"
                        onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"></i>
                        Delete </a>
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
  <!-- /page content -->
  @include('modal.projects.edit_proyek')
@endsection
