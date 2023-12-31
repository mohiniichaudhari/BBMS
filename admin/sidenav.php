
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <style>
    .nav-sidebar .nav-item > .nav-link {
      margin-bottom: .8rem;
    }
    .invalid-feedback{
      font-weight: 550;
    }
  </style>
</head>

	 

  <!-- Main Sidebar Container sidebar-dark-primary-->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BBMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
<!--       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
     <!--  <div class="form-inline">
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
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="manageDonors.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Donors
                <!-- <span class="right badge badge-danger"></span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="bloodGroupDetail.php" class="nav-link">
              <i class="nav-icon fas fa-droplet"></i>
              <p>
                Blood Group Details
               <!--  <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span> -->
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="manageBloodRequest.php" class="nav-link">
              <i class="nav-icon fas fa-paper-plane"></i>
              <p>
                Manage Blood Request
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="donorRequest.php" class="nav-link">
              <i class="nav-icon fas fa-bell"></i>
              <p>
                Manage Donor Request
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="manageBloodBag.php" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Manage Blood Bags
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="bloodBagDetail.php" class="nav-link">
              <i class="nav-icon fa-sharp fa-solid fa-check-double"></i>
              <p>
                Blood Bag Detail
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="manageBloodCamp.php" class="nav-link">
              <i class="nav-icon fas fa-house-flag"></i>
              <p>
                Manage Blood Camps
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="manageQuery.php" class="nav-link">
              <i class="nav-icon fas fa-display"></i>
              <p>
                Manage Query
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
