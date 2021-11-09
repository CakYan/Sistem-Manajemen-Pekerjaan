@extends('layout.main')

@section('container')
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Profile Pengguna </h3>
        </div>
        <div class="title_right">
          <div class="col-md-5 col-sm-5  form-group pull-right top_search">

          </div>
        </div>
      </div>

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Pengguna <small>Activity report</small></h2>
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
              <div class="col-md-3 col-sm-3  profile_left">
                <div class="profile_img">
                  <div id="crop-avatar">
                    <!-- Current avatar -->
                    <img class="img-responsive avatar-view" src="images/foto.jpg" width="130cm"
                      height="130cm" alt="Avatar" title="Change the avatar">
                  </div>
                </div>
                <h3>Firmansyah</h3>
                <ul class="list-unstyled user_data">
                  <li><i class="fa fa-map-marker user-profile-icon"></i> Serang, Banten Indonesia
                  </li>
                  <li>
                    <i class="fa fa-briefcase user-profile-icon"></i> Admin Sub Domain
                  </li>
                  <li class="m-top-xs">
                    <i class="fa fa-external-link user-profile-icon"></i>
                    <a href="https://www.unisayogya.ac.id/id/"
                      target="_blank">www.unisayogya.ac.id</a>
                  </li>
                </ul>
                <a href="/edit_profile" class="btn btn-success"><i
                    class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                <br />
              </div>
              <div class="col-md-9 col-sm-9 ">
                <div class="profile_title">
                  <div class="col-md-6">
                    <h2>Aktifitas</h2>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right"
                      style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_content1"
                        id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Aktifitas</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content2" role="tab"
                        id="profile-tab" data-toggle="tab" aria-expanded="false"> Progres Proyek</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content3" role="tab"
                        id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                    </li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane active " id="tab_content1"
                      aria-labelledby="home-tab">
                      <!-- start recent activity -->
                      <ul class="messages">
                        <li>
                          <img src="images/foto.jpg" class="avatar" alt="Avatar">
                          <div class="message_date">
                            <h3 class="date text-info">24</h3>
                            <p class="month">May</p>
                          </div>
                          <div class="message_wrapper">
                            <h4 class="heading">Danur</h4>
                            <blockquote class="message">Raw denim you probably haven't heard of
                              them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro
                              keffiyeh dreamcatcher synth.</blockquote>
                            <br />
                            <p class="url">
                              <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                              <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc
                              </a>
                            </p>
                          </div>
                        </li>
                        <li>
                          <img src="images/foto.jpg" class="avatar" alt="Avatar">
                          <div class="message_date">
                            <h3 class="date text-error">21</h3>
                            <p class="month">May</p>
                          </div>
                          <div class="message_wrapper">
                            <h4 class="heading">Febryan Akhdani</h4>
                            <blockquote class="message">Raw denim you probably haven't heard of
                              them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro
                              keffiyeh dreamcatcher synth.</blockquote>
                            <br />
                            <p class="url">
                              <span class="fs1" aria-hidden="true" data-icon=""></span>
                              <a href="#" data-original-title="">Download</a>
                            </p>
                          </div>
                        </li>
                        <li>
                          <img src="images/foto.jpg" class="avatar" alt="Avatar">
                          <div class="message_date">
                            <h3 class="date text-info">24</h3>
                            <p class="month">May</p>
                          </div>
                          <div class="message_wrapper">
                            <h4 class="heading">D Efita</h4>
                            <blockquote class="message">Raw denim you probably haven't heard of
                              them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro
                              keffiyeh dreamcatcher synth.</blockquote>
                            <br />
                            <p class="url">
                              <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                              <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc
                              </a>
                            </p>
                          </div>
                        </li>
                        <li>
                          <img src="images/foto.jpg" class="avatar" alt="Avatar">
                          <div class="message_date">
                            <h3 class="date text-error">21</h3>
                            <p class="month">May</p>
                          </div>
                          <div class="message_wrapper">
                            <h4 class="heading">Febryan Akhdani</h4>
                            <blockquote class="message">Raw denim you probably haven't heard of
                              them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro
                              keffiyeh dreamcatcher synth.</blockquote>
                            <br />
                            <p class="url">
                              <span class="fs1" aria-hidden="true" data-icon=""></span>
                              <a href="#" data-original-title="">Download</a>
                            </p>
                          </div>
                        </li>
                      </ul>
                      <!-- end recent activity -->
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab_content2"
                      aria-labelledby="profile-tab">
                      <!-- start user projects -->
                      <table class="data table table-striped no-margin">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Proyek saya</th>
                            <th>Client</th>
                            <th class="hidden-phone">Status</th>
                            <th>Progres</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Sistem Manajemen Pekerjaan(ganti pake data)</td>
                            <td>RS Muhammadiyah Lamongan</td>
                            <td class="hidden-phone">Pending</td>
                            <td class="vertical-align-mid">
                              <div class="progress">
                                <div class="progress-bar progress-bar-success"
                                  data-transitiongoal="35"></div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- end user projects -->
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="tab_content3"
                      aria-labelledby="profile-tab">
                      <p>Mahasiswa Program Studi Teknologi Informasi, bergabung dengan Student
                        Commuinity Humas Universitas 'Aisyiyah Yogyakarta
                        sejak november 2020, sebagai Admin Sub Domain Website UNISA Yogyakarta.
                      </p>
                    </div>
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
