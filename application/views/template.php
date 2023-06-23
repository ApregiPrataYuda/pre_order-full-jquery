<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>W</title>


   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/summernote/summernote-bs4.min.css"> -->
  <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>

  <link href="<?= base_url() ?>assets/backend/vendors/sweetalert2/sweetalert2.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/backend/vendors/sweetalert2/animate.min.css" rel="stylesheet">

 <!-- Select2 -->
 <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
</head>

<body class="hold-transition sidebar-mini <?= $this->uri->segment(2) == 'Master_additional_fa' ? 'sidebar-collapse' : null ?>">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav style="background-color:RGB(40, 178, 170);" class="main-header navbar navbar-expand navbar-light navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="" style="color: RGB(245, 245, 245);" class="nav-link" data-toggle="modal" data-target="#exampleModal"><?= $this->session->userdata('UserName')?> | <?= $this->session->userdata('Division')?> Division | <?= $this->session->userdata('Grup')?> Group</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside style="background-color:RGB(40, 178, 170);" class="main-sidebar sidebar-light elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <img src="<?= base_url() ?>assets/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image">
        <span style="color: RGB(245, 245, 245); font-style: bold;" class="brand-text font-weight-dark">PT. Rinnai Indonesia</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url() ?>assets/backend/dist/img/default.png" class="img-circle elevation-2" alt="User Image" data-toggle="modal" data-target="#exampleModal">
          </div>
          <div class="info">
            <a style="color: RGB(245, 245, 245);"  data-toggle="modal" data-target="#exampleModal" class="d-block"><i class="fa fa-user">| <?= $this->session->userdata('UserName')?> | <?= $this->session->userdata('access')?></i></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li style="font-style: bold; font-size: bold; color: RGB(245, 245, 245);" class="nav-header">Main</li>
            <li class="nav-item Active">
              <a style="color: RGB(245, 245, 245);" href="<?= site_url('Supplier') ?>" class="nav-link">
                <i class="nav-icon  fas fa-user"></i>
                <p style="color: RGB(245, 245, 245);">
                S
                </p>
              </a>
            </li>


           
          </ul>
          </li>
          </ul>
          </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <script src="<?= base_url() ?>assets/backend/plugins/jquery/jquery.min.js"></script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php echo $contents ?>
      <!-- Main content -->

      <!-- /.content -->
    </div>
  
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 0.0.0
      </div>
      <strong>Copyright &copy; 2023 <a class="text-danger" href="https://www.rinnai.co.id/"></a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>assets/backend/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>assets/backend/dist/js/demo.js"></script>

  <script src="<?= base_url() ?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <!-- <script src="<?= base_url() ?>assets/backend/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/pdfmake/vfs_fonts.js"></script> -->
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <script src="<?= base_url() ?>assets/backend/vendors/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
  <script src="<?= base_url() ?>assets/backend/dist/js/jquery.mask.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
<!-- Select2 -->
   <script src="<?= base_url() ?>assets/backend/plugins/select2/js/select2.full.min.js"></script>
  <!-- Page specific script -->
  <script src="<?= base_url() ?>assets/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        // "buttons": ["copy", "csv"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#sp_table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>


  <script>
    var flash = $('#flash').data('flash');
    if (flash) {
      Swal.fire({
        icon: 'success',
        title: 'success',
        text: flash
      })
    }


    var flasherr = $('#flasherr').data('flasherr');
    if (flasherr) {
      Swal.fire({
        icon: 'info',
        title: 'Error',
        text: flasherr
      })
    }


    $(document).on('click', '#btn-hapus', function(e) {
      e.preventDefault();
      // link for href
      var link = $(this).attr('href');
      Swal.fire({
        title: 'Are you sure?',
        text: "Data Will Be Deleted!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete!',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = link;
        }
      })
    })


    $(document).on('click', '#btn-keluar', function(e) {
      e.preventDefault();
      // link for href
      var link = $(this).attr('href');
      Swal.fire({
        title: 'Are you sure?',
        text: "Will Logout!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Logout!',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = link;
        }
      })
    })


    /** add active class and stay opened when selected */
var url = window.location;

// for sidebar menu entirely but not cover treeview
$('ul.nav-sidebar a').filter(function() {
    return this.href == url;
}).addClass('active');

// for treeview
$('ul.nav-treeview a').filter(function() {
    return this.href == url;
}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');

</script>
</body>

</html>



