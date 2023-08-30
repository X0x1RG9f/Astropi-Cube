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
              <h1 class="m-0">Power Monitoring</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="#">Power Monitoring</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


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
                    <i class="fas fa-bolt mr-1"></i>
                    Current Consumption
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
                    <div class="chart tab-pane active" id="chart-sec" style="position: relative; height: 490px;">
                        <canvas id="chart-sec-canvas" height="490" style="height: 490px;"></canvas>
                     </div>
                    <div class="chart tab-pane" id="chart-min" style="position: relative; height: 490px;">
                      <canvas id="chart-min-canvas" height="490" style="height: 490px;"></canvas>
                    </div>
                    <div class="chart tab-pane" id="chart-hrs" style="position: relative; height: 490px;">
                      <canvas id="chart-hrs-canvas" height="490" style="height: 490px;"></canvas>
                    </div>
                  </div>
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </section>

          <div class="col-md-5 connectedSortable">

            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sensors Detailled Information</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table style="width:100%" class="table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th style="text-align:center">Fused</th>
                      <th style="text-align:center; width=10%; vertical-align: middle;">Current</th>
                      <th style="text-align:center">%</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Raspberry Pi (inc. Fan, Probes)</td>
                      <td style="text-align:center">4A</td>
                      <td style="text-align:center; vertical-align: middle;">
                        <div class="progress progress-xs">
                          <div id="progress1" class="progress-bar progress-bar-danger"></div>
                        </div>
                      </td>
                      <td style="text-align:center"><span id="percent1" class="badge bg-danger">0%</span></td>
                    </tr>
                    <tr>
                      <td>Dew Controller n°1</td>
                      <td style="text-align:center">2A</td>
                      <td style="text-align:center; vertical-align: middle;">
                        <div class="progress progress-xs">
                          <div id="progress2" class="progress-bar bg-warning" ></div>
                        </div>
                      </td>
                      <td style="text-align:center"><span id="percent2" class="badge bg-warning">0%</span></td>
                    </tr>
                    <tr>
                      <td>Dew Controller n°2</td>
                      <td style="text-align:center">2A</td>
                      <td style="text-align:center; vertical-align: middle;">
                        <div class="progress progress-xs progress-striped active">
                          <div id="progress3" class="progress-bar bg-primary"></div>
                        </div>
                      </td>
                      <td style="text-align:center"><span id="percent3" class="badge bg-primary">0%</span></td>
                    </tr>
                    <tr>
                      <td>Dew Controller n°3</td>
                      <td style="text-align:center">1A</td>
                      <td style="text-align:center; vertical-align: middle;">
                        <div class="progress progress-xs progress-striped active">
                          <div id="progress4" class="progress-bar bg-success" ></div>
                        </div>
                      </td>
                      <td style="text-align:center"><span id="percent4" class="badge bg-success">0%</span></td>
                    </tr>
                    <tr>
                      <td>Dew Controller n°4</td>
                      <td style="text-align:center">1A</td>
                      <td style="text-align:center; vertical-align: middle;">
                        <div class="progress progress-xs progress-striped active">
                          <div id="progress5" class="progress-bar bg-success"></div>
                        </div>
                      </td>
                      <td style="text-align:center"><span id="percent5" class="badge bg-success">0%</span></td>
                    </tr>
                    <tr>
                      <td>GX-12 Output</td>
                      <td style="text-align:center">4A</td>
                      <td style="text-align:center; vertical-align: middle;">
                        <div class="progress progress-xs progress-striped active">
                          <div id="progress6" class="progress-bar bg-success" ></div>
                        </div>
                      </td>
                      <td style="text-align:center"><span id="percent6" class="badge bg-success">0%</span></td>
                    </tr>
                    <tr>
                      <td>12v Output n°1</td>
                      <td style="text-align:center">3A</td>
                      <td style="text-align:center; vertical-align: middle;">
                        <div class="progress progress-xs progress-striped active">
                          <div id="progress7" class="progress-bar bg-success" ></div>
                        </div>
                      </td>
                      <td style="text-align:center"><span id="percent7" class="badge bg-success">0%</span></td>
                    </tr>
                    <tr>
                      <td>12v Output n°2</td>
                      <td style="text-align:center">3A</td>
                      <td style="text-align:center; vertical-align: middle;">
                        <div class="progress progress-xs progress-striped active">
                          <div id="progress8" class="progress-bar bg-success"></div>
                        </div>
                      </td>
                      <td style="text-align:center"><span id="percent8" class="badge bg-success">0%</span></td>
                    </tr>
                    <tr>
                      <td>12v Output n°3</td>
                      <td style="text-align:center">2A</td>
                      <td style="text-align:center; vertical-align: middle;">
                        <div class="progress progress-xs progress-striped active">
                          <div id="progress9" class="progress-bar bg-success" ></div>
                        </div>
                      </td>
                      <td style="text-align:center"><span id="percent9" class="badge bg-success">0%</span></td>
                    </tr>
                    <tr>
                      <td>12v Output n°4</td>
                      <td style="text-align:center">2A</td>
                      <td style="text-align:center; vertical-align: middle;">
                        <div class="progress progress-xs progress-striped active">
                          <div id="progress10" class="progress-bar bg-success"></div>
                        </div>
                      </td>
                      <td style="text-align:center"><span id="percent10" class="badge bg-success">0%</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
          label: 'Raspberry Pi',
          yAxisID: 'A',
          backgroundColor: '#54478c',
          borderColor: '#54478c',
          fill: false,
          borderWidth:2,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'Dew Heater n°1',
          yAxisID: 'A',
          backgroundColor: '#2c699a',
          borderColor: '#2c699a',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'Dew Heater n°2',
          yAxisID: 'A',
          backgroundColor: '#048ba8',
          borderColor: '#048ba8',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'Dew Heater n°3',
          yAxisID: 'A',
          backgroundColor: '#0db39e',
          borderColor: '#0db39e',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'Dew Heater n°4',
          yAxisID: 'A',
          backgroundColor: '#16db93',
          borderColor: '#16db93',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'GX-12 Output',
          yAxisID: 'A',
          backgroundColor: '#83e377',
          borderColor: '#83e377',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: '12v Output n°1',
          yAxisID: 'A',
          backgroundColor: '#b9e769',
          borderColor: '#b9e769',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: '12v Output n°2',
          yAxisID: 'A',
          backgroundColor: '#efea5a',
          borderColor: '#efea5a',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: '12v Output n°3',
          yAxisID: 'A',
          backgroundColor: '#f1c453',
          borderColor: '#f1c453',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: '12v Output n°4',
          yAxisID: 'A',
          backgroundColor: '#f29e4c',
          borderColor: '#f29e4c',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        }
      ]
    }
    
    var ChartHrsData = {
      labels: arr1,
      datasets: [
        {
          label: 'Raspberry Pi',
          yAxisID: 'A',
          backgroundColor: '#54478c',
          borderColor: '#54478c',
          fill: false,
          borderWidth:2,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'Dew Heater n°1',
          yAxisID: 'A',
          backgroundColor: '#2c699a',
          borderColor: '#2c699a',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'Dew Heater n°2',
          yAxisID: 'A',
          backgroundColor: '#048ba8',
          borderColor: '#048ba8',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'Dew Heater n°3',
          yAxisID: 'A',
          backgroundColor: '#0db39e',
          borderColor: '#0db39e',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'Dew Heater n°4',
          yAxisID: 'A',
          backgroundColor: '#16db93',
          borderColor: '#16db93',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'GX-12 Output',
          yAxisID: 'A',
          backgroundColor: '#83e377',
          borderColor: '#83e377',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: '12v Output n°1',
          yAxisID: 'A',
          backgroundColor: '#b9e769',
          borderColor: '#b9e769',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: '12v Output n°2',
          yAxisID: 'A',
          backgroundColor: '#efea5a',
          borderColor: '#efea5a',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: '12v Output n°3',
          yAxisID: 'A',
          backgroundColor: '#f1c453',
          borderColor: '#f1c453',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: '12v Output n°4',
          yAxisID: 'A',
          backgroundColor: '#f29e4c',
          borderColor: '#f29e4c',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        }
      ]
    }

    var ChartMinData = {
      labels: arr1,
      datasets: [
        {
          label: 'Raspberry Pi',
          yAxisID: 'A',
          backgroundColor: '#54478c',
          borderColor: '#54478c',
          fill: false,
          borderWidth:2,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'Dew Heater n°1',
          yAxisID: 'A',
          backgroundColor: '#2c699a',
          borderColor: '#2c699a',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'Dew Heater n°2',
          yAxisID: 'A',
          backgroundColor: '#048ba8',
          borderColor: '#048ba8',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'Dew Heater n°3',
          yAxisID: 'A',
          backgroundColor: '#0db39e',
          borderColor: '#0db39e',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'Dew Heater n°4',
          yAxisID: 'A',
          backgroundColor: '#16db93',
          borderColor: '#16db93',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: 'GX-12 Output',
          yAxisID: 'A',
          backgroundColor: '#83e377',
          borderColor: '#83e377',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: '12v Output n°1',
          yAxisID: 'A',
          backgroundColor: '#b9e769',
          borderColor: '#b9e769',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: '12v Output n°2',
          yAxisID: 'A',
          backgroundColor: '#efea5a',
          borderColor: '#efea5a',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: '12v Output n°3',
          yAxisID: 'A',
          backgroundColor: '#f1c453',
          borderColor: '#f1c453',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
          data: arr2
        },
        {
          label: '12v Output n°4',
          yAxisID: 'A',
          backgroundColor: '#f29e4c',
          borderColor: '#f29e4c',
          fill: false,
          borderWidth:1,
          pointRadius: 2,
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
            stepValue: 0.5,
            max: 5,
            min: 0
          },
          scaleLabel: {
            display: true,
            labelString: 'Current (A)'
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
      $.get("includes/request.php?data=power", function( data ) {
        var resp = JSON.parse(data);

        if (typeof resp == 'undefined') {
          return;
        }
        
        if (typeof resp.m[0] == 'undefined') {
          return;
        }
        
        var arr = Array();
        
        arr[0] = resp.m[0]['rpi'] / 4 * 100;
        arr[1] = resp.m[0]['dh1'] / 2 * 100;
        arr[2] = resp.m[0]['dh2'] / 2 * 100;
        arr[3] = resp.m[0]['dh3'] / 1 * 100;
        arr[4] = resp.m[0]['dh4'] / 1 * 100;
        arr[5] = resp.m[0]['out1'] / 4 * 100;
        arr[6] = resp.m[0]['out2'] / 3 * 100;
        arr[7] = resp.m[0]['out3'] / 3 * 100;
        arr[8] = resp.m[0]['out4'] / 2 * 100;
        arr[9] = resp.m[0]['out5'] / 2 * 100;
        
        for (var i = 0; i < 10; i++) {
          if (arr[i] > 100) {
            arr[i] = 100;
          }
          $("#progress" + (i+1)).css("width", arr[i] + "%");
          $("#percent" + (i+1)).text(arr[i] + "%");
          
          $("#progress" + (i+1)).removeClass();
          $("#percent" + (i+1)).removeClass();
              
          if (arr[i] > 75){
            if (arr[i] > 90) {
              $("#progress" + (i+1)).addClass("progress-bar bg-danger");
              $("#percent" + (i+1)).addClass("badge bg-danger");
            }
            else {
              $("#progress" + (i+1)).addClass("progress-bar bg-warning");
              $("#percent" + (i+1)).addClass("badge bg-warning");
            }
          }
          else {
            $("#progress" + (i+1)).addClass("progress-bar bg-success");
            $("#percent" + (i+1)).addClass("badge bg-success");
          }
        }
        

        var arr1 = Array();
        var arr2 = Array();
        var arr3 = Array();
        var arr4 = Array();
        var arr5 = Array();
        var arr6 = Array();
        var arr7 = Array();
        var arr8 = Array();
        var arr9 = Array();
        var arr10 = Array();
        var arr11 = Array();
        for (var i = 0; i < 60; i++) {
          if (typeof resp.m[i] !== 'undefined') {
            arr1[i] = new Date(resp.m[i]['date'] * 1000).toTimeString().split(' ')[0];
            arr2[i] = resp.m[i]['rpi'];
            arr3[i] = resp.m[i]['dh1'];
            arr4[i] = resp.m[i]['dh2'];
            arr5[i] = resp.m[i]['dh3'];
            arr6[i] = resp.m[i]['dh4'];
            arr7[i] = resp.m[i]['out1'];
            arr8[i] = resp.m[i]['out2'];
            arr9[i] = resp.m[i]['out3'];
            arr10[i] = resp.m[i]['out4'];
            arr11[i] = resp.m[i]['out5'];
          }
          else {
            arr1[i] = "";
            arr2[i] = 0;
            arr3[i] = 0;
            arr4[i] = 0;
            arr5[i] = 0;
            arr6[i] = 0;
            arr7[i] = 0;
            arr8[i] = 0;
            arr9[i] = 0;
            arr10[i] = 0;
            arr11[i] = 0;
          }
        }
        ChartSecData.labels = arr1.reverse();
        ChartSecData.datasets[0].data = arr2.reverse();
        ChartSecData.datasets[1].data = arr3.reverse();
        ChartSecData.datasets[2].data = arr4.reverse();
        ChartSecData.datasets[3].data = arr5.reverse();
        ChartSecData.datasets[4].data = arr6.reverse();
        ChartSecData.datasets[5].data = arr7.reverse();
        ChartSecData.datasets[6].data = arr8.reverse();
        ChartSecData.datasets[7].data = arr9.reverse();
        ChartSecData.datasets[8].data = arr10.reverse();
        ChartSecData.datasets[9].data = arr11.reverse();
        ChartSec.update(0);

        var arr1 = Array();
        var arr2 = Array();
        var arr3 = Array();
        var arr4 = Array();
        var arr5 = Array();
        var arr6 = Array();
        var arr7 = Array();
        var arr8 = Array();
        var arr9 = Array();
        var arr10 = Array();
        var arr11 = Array();
        for (var i = 0; i < 60; i++) {
          if (typeof resp.h[i] !== 'undefined') {
            arr1[i] = new Date(resp.h[i]['date'] * 1000).toTimeString().split(' ')[0];
            arr2[i] = resp.h[i]['rpi'];
            arr3[i] = resp.h[i]['dh1'];
            arr4[i] = resp.h[i]['dh2'];
            arr5[i] = resp.h[i]['dh3'];
            arr6[i] = resp.h[i]['dh4'];
            arr7[i] = resp.h[i]['out1'];
            arr8[i] = resp.h[i]['out2'];
            arr9[i] = resp.h[i]['out3'];
            arr10[i] = resp.h[i]['out4'];
            arr11[i] = resp.h[i]['out5'];
          }
          else {
            arr1[i] = "";
            arr2[i] = 0;
            arr3[i] = 0;
            arr4[i] = 0;
            arr5[i] = 0;
            arr6[i] = 0;
            arr7[i] = 0;
            arr8[i] = 0;
            arr9[i] = 0;
            arr10[i] = 0;
            arr11[i] = 0;
          }
        }
        ChartMinData.labels = arr1.reverse();
        ChartMinData.datasets[0].data = arr2.reverse();
        ChartMinData.datasets[1].data = arr3.reverse();
        ChartMinData.datasets[2].data = arr4.reverse();
        ChartMinData.datasets[3].data = arr5.reverse();
        ChartMinData.datasets[4].data = arr6.reverse();
        ChartMinData.datasets[5].data = arr7.reverse();
        ChartMinData.datasets[6].data = arr8.reverse();
        ChartMinData.datasets[7].data = arr9.reverse();
        ChartMinData.datasets[8].data = arr10.reverse();
        ChartMinData.datasets[9].data = arr11.reverse();
        ChartMin.update(0);

        var arr1 = Array();
        var arr2 = Array();
        var arr3 = Array();
        var arr4 = Array();
        var arr5 = Array();
        var arr6 = Array();
        var arr7 = Array();
        var arr8 = Array();
        var arr9 = Array();
        var arr10 = Array();
        var arr11 = Array();
        for (var i = 0; i < 24; i++) {
          if (typeof resp.d[i] !== 'undefined') {
            arr1[i] = new Date(resp.d[i]['date'] * 1000).toTimeString().split(' ')[0];
            arr2[i] = resp.d[i]['rpi'];
            arr3[i] = resp.d[i]['dh1'];
            arr4[i] = resp.d[i]['dh2'];
            arr5[i] = resp.d[i]['dh3'];
            arr6[i] = resp.d[i]['dh4'];
            arr7[i] = resp.d[i]['out1'];
            arr8[i] = resp.d[i]['out2'];
            arr9[i] = resp.d[i]['out3'];
            arr10[i] = resp.d[i]['out4'];
            arr11[i] = resp.d[i]['out5'];
          }
          else {
            arr1[i] = "";
            arr2[i] = 0;
            arr3[i] = 0;
            arr4[i] = 0;
            arr5[i] = 0;
            arr6[i] = 0;
            arr7[i] = 0;
            arr8[i] = 0;
            arr9[i] = 0;
            arr10[i] = 0;
            arr11[i] = 0;
          }
        }
        ChartHrsData.labels = arr1.reverse();
        ChartHrsData.datasets[0].data = arr2.reverse();
        ChartHrsData.datasets[1].data = arr3.reverse();
        ChartHrsData.datasets[2].data = arr4.reverse();
        ChartHrsData.datasets[3].data = arr5.reverse();
        ChartHrsData.datasets[4].data = arr6.reverse();
        ChartHrsData.datasets[5].data = arr7.reverse();
        ChartHrsData.datasets[6].data = arr8.reverse();
        ChartHrsData.datasets[7].data = arr9.reverse();
        ChartHrsData.datasets[8].data = arr10.reverse();
        ChartHrsData.datasets[9].data = arr11.reverse();
        ChartHrs.update(0);
      });
    }


    $('#menu3').addClass("active");
    update_page();
    var myInterval = setInterval(update_page, 2000);

  </script>

</body>
</html>
