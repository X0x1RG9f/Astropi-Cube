<?php 
  if ( (intval($_GET["dew"]) != 1) & (intval($_GET["dew"]) != 2) & (intval($_GET["dew"]) != 3) & (intval($_GET["dew"]) != 4) ) {
    header('Location: index.php');
    exit;
  }
?>

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
              <h1 class="m-0">Controller n°<?php echo intval($_GET["dew"]) ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Controller n°<?php echo intval($_GET["dew"]) ?></li>
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
            <div id="alert1" class="col-md-6 col-sm-6 col-12">
              <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Probe n°<?php echo intval($_GET["dew"]) ?> Missing!</h5>
                  No probe is detected on chanel n°<?php echo intval($_GET["dew"]) ?>. <br/>
                  You will not be able to use this interface.
              </div>
            </div>           
             <div id="alert2" class="col-md-6 col-sm-6 col-12">
              <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Missing Meteo Module!</h5>
                  No Meteo Module is detected (temperature, humidity). <br/>
                  Dew Point cannot be calculated automatically and Dew Heaters will only work in manual mode.
              </div>
            </div>   
            </div>          
                 </div> 
      </section>
       <section id="mycontent1" class="content">
        <div class="container-fluid"> 
          <div class="row">          
            <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-temperature-high"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Air Temperature</span>
                <span id="air-text" class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-percentage"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Humidity</span>
                <span id="hum-text" class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
                    <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-temperature-low"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Probe n°<?php echo intval($_GET["dew"]) ?> Temperature</span>
                <span id="probe-text" class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-purple color-palette"><i class="fas fa-tint"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Dew Point</span>
                <span id="dew-text" class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-purple color-palette"><i class="fas fa-icicles"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Freeze Point</span>
                <span id="frz-text" class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>          
          
          <div class="col-md-4 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-purple color-palette"><i class="fas fa-bolt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Dew Heater n°<?php echo intval($_GET["dew"]) ?> Power</span>
                <span id="pwr-text" class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>  
        </div> 
      </section>


      <!-- Main content -->
      <section id="mycontent2" class="content">
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
                    Dew Controller n°<?php echo intval($_GET["dew"]) ?>
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
            
          
              
            <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Dew Controller n°<?php echo intval($_GET["dew"]) ?> mode</h3>
                </div>
                <center>
                  <div class="card-body">
                    <p>Please note that mode will be reinitialized when probe is disconnected.</p>
                    <table>
                      <tr>
                        <td>
                          <center><div class="btn-group-vertical">
                              <button onclick="dhmode(0);" id="btn0" type="button" class="btn btn-success">Auto</button>
                              <button onclick="dhmode(1);" id="btn1" type="button" class="btn btn-success">Manual</button>
                              <button onclick="dhmode(2);" id="btn2" type="button" class="btn btn-success">100 % (2 minutes)</button>
                              <button onclick="dhmode(3);" id="btn3" type="button" class="btn btn-success">Off</button>
                          </div></center>
                        </td>
                      </tr>
                      <tr>
                        <td width="400px">
                           <center><input id="range_1" type="text" name="range_6" value=""></center>
                        </td>
                      </tr>
                    </table>
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
      arr2[i] = null;
    }


    var ChartSecData = {
      labels: arr1,
      datasets: [
        {
          label: 'Probe Temperature (°C)',
          yAxisID: 'A',
          backgroundColor: '#17a2b8',
          borderColor: '#17a2b8',
          fill: false,
          borderWidth:2,
          pointRadius: false,
          data: arr2
        },
        {
          label: 'Dew Point (°C)',
          yAxisID: 'A',
          backgroundColor: '#605ca8',
          borderColor: '#605ca8',
          fill: false,
          borderWidth:1,
          pointRadius: false,
          data: arr2
        },
        {
          label: 'Dew Heater Power (%)',
          yAxisID: 'B',
          backgroundColor: '#dc3545',
          borderColor: '#dc3545',
          fill: false,
          borderWidth:1,
          pointRadius: false,
          data: arr2
        }
      ]
    }
    
    var ChartHrsData = {
      labels: arr1,
      datasets: [
        {
          label: 'Probe Temperature °C',
          yAxisID: 'A',
          backgroundColor: '#17a2b8',
          borderColor: '#17a2b8',
          fill: false,
          borderWidth:2,
          pointRadius: false,
          data: arr2
        },
        {
          label: 'Dew Point (°C)',
          yAxisID: 'A',
          backgroundColor: '#605ca8',
          borderColor: '#605ca8',
          fill: false,
          borderWidth:1,
          pointRadius: false,
          data: arr2
        },
        {
          label: 'Dew Heater Power (%)',
          yAxisID: 'B',
          backgroundColor: '#dc3545',
          borderColor: '#dc3545',
          fill: false,
          borderWidth:1,
          pointRadius: false,
          data: arr2
        }
      ]
    }

    var ChartMinData = {
      labels: arr1,
      datasets: [
        {
          label: 'Probe Temperature °C',
          yAxisID: 'A',
          backgroundColor: '#17a2b8',
          borderColor: '#17a2b8',
          fill: false,
          borderWidth:2,
          pointRadius: false,
          data: arr2
        },
        {
          label: 'Dew Point (°C)',
          yAxisID: 'A',
          backgroundColor: '#605ca8',
          borderColor: '#605ca8',
          fill: false,
          borderWidth:1,
          pointRadius: false,
          data: arr2
        },
        {
          label: 'Dew Heater Power (%)',
          yAxisID: 'B',
          backgroundColor: '#dc3545',
          borderColor: '#dc3545',
          fill: false,
          borderWidth:1,
          pointRadius: false,
          data: arr2
        }
      ]
    }
    
    var ChartOptions = {
      maintainAspectRatio: false,
      responsive: true,
      legend: {
        display: true
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
          id: 'A',
          type: 'linear',
          position: 'left',
          ticks: {
            beginAtZero: true,
            stepValue: 5,
            max: 50,
            min: -30
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
        },
        {
          id: 'B',
          type: 'linear',
          position: 'right',
          gridLines: {
          display: false
          },
          ticks: {
            beginAtZero: true,
            stepValue: 10,
            max: 100,
            min: 0
          },
          scaleLabel: {
            display: true,
            labelString: 'Power (%)'
          },
          afterTickToLabelConversion : function(q){
            for(var tick in q.ticks){
                q.ticks[tick] += '\u0025';
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

    function update_page(first_launch = false) {    
      $.get("includes/request.php?data=dew", function( data ) {
          $('body').find('button').each(function() {
            $(this).removeClass('active');
          });

        var resp = JSON.parse(data);

        if (typeof resp == 'undefined') {
          return;
        }
        
        if (resp[1].m[0]['dew_point'] > -100) {
          document.getElementById('alert2').style.display = "None";
        }
        else {
          document.getElementById('alert2').style.display = "block";
        }
        
        if (resp[0].m[0]['dh' + <?php echo intval($_GET["dew"]) ?> + '_probe'] > -100) {
          document.getElementById('alert1').style.display = "None";
          document.getElementById('mycontent1').style.display = "block";
          document.getElementById('mycontent2').style.display = "block";
        }
        else {
          document.getElementById('alert1').style.display = "block";
          document.getElementById('mycontent1').style.display = "None";
          document.getElementById('mycontent2').style.display = "None";
          return;
        }
        
        document.getElementById('probe-text').innerHTML = (parseFloat(resp[0].m[0]['dh' + <?php echo intval($_GET["dew"]) ?> + '_probe'])).toFixed(2).toString() + "°C / " + (parseFloat(resp[0].m[0]['dh' + <?php echo intval($_GET["dew"]) ?> + '_probe'] * 1.8 + 32)).toFixed(2).toString() + "°F";
        document.getElementById('air-text').innerHTML = (parseFloat(resp[1].m[0]['gnd_temperature'])).toFixed(2).toString() + "°C / " + (parseFloat(resp[1].m[0]['gnd_temperature'] * 1.8 + 32)).toFixed(2).toString() + "°F";
        document.getElementById('hum-text').innerHTML = resp[1].m[0]['gnd_humidity'] + "%";
        document.getElementById('dew-text').innerHTML = (parseFloat(resp[1].m[0]['dew_point'])).toFixed(2).toString() + "°C / " + (parseFloat(resp[1].m[0]['dew_point'] * 1.8 + 32)).toFixed(2).toString() + "°F";
        document.getElementById('frz-text').innerHTML = (parseFloat(resp[1].m[0]['frz_point'])).toFixed(2).toString() + "°C / " + (parseFloat(resp[1].m[0]['frz_point'] * 1.8 + 32)).toFixed(2).toString() + "°F";
        document.getElementById('pwr-text').innerHTML = resp[0].m[0]['dh' + <?php echo intval($_GET["dew"]) ?> + '_pwr'] + "%";
       
        $('#btn' + resp[0].m[0]['dh' + <?php echo $_GET["dew"] ?> + '_mode']).addClass("active");
        
        if (!$("#btn1").hasClass("active")) 
          $('#range_1').data("ionRangeSlider").update({
            from: resp[0].m[0]['dh' + <?php echo intval($_GET["dew"]) ?> + '_pwr']
          });
        
        if (first_launch)
          $('#range_1').data("ionRangeSlider").update({
            from: resp[0].m[0]['dh' + <?php echo intval($_GET["dew"]) ?> + '_pwr']
          });
        
        var arr1 = Array();
        var arr2 = Array();
        var arr3 = Array();
        var arr4 = Array();
        for (var i = 0; i < 60; i++) {
          arr1[i] = "";
          arr2[i] = null;
          arr3[i] = null;
          arr4[i] = null;
          if (typeof resp[0].m[i] !== 'undefined') {
            arr1[i] = new Date(resp[0].m[i]['date'] * 1000).toTimeString().split(' ')[0];
            if (resp[0].m[i]['dh' + <?php echo $_GET['dew']; ?> + '_probe'] > -100) {
              arr2[i] = resp[0].m[i]['dh' + <?php echo $_GET['dew']; ?> + '_probe'];
              arr3[i] = resp[1].m[i]['dew_point'];
              arr4[i] = resp[0].m[i]['dh' + <?php echo $_GET['dew']; ?> + '_pwr'];
            }
          }
        }
        ChartSecData.labels = arr1.reverse();
        ChartSecData.datasets[0].data = arr2.reverse();
        ChartSecData.datasets[1].data = arr3.reverse();
        ChartSecData.datasets[2].data = arr4.reverse();
        ChartSec.update(0);

        var arr1 = Array();
        var arr2 = Array();
        var arr3 = Array();
        var arr4 = Array();
        for (var i = 0; i < 60; i++) {
          arr1[i] = "";
          arr2[i] = null;
          arr3[i] = null;
          arr4[i] = null;
          if (typeof resp[0].h[i] !== 'undefined') {
            arr1[i] = new Date(resp[0].h[i]['date'] * 1000).toTimeString().split(' ')[0];
            if (resp[0].h[i]['dh' + <?php echo $_GET['dew']; ?> + '_probe'] > -100) {
              arr2[i] = resp[0].h[i]['dh' + <?php echo $_GET['dew']; ?> + '_probe'];
              arr3[i] = resp[1].h[i]['dew_point'];
              arr4[i] = resp[0].h[i]['dh' + <?php echo $_GET['dew']; ?> + '_pwr'];
            }
          }
        }
        ChartMinData.labels = arr1.reverse();
        ChartMinData.datasets[0].data = arr2.reverse();
        ChartMinData.datasets[1].data = arr3.reverse();
        ChartMinData.datasets[2].data = arr4.reverse();
        ChartMin.update(0);

        var arr1 = Array();
        var arr2 = Array();
        var arr3 = Array();
        var arr4 = Array();
        for (var i = 0; i < 24; i++) {
          arr1[i] = "";
          arr2[i] = null;
          arr3[i] = null;
          arr4[i] = null;
          if (typeof resp[0].d[i] !== 'undefined') {
            arr1[i] = new Date(resp[0].d[i]['date'] * 1000).toTimeString().split(' ')[0];
            if (resp[0].d[i]['dh' + <?php echo $_GET['dew']; ?> + '_probe'] > -100) {
              arr2[i] = resp[0].d[i]['dh' + <?php echo $_GET['dew']; ?> + '_probe'];
              arr3[i] = resp[1].d[i]['dew_point'];
              arr4[i] = resp[0].d[i]['dh' + <?php echo $_GET['dew']; ?> + '_pwr'];
            }
          }
        }
        ChartHrsData.labels = arr1.reverse();
        ChartHrsData.datasets[0].data = arr2.reverse();
        ChartHrsData.datasets[1].data = arr3.reverse();
        ChartHrsData.datasets[2].data = arr4.reverse();
        ChartHrs.update(0);
      });
    }
      
    update_page(true);
    var myInterval = setInterval(update_page, 1000);
    
    
    $(function () {
      /* ION SLIDER */
      $('#range_1').ionRangeSlider({
        min     : 0,
        max     : 100,
        from    : 0,
        type    : 'single',
        step    : 5,
        snaps   : "true",
        postfix : '%',
        prettify: false,
        hasGrid : true,
        onFinish: function (data) {
            if ($("#btn1").hasClass("active"))
              $.get("includes/request.php?dew="+<?php echo $_GET['dew']; ?>+"&data=1&pwr="+data["from"]);
        }
      })
    })
  
    function dhmode(id){
      $('body').find('button').each(function() {
            $(this).removeClass('active');
      });
      $.get("includes/request.php?dew="+<?php echo $_GET['dew']; ?>+"&data="+id);
    }
    
    $('#menu5').addClass("active");
    if (<?php echo intval($_GET["dew"]) ?> == 1) { $('#menu51').addClass("active"); }
    if (<?php echo intval($_GET["dew"]) ?> == 2) { $('#menu52').addClass("active"); }
    if (<?php echo intval($_GET["dew"]) ?> == 3) { $('#menu53').addClass("active"); }
    if (<?php echo intval($_GET["dew"]) ?> == 4) { $('#menu54').addClass("active"); }
    $('#drop2').addClass("menu-is-opening menu-open");
  </script>

</body>
</html>
