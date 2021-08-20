  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- Ion Slider -->
  <script src="plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>


  <script>
    jQuery.event.special.touchstart = { setup: function( _, ns, handle ){ if ( ns.includes("noPreventDefault") ) { this.addEventListener("touchstart", handle, { passive: false }); } else { this.addEventListener("touchstart", handle, { passive: true }); } } };

    var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
    var currentTheme = localStorage.getItem('theme');
    var mainHeader = document.querySelector('.main-header');

    if (currentTheme) {
      if (currentTheme === 'dark') {
        if (!document.body.classList.contains('dark-mode')) {
          document.body.classList.add("dark-mode");
        }
        if (mainHeader.classList.contains('navbar-light')) {
          mainHeader.classList.add('navbar-dark');
          mainHeader.classList.remove('navbar-light');
        }
        toggleSwitch.checked = true;
      }
    }

    function switchTheme(e) {
      if (e.target.checked) {
        if (!document.body.classList.contains('dark-mode')) {
          document.body.classList.add("dark-mode");
        }
        if (mainHeader.classList.contains('navbar-light')) {
          mainHeader.classList.add('navbar-dark');
          mainHeader.classList.remove('navbar-light');
        }
        localStorage.setItem('theme', 'dark');
      } else {
        if (document.body.classList.contains('dark-mode')) {
          document.body.classList.remove("dark-mode");
        }
        if (mainHeader.classList.contains('navbar-dark')) {
          mainHeader.classList.add('navbar-light');
          mainHeader.classList.remove('navbar-dark');
        }
        localStorage.setItem('theme', 'light');
      }
    }

    toggleSwitch.addEventListener('change', switchTheme, false);
  </script>



  <script>
	// Make the dashboard widgets sortable Using jquery UI
	  $('.connectedSortable').sortable({
		placeholder: 'sort-highlight',
		connectWith: '.connectedSortable',
		handle: '.card-header, .nav-tabs',
		forcePlaceholderSize: true,
		zIndex: 999999
	  })
	  $('.connectedSortable .card-header').css('cursor', 'move')
  </script>



  <script>
    // Ludovic Courgnaud 2021
    $('nav').find('a').each(function() {
      $(this).removeClass('active');
    });

    $('nav').find('li').each(function() {
      $(this).removeClass('menu-is-opening');
      $(this).removeClass('menu-open');
    });

    function refreshNotifications() {
      $notifications = 0
      $.get("includes/request.php?data=notifications", function( data ) {
        var resp = JSON.parse(data);

        if (typeof resp == 'undefined') {
          return;
        }

        if (parseFloat(resp.raspberry[0]['temperature']).toFixed(2) <= 50) {
          document.getElementById('badge-hot').innerHTML = "";
          document.getElementById('badge-hot').className = "";
          document.getElementById('notification-fan').style = "display:none";
        }
        else {
          if ((parseFloat(resp.raspberry[0]['temperature'])).toFixed(2) <= 65) {
            document.getElementById('badge-hot').innerHTML = "HOT";
            document.getElementById('badge-hot').className ="badge badge-warning right";
            document.getElementById('notification-fan').style = "display:block";
            $notifications += 1;
          }
          else {
            document.getElementById('badge-hot').innerHTML = "HOT";
            document.getElementById('badge-hot').className ="badge badge-danger right";
            document.getElementById('notification-fan').style = "display:block";
            $notifications += 1;
          }
        }


        if ($notifications != 0) {
		document.getElementById('notifications-number').innerHTML = $notifications;
		document.getElementById('notifications-number-sp').innerHTML = $notifications + " Notification(s)";
		document.getElementById('notifications-dropdown').style = "display:block";
	}
	else {
		document.getElementById('notifications-number').innerHTML = "";
		document.getElementById('notifications-number-sp').innerHTML = "0 Notification";
		document.getElementById('notifications-dropdown').style = "display:none";
	}

	if (resp.mode[0]['dark'] ==  0) {
          document.getElementById('dark').innerHTML = "OFF";
          document.getElementById('dark').className = "badge badge-danger right";
        }
	else {
	  document.getElementById('dark').innerHTML = "ON";
          document.getElementById('dark').className = "badge badge-success right";
	}


	if (resp.mode[0]['silent'] ==  0) {
          document.getElementById('silent').innerHTML = "OFF";
          document.getElementById('silent').className = "badge badge-danger right";
        }
	else {
	  document.getElementById('silent').innerHTML = "ON";
          document.getElementById('silent').className = "badge badge-success right";
	}

	$probes = [0,0,0,0];
	$cpt = 0;
	$manual = 0;

	for (let i = 0; i < 4; i++) {
		if (resp.dew[0]['dh'+(i+1)+'_probe'] > -100) {
			$probes[i] = resp.dew[0]['dh'+(i+1)+'_probe'];
			document.getElementById('dew'+(i+1)).innerHTML = "1";
			if (resp.dew[0]['dh'+(i+1)+'_manual'] == true) {
				document.getElementById('dew'+(i+1)).className = "badge badge-warning right";
				$manual++;
			}
			else
				document.getElementById('dew'+(i+1)).className = "badge badge-success right";
			$cpt++;
		}
		else {
			document.getElementById('dew'+(i+1)).innerHTML = "0";
			document.getElementById('dew'+(i+1)).className = "badge badge-danger right";
		}
	}

	document.getElementById('dew-number').innerHTML = $cpt;
	if ($cpt == 0)
		document.getElementById('dew-number').className = "badge badge-info right";
	else
		if ($manual == 0)
			document.getElementById('dew-number').className = "badge badge-success right";
		else
			document.getElementById('dew-number').className = "badge badge-warning right";

      });
    }

    refreshNotifications();
    var myInterval = setInterval(refreshNotifications, 1000);
  </script>
