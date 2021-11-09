@extends('layout.main')

@section('container')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><small>Edit Profile</small></h3>
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
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">Username <span class="required">:</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="first-name" required="required" class="form-control ">
                            </div>
                          </div>

                          <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Email<span class="required">:</span>
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
@endsection