
<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EMS-Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
        
      </div>
      
    </nav>
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="images/faces/face4.jpg" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">Admin</p>
                <p class="designation">Ahmed Adib</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>

          <li class="nav-item"><a class="nav-link" href="{{route('admincreate')}}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">HOSPITAL Create </span></a></li>
         <li class="nav-item"><a class="nav-link" href="{{route('edithospital')}}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">HOSPITAL Edit</span></a></li> 
          <li class="nav-item"><a class="nav-link" href="{{route('admincreatedoctor')}}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">DOCTOR Create</span></a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('editdoctor')}}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">DOCTOR Edit </span></a></li>
          
          <li class="nav-item"><a class="nav-link" href="{{route('admincreateambulance')}}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">AMBULANCE Create</span></a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('editambulance')}}"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">AMBULANCE Edit</span></a></li>
          
          
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="{{route('adib')}}" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Home Page</span><i class="menu-arrow"></i></a>
          </li>
                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
        
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         <form action="{{ route('logout') }}" method="post">
       @csrf
       <button type="submit">Logout</button>
</form>
         
          
          
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> <a href="http://www.bootstrapdash.com/" target="_blank"></a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  
  <!-- End custom js for this page-->
</body>




<!-- pop over -->

</html>