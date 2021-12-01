@extends('layout.main')
@section('container')
  <div class="right_col">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">User Profile</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pengguna</h6>
      </div>
      <div class="row">
        <div class="col mt-2 ml-2">
          <div class="card card-small mb-4 pt-3 border-0">
            <div class="card-header border-bottom text-center">
              <div class="mb-3 mx-auto">
                <img class="rounded-circle" src="img/foto.jpg" alt="Firmansyah" width="110">
              </div>
              <h4 class="mb-0">Firmansyah</h4>
              <span class="text-muted d-block mb-2">Project Manager</span>
              <a class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2" data-toggle="modal"
                data-target="#modal-edit">
                <i class="material-icons mr-1">Edit Profile</i></a>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item p-4">
                <strong class="text-muted d-block mb-2">Biografi</strong>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem,
                  commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum
                  assumenda eligendi cumque?</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card card-small mb-4 mt-2 mr-2 border-0">
            <div class="card-header border-bottom mb-3 mt-3">
              <h6 class="m-0">Aktivitas</h6>
            </div>
            <table class="table table-bordered table-striped table-hover mt-5" id="datatables"
              width="100%" cellspacing="0">
              <thead class="bg-primary" style="color: white">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Proyek Saya</th>
                  <th scope="col">Client</th>
                  <th scope="col">Status</th>
                  <th scope="col">Opsi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"> 1</th>
                  <td>simker</td>
                  <td>sirs</td>
                  <td>progres</td>
                  <td>
                    <a href="" class="btn btn-primary btn-sm" data-toggle="modal"
                      data-target="#Status"><i class=" fa fa-edit"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
  {{-- @include('modal.karyawan.edit_karyawan') --}}
@endsection
