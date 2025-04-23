<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=" ">
  <meta name="keywords" content=" ">
  <meta name="author" content="metaveos technologies">
  <title>Super Admin Pannel</title>
  <!-- Favicon icon-->
  <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  <!-- Font awesome icon css -->
  <link rel="stylesheet" href="../assets/css/vendors/%40fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/vendors/%40fortawesome/fontawesome-free/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/vendors/%40fortawesome/fontawesome-free/css/brands.css">
  <link rel="stylesheet" href="../assets/css/vendors/%40fortawesome/fontawesome-free/css/solid.css">
  <link rel="stylesheet" href="../assets/css/vendors/%40fortawesome/fontawesome-free/css/regular.css">
  <!-- Ico Icon css -->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/%40icon/icofont/icofont.css">
  <!-- Flag Icon css -->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
  <!-- Themify Icon css -->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify-icons/themify-icons/css/themify.css">
  <!-- Animation css -->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css/animate.css">
  <!-- Whether Icon css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/weather-icons/css/weather-icons.min.css">
  <!-- Apex Chart css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/apexcharts/dist/apexcharts.css">
  <!-- Data Table css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/simple-datatables/dist/style.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
  <!-- App css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
</head>

<body>
  <!-- tap to top-->
  <div class="tap-top">
    <svg class="feather">
      <use href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#arrow-up"></use>
    </svg>
  </div>
  <!-- loader-->
  <div class="loader-wrapper">
    <div class="loader"></div>
  </div>
  <main class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page header start -->
    <header class="page-header row">
      <div class="logo-wrapper d-flex align-items-center col-auto"><a href="index.html"><img class="for-light" src="../assets/images/logo/logo.png" alt="logo"><img class="for-dark" src="../assets/images/logo/dark-logo.png" alt="logo"></a><a class="close-btn" href="javascript:void(0)">
          <div class="toggle-sidebar">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </a></div>
      <div class="page-main-header col">
        <div class="header-left d-lg-block d-none">
          
        </div>
        <div class="nav-right">
          <ul class="header-right">
            <li class="modes d-flex"><a class="dark-mode">
            <i class="fas fa-moon"></i></a></li>
           
            <!-- Notification menu-->
           
            <!-- Bookmark menu-->
            

            <li class="profile-dropdown custom-dropdown">
              <div class="d-flex align-items-center"><img src="../assets/images/profile.png" alt="">
                <div class="flex-grow-1">
                  <h5> {{ Auth::user()->name }}</h5><span> {{ Auth::user()->role }}</span>
                </div>
              </div>
              <div class="custom-menu overflow-hidden">
                <ul>
                  <li class="d-flex">
                    <svg class="svg-color">
                      <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Profile"></use>
                    </svg><a class="ms-2" href="user-profile.html">Account</a>
                  </li>


                  <li class="d-flex">
                    <svg class="svg-color">
                      <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Login"></use>
                    </svg>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                      @csrf
                      <button type="submit" class="ms-2 btn btn-link p-0" style="color: inherit; text-decoration: none;">Log Out</button>
                    </form>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <!-- Page header end-->
    <div class="page-body-wrapper">
      <!-- Page sidebar start-->
      <div class="overlay"></div>
      <aside class="page-sidebar" data-sidebar-layout="stroke-svg">
        <div class="left-arrow" id="left-arrow">
          <svg class="feather">
            <use href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#arrow-left"></use>
          </svg>
        </div>
        <div id="sidebar-menu">
          <ul class="sidebar-menu" id="simple-bar">
            <li class="pin-title sidebar-list p-0">
              <h5 class="sidebar-main-title">Pinned</h5>
            </li>
            <li class="line pin-line"></li>
            <li class="sidebar-main-title">General</li>
            <li class="sidebar-list">
              <svg class="pinned-icon">
                <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Pin"></use>
              </svg><a class="sidebar-link" href="/super-admin/dashboard">
                <svg class="stroke-icon">
                  <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Home"></use>
                </svg><span>Dashboard</span>
                <div class="badge badge-primary rounded-pill">3</div>
                <svg class="feather">
                  <use href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#chevron-right"></use>
                </svg>
              </a>
          
            </li>
            
            <li class="sidebar-list">
              <svg class="pinned-icon">
                <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Pin"></use>
              </svg><a class="sidebar-link" href="/super-admin/give-permission">
                <svg class="stroke-icon">
                  <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Ticket"></use>
                </svg><span>Give Permissions</span></a>
            </li>
          </ul>
        </div>
        <div class="right-arrow" id="right-arrow">
          <svg class="feather">
            <use href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right"></use>
          </svg>
        </div>
      </aside>
      <!-- Page sidebar end-->
      <div>

        @yield('content')

      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 footer-copyright">
              <p class="mb-0">Copyright 2024 © Edmin Template by pixelstrap.</p>
            </div>
            <div class="col-md-6">
              <p class="float-end mb-0">Hand crafted &amp; made with
                <svg class="svg-color footer-icon">
                  <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#footer-heart"></use>
                </svg>
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!-- jquery-->
  <script src="../assets/js/vendors/jquery/dist/jquery.min.js"></script>
  <!-- bootstrap js-->
  <script src="../assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/config.js"></script>
  <!-- Sidebar js-->
  <script src="../assets/js/sidebar.js"></script>
  <!-- Apexchart js-->
  <script src="../assets/js/vendors/apexcharts/dist/apexcharts.min.js"></script>
  <!-- Chart js-->
  <script src="../assets/js/vendors/chart.js/dist/chart.umd.js"></script>
  <!-- Datatable js-->
  <script src="../assets/js/vendors/simple-datatables/dist/umd/simple-datatables.js"></script>
  <!-- default dashboard js-->
  <script src="../assets/js/dashboard/default.js"></script>
  <!-- scrollbar js-->
  <script src="../assets/js/scrollbar/simplebar.js"></script>
  <script src="../assets/js/scrollbar/custom.js"></script>
  <!-- scrollable-->
  <!-- customizer-->
  <script src="../assets/js/theme-customizer/customizer.js"></script>
  <!-- custom script -->
  <script src="../assets/js/script.js"></script>
</body>

</html>