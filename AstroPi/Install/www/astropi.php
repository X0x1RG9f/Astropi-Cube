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
              <h1 class="m-0">AstroPi Hat</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">AstroPi Hat</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">

            <div class="col-md-3 col-sm-6 col-12">
              <div id="cpu" class="info-box bg-success">
                <span class="info-box-icon"><i class="fas fa-microchip"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">CPU</span>
                  <span id="cpu-text" class="info-box-number">0 %</span>

                  <div class="progress">
                    <div id="cpu-value" class="progress-bar" style="width: 0%"></div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-12">
              <div id="ram" class="info-box bg-success">
                <span class="info-box-icon"><i class="fas fa-memory"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">RAM</span>
                  <span id="ram-text" class="info-box-number">0 %</span>

                  <div class="progress">
                    <div id="ram-value" class="progress-bar" style="width: 0%"></div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>



            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>


            <div class="col-md-3 col-sm-6 col-12">
              <div id="hdd" class="info-box bg-success">
                <span class="info-box-icon"><i class="fas fa-hdd"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">HDD Usage</span>
                  <span id="hdd-text" class="info-box-number">0 %</span>

                  <div class="progress">
                    <div id="hdd-value" class="progress-bar" style="width: 0%"></div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-12">
              <div id="tmp" class="info-box bg-success">
                <span class="info-box-icon"><i id="tmp-logo" class="fas fa-thermometer-half"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">CPU Temperature</span>
                  <span id="tmp-text" class="info-box-number">0°C / 0°F</span>

                  <div class="progress">
                    <div id="tmp-value" class="progress-bar" style="width: 0%"></div>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>



      </section>


      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable ui-sortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header ui-sortable-handle">
                  <h3 class="card-title">
                    <i class="fas fa-thermometer-half mr-1"></i>
                    AstroPi °C
                  </h3>
                  <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#chart-sec" data-toggle="tab">1m</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#chart-min" data-toggle="tab">1h</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#chart-hrs" data-toggle="tab">1d</a>
                      </li>
                    </ul>
                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="chart-sec" style="position: relative; height: 337px;">
                        <canvas id="chart-sec-canvas" height="337" style="height: 337px;"></canvas>
                     </div>
                    <div class="chart tab-pane" id="chart-min" style="position: relative; height: 337px;">
                      <canvas id="chart-min-canvas" height="337" style="height: 337px;"></canvas>
                    </div>
                    <div class="chart tab-pane" id="chart-hrs" style="position: relative; height: 337px;">
                      <canvas id="chart-hrs-canvas" height="337" style="height: 337px;"></canvas>
                    </div>
                  </div>
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </section>

          <div class="col-md-5 connectedSortable">
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">AstroPi Modules</h3>
                </div>
                <center>
                  <div class="card-body">
                    <p>If not used during more than 1 minute, Modules &amp; Probes may be paused. Use these buttons to restart the Modules &amp; Probes manually once plugged in!</p>
                    <a id="module1" onclick="this.className='btn btn-app bg-success'; $.get('includes/request.php?data=activate_dew');" class="btn btn-app">
                      <i class="fas fa-fire"></i> Dew Controllers
                    </a>
                    <a id="module2" onclick="this.className='btn btn-app bg-success'; $.get('includes/request.php?data=activate_gps');" class="btn btn-app">
                      <i class="fas fa-compass"></i> GPS
                    </a>
                    <a id="module3" onclick="this.className='btn btn-app bg-success'; $.get('includes/request.php?data=activate_weather');" class="btn btn-app">
                      <i class="fas fa-cloud-moon-rain"></i> Weather &amp; Sky
                    </a>
                  </div>
                </center>
              <!-- /.card-body -->
              </div>

            <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">AstroPi System / Database Commands</h3>
                </div>
                <center>
                  <div class="card-body">
                    <p>Warning: Each button will perform action on the system / database without any confirmation!</p>
                    <a onclick="$.get('includes/system.php?cmd=dbempty');" class="btn btn-app bg-warning">
                      <i class="fas fa-stop-circle"></i> Stop AstroPi
                    </a>
                    <a onclick="$.get('includes/system.php?cmd=restart');" class="btn btn-app bg-warning">
                      <i class="fas fa-power-off"></i> Restart
                    </a>
                    <a onclick="$.get('includes/system.php?cmd=shutdown');" class="btn btn-app bg-danger">
                      <i class="fas fa-power-off"></i> Shutdown
                    </a>
                    <a onclick="$.get('includes/system.php?cmd=db');" class="btn btn-app bg-warning">
                      <i class="fas fa-database"></i> Clear DB
                    </a>
                    <a onclick="$.get('includes/system.php?cmd=dbempty');" class="btn btn-app bg-danger">
                      <i class="fas fa-database"></i> Empty DB
                    </a>
                  </div>
                </center>
              <!-- /.card-body -->
              </div>


          </div>
            <!-- /.Left col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->


    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


  <?php include 'includes/scripts.php';?>


    <script>

    /* Chart.js Charts */
    // Charts
    var ChartSecCanvas = document.getElementById('chart-sec-canvas').getContext('2d')
    var ChartMinCanvas = document.getElementById('chart-min-canvas').getContext('2d')
    var ChartHrsCanvas = document.getElementById('chart-hrs-canvas').getContext('2d')

    var arr1 = Array();
    var arr2 = Array();
    for (var i = 0; i < 60; i++) {
      arr1[i] = ''
      arr2[i] = 0;
    }


    var ChartSecData = {
      labels: arr1,
      datasets: [
        {
          label: 'C',
          yAxisID: 'C',
          backgroundColor: '#17a2b8',
          borderColor: '#17a2b8',
          fill: false,
          borderWidth:2,
          pointRadius: false,
          data: arr2
        }
      ]
    }
    
    var ChartHrsData = {
      labels: arr1,
      datasets: [
        {
          label: 'C',
          yAxisID: 'C',
          backgroundColor: '#17a2b8',
          borderColor: '#17a2b8',
          fill: false,
          borderWidth:2,
          pointRadius: false,
          data: arr2
        }
      ]
    }

    var ChartMinData = {
      labels: arr1,
      datasets: [
        {
          label: 'C',
          yAxisID: 'C',
          backgroundColor: '#17a2b8',
          borderColor: '#17a2b8',
          fill: false,
          borderWidth:2,
          pointRadius: false,
          data: arr2
        }
      ]
    }
    
    var ChartOptions = {
      maintainAspectRatio: false,
      responsive: true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines: {
          display: false
          }/*,
          ticks: {
            autoSkip: false
          }*/
        }],
        yAxes: [{
          id: 'C',
          type: 'linear',
          position: 'left',
          ticks: {
            beginAtZero: true,
            stepValue: 5,
            max: 90,
            min: 0
          },
          scaleLabel: {
            display: true,
            labelString: 'Temperature (°C)'
          },
          afterTickToLabelConversion : function(q){
            for(var tick in q.ticks){
                q.ticks[tick] += '\u00B0C';
            }
          }
        }]
      }
    }

    var ChartSec = new Chart(ChartSecCanvas, {
      type: 'line',
      data: ChartSecData,
      options: ChartOptions
    })

    var ChartMin = new Chart(ChartMinCanvas, {
      type: 'line',
      data: ChartMinData,
      options: ChartOptions
    })

    var ChartHrs = new Chart(ChartHrsCanvas, {
      type: 'line',
      data: ChartHrsData,
      options: ChartOptions
    })
    
    ChartSec.update(0);
    ChartMin.update(0);
    ChartHrs.update(0);

    function update_page() {    
      $.get("includes/request.php?data=raspberry", function( data ) {
        var resp = JSON.parse(data);

        if (typeof resp == 'undefined') {
          return;
        }
        
        for (var i = 0; i < 3; i++)
          if (resp[1].modules[i]['module_status'] == "PAUSED")
            document.getElementById('module'+(i+1)).className = "btn btn-app";
          else
            document.getElementById('module'+(i+1)).className = "btn btn-app bg-success";

        document.getElementById('cpu-text').innerHTML = (parseFloat(resp[0].m[0]['cpu'])).toFixed(2).toString() + " %";
        document.getElementById('cpu-value').style = "width: " + (parseFloat(resp[0].m[0]['cpu'])).toFixed(2).toString() + "%";
        document.getElementById('ram-text').innerHTML = (parseFloat(resp[0].m[0]['ram'])).toFixed(2).toString() + " %";
        document.getElementById('ram-value').style = "width: " + (parseFloat(resp[0].m[0]['ram'])).toFixed(2).toString() + "%";
        document.getElementById('hdd-text').innerHTML = (parseFloat(resp[0].m[0]['hdd'])).toFixed(2).toString() + " %";
        document.getElementById('hdd-value').style = "width: " + (parseFloat(resp[0].m[0]['hdd'])).toFixed(2).toString() + "%";
        document.getElementById('tmp-text').innerHTML = (parseFloat(resp[0].m[0]['temperature'])).toFixed(2).toString() + "°C / " + (parseFloat(resp[0].m[0]['temperature'] * 1.8 + 32)).toFixed(2).toString() + "°F";
        document.getElementById('tmp-value').style = "width: " + (parseFloat(resp[0].m[0]['temperature']) * 100 / 85).toFixed(2).toString() + "%";

        var arr1 = Array();
        var arr2 = Array();
        for (var i = 0; i < 60; i++) {
          if (typeof resp[0].m[i] !== 'undefined') {
            arr1[i] = new Date(resp[0].m[i]['date'] * 1000).toTimeString().split(' ')[0];
            arr2[i] = resp[0].m[i]['temperature'];
          }
          else {
            arr2[i] = 0;
            arr1[i] = "";
          }
        }
        ChartSecData.labels = arr1.reverse();
        ChartSecData.datasets[0].data = arr2.reverse();
        ChartSec.update(0);

        var arr1 = Array();
        var arr2 = Array();
        var arr3 = Array();
        for (var i = 0; i < 60; i++) {
          if (typeof resp[0].h[i] !== 'undefined') {
            arr1[i] = new Date(resp[0].h[i]['date'] * 1000).toTimeString().split(' ')[0];
            arr2[i] = resp[0].h[i]['temperature'];
          }
          else {
            arr2[i] = 0;
            arr1[i] = "";
          }
        }
        ChartMinData.labels = arr1.reverse();
        ChartMinData.datasets[0].data = arr2.reverse();
        ChartMin.update(0);

        var arr1 = Array();
        var arr2 = Array();
        var arr3 = Array();
        for (var i = 0; i < 24; i++) {
          if (typeof resp[0].d[i] !== 'undefined') {
            arr1[i] = new Date(resp[0].d[i]['date'] * 1000).toTimeString().split(' ')[0];
            arr2[i] = resp[0].d[i]['temperature'];
          }
          else {
            arr2[i] = 0;
            arr1[i] = "";
          }
        }
        ChartHrsData.labels = arr1.reverse();
        ChartHrsData.datasets[0].data = arr2.reverse();
        ChartHrs.update(0);


        if (parseFloat(resp[0].m[0]['cpu']).toFixed(2) <= 65) {
          document.getElementById('cpu').className = "info-box bg-success";
        }
        else {
          if ((parseFloat(resp[0].m[0]['cpu'])).toFixed(2) <= 75) {
            document.getElementById('cpu').className = "info-box bg-warning";
          }
          else {
            document.getElementById('cpu').className = "info-box bg-danger";
          }
        }

        if (parseFloat(resp[0].m[0]['ram']).toFixed(2) <= 65) {
          document.getElementById('ram').className = "info-box bg-success";
        }
        else {
          if ((parseFloat(resp[0].m[0]['ram'])).toFixed(2) <= 75) {
            document.getElementById('ram').className = "info-box bg-warning";
          }
          else {
            document.getElementById('ram').className = "info-box bg-danger";
          }
        }

        if (parseFloat(resp[0].m[0]['hdd']).toFixed(2) <= 65) {
          document.getElementById('hdd').className = "info-box bg-success";
        }
        else {
          if ((parseFloat(resp[0].m[0]['hdd'])).toFixed(2) <= 75) {
            document.getElementById('hdd').className = "info-box bg-warning";
          }
          else {
            document.getElementById('tmp').className = "info-box bg-danger";
          }
        }

        if (parseFloat(resp[0].m[0]['temperature']).toFixed(2) <= 50) {
          document.getElementById('tmp').className = "info-box bg-success";
          document.getElementById('tmp-logo').className = "fas fa-thermometer-half";
        }
        else {
          if ((parseFloat(resp[0].m[0]['temperature'])).toFixed(2) <= 65) {
            document.getElementById('tmp').className = "info-box bg-warning";
            document.getElementById('tmp-logo').className = "fas fa-thermometer-three-quarters";
          }
          else {
            document.getElementById('tmp').className = "info-box bg-danger";
            document.getElementById('tmp-logo').className = "fas fa-thermometer-full";
          }
        }
      });
    }


    $('#menu2').addClass("active");
    update_page();
    var myInterval = setInterval(update_page, 1000);

  </script>

</body>
</html>
