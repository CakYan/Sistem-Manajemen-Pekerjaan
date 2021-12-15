<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      @if (session('hak_akses') == 1)
        <a href="/home" class="site_title"> <img src="{{ asset('images/rs.png') }}" width="40"
            height="40">
          <span>SIMKER</span></a>
      @endif
      @if (session('hak_akses') == 2)
        <a href="/homeDireksi" class="site_title"> <img src="{{ asset('images/rs.png') }}"
            width="40" height="40">
          <span>SIMKER</span></a>
      @endif
      @if (session('hak_akses') == 3)
        <a href="/homeKetuaProyek" class="site_title"> <img src="{{ asset('images/rs.png') }}"
            width="40" height="40">
          <span>SIMKER</span></a>
      @endif
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{ asset('storage/' . session('foto')) }}" alt="..."
          class="img-circle profile_img" width="60" height="60">
      </div>
      <div class="profile_info">
        <span>Selamat Datang,</span>
        <h2>{{ session('nama') }}</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>Umum</h3>
        <ul class="nav side-menu">
          <li><a><i class="fa fa-edit"></i> Direksi <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="/daftar_karyawan">Karyawan</a></li>
              <li><a href="/inbox">Chat</a></li>
              <li><a href="/form">Tambah Proyek</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-desktop"></i> Kepala Proyek <span
                class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="/calendar">Calendar</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-table"></i> Anggota Proyek <span
                class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="/projects">Proyek</a></li>
            </ul>
          </li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    @include('partial.menu_footer_bt')
    <!-- /menu footer buttons -->
  </div>
</div>
