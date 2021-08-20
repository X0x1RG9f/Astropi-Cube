<!DOCTYPE html>
<html lang="en">
  
<head>
  <?php include 'includes/head.php';?>
</head>


<body class="hold-transition sidebar-mini layout-fixed">
  

  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/saturn.png" alt="AstroPi" height="60" width="60">
    </div>

    <?php include 'includes/menu.php';?>
  
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Home</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">Home</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->

  </div>
  
  <div class="content px-5">
    <h2 id="quick-start">Welcome!</h2>
    <p>AstroPi is a Raspberry Pi Hat extension for controlling some Astrophotography equipment. Just connect your devices and experience the universe...</p>

    <h2 id="quick-start">Functionalities</h2>

  </div>
</div>


  <?php include 'includes/scripts.php'; ?>
  
  <script>
    $('#menu1').addClass("active");
  </script>

</body>
</html>
