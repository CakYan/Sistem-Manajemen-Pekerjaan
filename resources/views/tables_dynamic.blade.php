@extends('layout.main')

@section('container')
    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><small>Daftar karyawan yang telah ditambahkan</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Karyawan <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                          <th>NIK</th>
                          <th>Nama</th>
                          <th>Unit</th>
                          <th>Jabatan</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>1.2.3.4</td>
                          <td>Firmansyah</td>
                          <td>SIRS</td>
                          <td>Magang</td>
                        </tr>
                        <tr>
                          <td>22222</td>
                          <td>Ferbyan Akhdani</td>
                          <td>SIRS</td>
                          <td>Magang</td>
                        </tr>
                        <tr>
                          <td>333333</td>
                          <td>D Efita</td>
                          <td>SIRS</td>
                          <td>Magang</td>
                        </tr>
                      </tbody>

                    </table>
                  </div>
                  </div>
              </div>
                </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Menambahan Karyawan <small>different form elements</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
      
                          <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">NIK <span class="required">:</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="first-name" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Nama<span class="required">:</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="first-name" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">Unit<span class="required">:</span>
                            </label>
                            <div class="col-md-6 col-sm-61 ">
                              <input type="text" id="first-name" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="item form-group2">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Jabatan<span class="required">:</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="first-name" required="required" class="form-control ">
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