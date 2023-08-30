<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span id="notifications-number" class="badge badge-danger navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span id="notifications-number-sp" class="dropdown-item dropdown-header"></span>
          <div id="notifications-dropdown" style="display:none" class="dropdown-divider"></div>
          <a id="notification-fan" style="display:none" href="astropi.php" class="dropdown-item">
            <i class="fas fa-temperature-high mr-2"></i> AstroPi Temperature: Check Fan
          </a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    <li class="nav-item">
        <div class="theme-switch-wrapper nav-link">
          <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <span class="slider round"></span>
          </label>
        </div>
      </li>
    </ul>




  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/saturn.png" alt="AstroPi" width="30px" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AstroPi</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a id="menu1" href="index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a id="menu2" href="astropi.php" class="nav-link">
              <i class="nav-icon fab fa-raspberry-pi"></i>
              <p>
                AstroPi Hat
              </p>
              <span id="badge-hot" class=""></span>
            </a>
          </li>
          <li class="nav-item">
            <a id="menu3" href="power.php" class="nav-link">
              <i class="nav-icon fas fa-bolt"></i>
              <p>
                Power Monitoring
              </p>
            </a>
          </li>
          <li id="drop1" class="nav-item">
            <a id="menu4" href="#" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Photography
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a id="menu4.1" href="#" class="nav-link">
                  <i class="fas fa-camera nav-icon"></i>
                  <p>DSLR Control</p>
                </a>
              </li>
              <li class="nav-item">
                <a id="menu4.2" href="#" class="nav-link">
                  <i class="fas fa-photo-video nav-icon"></i>
                  <span class="badge badge-info right">0</span>
                  <p>Gallery</p>
                </a>
              </li>
            </ul>
          </li>

          <li id="drop2" class="nav-item">
            <a id="menu5" href="#" class="nav-link">
              <i class="nav-icon fas fa-fire"></i>
              <p>
                Dew Controllers
                <i class="fas fa-angle-left right"></i>
                <span id="dew-number" class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a id="menu51" href="dew.php?dew=1" class="nav-link">
                  <i class="fas fa-thermometer-half nav-icon"></i>
                  <span id="dew1" class="badge badge-danger right">0</span>
                  <p>Controller n°1</p>
                </a>
              </li>
              <li class="nav-item">
                <a id="menu52" href="dew.php?dew=2" class="nav-link">
                  <i class="fas fa-thermometer-half nav-icon"></i>
                  <span id="dew2" class="badge badge-danger right">0</span>
                  <p>Controller n°2</p>
                </a>
              </li>
              <li class="nav-item">
                <a id="menu53" href="dew.php?dew=3" class="nav-link">
                  <i class="fas fa-thermometer-half nav-icon"></i>
                  <span id="dew3" class="badge badge-danger right">0</span>
                  <p>Controller n°3</p>
                </a>
              </li>
              <li class="nav-item">
                <a id="menu54" href="dew.php?dew=4" class="nav-link">
                  <i class="fas fa-thermometer-half nav-icon"></i>
                  <span id="dew4" class="badge badge-danger right">0</span>
                  <p>Controller n°4</p>
                </a>
              </li>
            </ul>
          </li>

          <li id="drop3" class="nav-item">
            <a id="menu6" href="#" class="nav-link">
              <i class="nav-icon fas fa-puzzle-piece"></i>
              <p>
                AstroPi Modules
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">0</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a id="menu6.1" href="#" class="nav-link">
                  <i class="fas fa-compass nav-icon"></i>
                  <span class="badge badge-danger right">0</span>
                  <p>GPS</p>
                </a>
              </li>
              <li class="nav-item">
                <a id="menu6.2" href="#" class="nav-link">
                  <i class="fas fa-cloud-moon-rain nav-icon"></i>
                  <span class="badge badge-danger right">0</span>
                  <p>Weather &amp; Sky</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-toggle-on"></i>
              <p>
                Modes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a onclick="mode('dark');" href="#" class="nav-link">
                  <i class="fas fa-lightbulb nav-icon"></i>
                  <span onclick="mode('dark');" id="dark" class="badge right"></span>
                  <p>Dark Mode</p>
                </a>
              </li>
              <li class="nav-item">
                <a onclick="mode('silent');" href="#" class="nav-link">
                  <i class="fas fa-fan nav-icon"></i>
                  <span onclick="mode('silent');" id="silent" class="badge right"></span>
                  <p>Silent Mode</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <script>
    function mode(name){
      $.get("includes/request.php?data="+name);
      if (document.getElementById(name).innerHTML == "OFF") {
        document.getElementById(name).innerHTML = "ON"
        document.getElementById(name).className = "badge badge-success right";
      }
      else {
          document.getElementById(name).innerHTML = "OFF"
          document.getElementById(name).className = "badge badge-danger right";
      }
    }
  </script>
