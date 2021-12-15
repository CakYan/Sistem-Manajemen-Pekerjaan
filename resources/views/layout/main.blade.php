<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('Images/rs.png') }}" type="image/png" />

  <title>Sistem Manajemen Pekerjaan </title>

  <!-- Bootstrap -->
  <link href="{{ asset('../vendors/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css"
    rel="stylesheet">
  <link
    href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
  <!-- Font Awesome -->
  <link href="{{ asset('../vendors/font-awesome/css/font-awesome.min.css') }}" type="text/css"
    rel="stylesheet">
  <!-- NProgress -->
  <link href="{{ asset('../vendors/nprogress/nprogress.css') }}" type="text/css" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{ asset('../vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link
    href="{{ asset('../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}"
    type="text/css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{ asset('../vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="{{ asset('../vendors/bootstrap-daterangepicker/daterangepicker.css') }}"
    type="text/css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{ asset('../build/css/custom.min.css') }}" type="text/css" rel="stylesheet">

  <!-- dataTables -->
  <link rel="stylesheet" type="text/css"
    href="{{ asset('//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css') }}">

  <!-- Multi-select box -->
  <link type="text/css"
    href="{{ asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css') }}"
    rel="stylesheet" />

  <!-- Select-picker -->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      @include('partial.nav_bar')

      <!-- top navigation -->
      @include('partial.top_nav')
      <!-- /top navigation -->

      <!-- page content -->
      <div class="container">
        @yield('container')
      </div>
      <!-- /page content -->

      <!-- footer content -->
      @include('partial.footer')
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('../vendors/jquery/dist/jquery.min.js') }}">
  </script>
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <!-- Multi-select box -->
  <script type="text/javascript"
    src="{{ asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js') }}">
  </script>
  <script>
    $(function() {
      $('select2-data').select2();
    });
  </script>
  <!-- Bootstrap -->
  <script type="text/javascript"
    src="{{ asset('../vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- FastClick -->
  <script type="text/javascript" src="{{ asset('../vendors/fastclick/lib/fastclick.js') }}">
  </script>
  <!-- NProgress -->
  <script type="text/javascript" src="{{ asset('../vendors/nprogress/nprogress.js') }}"></script>
  <!-- Chart.js -->
  <script type="text/javascript" src="{{ asset('../vendors/Chart.js/dist/Chart.min.js') }}">
  </script>
  <!-- gauge.js -->
  <script type="text/javascript" src="{{ asset('../vendors/gauge.js/dist/gauge.min.js') }}">
  </script>
  <!-- bootstrap-progressbar -->
  <script type="text/javascript"
    src="{{ asset('../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
  <!-- iCheck -->
  <script type="text/javascript" src="{{ asset('../vendors/iCheck/icheck.min.js') }}"></script>
  <!-- Skycons -->
  <script type="text/javascript" src="{{ asset('../vendors/skycons/skycons.js') }}"></script>
  <!-- Flot -->
  <script type="text/javascript" src="{{ asset('../vendors/Flot/jquery.flot.js') }}"></script>
  <script type="text/javascript" src="{{ asset('../vendors/Flot/jquery.flot.pie.js') }}"></script>
  <script type="text/javascript" src="{{ asset('../vendors/Flot/jquery.flot.time.js') }}"></script>
  <script type="text/javascript" src="{{ asset('../vendors/Flot/jquery.flot.stack.js') }}">
  </script>
  <script type="text/javascript" src="{{ asset('../vendors/Flot/jquery.flot.resize.js') }}">
  </script>
  <!-- Flot plugins -->
  <script type="text/javascript"
    src="{{ asset('../vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
  <script type="text/javascript"
    src="{{ asset('../vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('../vendors/flot.curvedlines/curvedLines.js') }}">
  </script>
  <!-- DateJS -->
  <script type="text/javascript" src="{{ asset('../vendors/DateJS/build/date.js') }}"></script>
  <!-- JQVMap -->
  <script type="text/javascript" src="{{ asset('../vendors/jqvmap/dist/jquery.vmap.js') }}">
  </script>
  <script type="text/javascript"
    src="{{ asset('../vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script type="text/javascript"
    src="{{ asset('../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
  <!-- bootstrap-daterangepicker -->
  <script type="text/javascript" src="{{ asset('../vendors/moment/min/moment.min.js') }}"></script>
  <script type="text/javascript"
    src="{{ asset('../vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

  <!-- Custom Theme Scripts -->
  <script type="text/javascript" src="{{ asset('../build/js/custom.min.js') }}"></script>
  <script
    src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- dataTables -->
  <script type="text/javascript"
    src="{{ asset('//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js') }}">
    $(document).ready(function() {
      $('#datatable').DataTable();
    });
  </script>

  <script type="text/javascript"
    src="{{ asset('//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js') }}">
    $(document).ready(function() {
      $('#datatableKP').DataTable({
        "order": [
          [2, "desc"]
        ]
      });
    });
  </script>

  <!-- Select-picker -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js">
  </script>

  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js">
  </script> --}}

  <script>
    $('select').selectpicker();
  </script>

</body>

</html>
