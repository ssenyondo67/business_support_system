<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @vite(['resources/js/app.js'])

</head>
<body class="bg-light " style="display: flex;">
     
    <div class="d-flex flex-column flex-shrink-0 p-3 vh-100  " style="width: 200px; background-color:#d3d3d3; transparacy:100%;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          <span class="fs-4" >LOGO</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link link-dark" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
              Products
            </a>
          </li>
          <li>
            <a href="{{ route('participantlist') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
              Participants
            </a>
          </li>
          <li>
            <a href="{{ route('add_reward') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
              Add rewards
            </a>
          </li>
          <li>
            <a href="{{ route('adminRegistration') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
              Add admin
            </a>
          </li>
          <li>
            <a href="{{ route('showreport') }}" class="nav-link link-light active ">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              Report
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              Edit Profile
            </a>
          </li>
          <li>
            <a href="{{ route('logoutUser') }}" class="nav-link link-dark">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              Logout
            </a>
          </li>
        </ul>
        <hr>
      
      </div>
<section>
    <script>
        window.onload = function () {
            var g = @json($dataPoint);
        
        //Better to construct options first and then pass it as a parameter
        var options = {
            animationEnabled: true,
            title: {
                text: "Member scores",                
                fontColor: "Peru"
            },	
            axisY: {
                tickThickness: 0,
                lineThickness: 0,
                valueFormatString: " ",
                includeZero: true,
                gridThickness: 0                    
            },
            axisX: {
                tickThickness: 0,
                lineThickness: 0,
                labelFontSize: 18,
                labelFontColor: "Peru"				
            },
            data: [{
                indexLabelFontSize: 26,
                toolTipContent: "<span style=\"color:#62C9C3\">{indexLabel}:</span> <span style=\"color:#CD853F\"><strong>{y}</strong></span>",
                indexLabelPlacement: "inside",
                indexLabelFontColor: "white",
                indexLabelFontWeight: 600,
                indexLabelFontFamily: "Verdana",
                color: "#62C9C3",
                type: "bar",
                dataPoints: g
            }]
        };
        
        $("#chartContainer").CanvasJSChart(options);
        $("#chartContainer1").CanvasJSChart(options);
        }
        </script>
       
        <script type="text/javascript">
            
         
    
        </script>
    
    <div id="chartContainer"class=" border border-info shadow-lg" style="height: 300px; width: 100%;"></div>
    
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    





    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Product', 'Sales'],
          <?php 
          echo $chartdata;
          ?>
        ]);

        var options = {
          title: 'Products sales percantages'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <div id="piechart" style="width: 900px; height: 500px;"></div>


</body>
</html>