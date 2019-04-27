<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dev GreenHouse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" ></head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/popper.js/umd/popper.min.js"> </script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <?php
    include 'config.php';
    ?>
    
                                        
    
</head>

<body>
        <div class="wrapper">
                <!-- Sidebar -->
                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3>Dev GreenHouse</h3>
                    </div>
            
                    <ul class="list-unstyled components">
                        <p>Dev GreenHouse</p>
                        <li >
                            <a href="index.html"  >Home</a>
                        </li>
                        <li>
                            <a href="monitoring.php" >Monitoring</a>
                        </li>
                        <li>
                                <a href="portofolio.html">Portfolio</a>
                        </li>
                        <li>
                                <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                    </ul>
                </nav>
                <!-- content-->
                <div id="content">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                
                            </div>
                        </nav>
                        <h3>Monitoring GreenHouse</h3>
                        <div class="row mb-6">   
                        <div class="col-lg-6 mb-0 mb-lg-0">
                                <div class="card">
                                  <div class="card-header">
                                    <h2 class="h6 text-uppercase mb-0">Kelembapan GreenHouse</h2>
                                  </div>
                                  <div class="card-body">
                                    <div class="chart-holder mt-5 mb-5">
                                      <div class="container">
                                        <canvas id="myChart" width="100" height="100"></canvas>
                                    </div>
                                    <script>
                                    <?php $id= mysqli_query($mysqli, "SELECT * FROM iot where id"); 
                                    $kelembapan= mysqli_query($mysqli, "SELECT * FROM iot where kelembapan");?>
                                    
                                        var ctx = document.getElementById("myChart");
                                        var myChart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                            labels: [<?php while($d=mysqli_fetch_array($id)) { echo '"' . $d['id'] . '",';}?>],
                                                datasets: [{
                                                        label: 'kelembapan',
                                                        data: [<?php while($k=mysqli_fetch_array($kelembapan)) { echo '"' . $k['kelembapan'] . '",';}?>],
                                                        backgroundColor: [
                                                            'rgba(255, 99, 132, 0.2)',
                                                            'rgba(54, 162, 235, 0.2)',
                                                            'rgba(255, 206, 86, 0.2)',
                                                            'rgba(75, 192, 192, 0.2)',
                                                            'rgba(153, 102, 255, 0.2)',
                                                            'rgba(255, 159, 64, 0.2)'
                                                        ],
                                                        borderColor: [
                                                            'rgba(255,99,132,1)',
                                                            'rgba(54, 162, 235, 1)',
                                                            'rgba(255, 206, 86, 1)',
                                                            'rgba(75, 192, 192, 1)',
                                                            'rgba(153, 102, 255, 1)',
                                                            'rgba(255, 159, 64, 1)'
                                                        ],
                                                        borderWidth: 1
                                                    }]
                                            },
                                            options: {
                                                scales: {
                                                    yAxes: [{
                                                            ticks: {
                                                                beginAtZero: true
                                                            }
                                                        }]
                                                }
                                            }
                                        });
                                        
                                    </script>
                                      
                                    </div>
                                  </div>
                                </div>
                        </div>
                        <div class="col-lg-6 mb- mb-lg-0">
                                <div class="card">
                                  <div class="card-header">
                                    <h2 class="h6 text-uppercase mb-0">Suhu Udara GreenHouse</h2>
                                  </div>
                                  <div class="card-body">
                                    <div class="chart-holder mt-5 mb-5">
                                    <div class="container">
                                        <canvas id="Chartsuhu" width="100" height="100"></canvas>
                                    </div>
                                        <script>
                                    <?php $id= mysqli_query($mysqli, "SELECT * FROM iot where id"); 
                                    $suhu= mysqli_query($mysqli, "SELECT * FROM iot where suhu");?>
                                    
                                        var ctx = document.getElementById("Chartsuhu");
                                        var Chartsuhu = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                            labels: [<?php while($d=mysqli_fetch_array($id)) { echo '"' . $d['id'] . '",';}?>],
                                                datasets: [{
                                                        label: 'suhu',
                                                        data: [<?php while($s=mysqli_fetch_array($suhu)) { echo '"' . $s['suhu'] . '",';}?>],
                                                        backgroundColor: [
                                                            'rgba(255, 99, 132, 0.2)',
                                                            'rgba(54, 162, 235, 0.2)',
                                                            'rgba(255, 206, 86, 0.2)',
                                                            'rgba(75, 192, 192, 0.2)',
                                                            'rgba(153, 102, 255, 0.2)',
                                                            'rgba(255, 159, 64, 0.2)'
                                                        ],
                                                        borderColor: [
                                                            'rgba(255,99,132,1)',
                                                            'rgba(54, 162, 235, 1)',
                                                            'rgba(255, 206, 86, 1)',
                                                            'rgba(75, 192, 192, 1)',
                                                            'rgba(153, 102, 255, 1)',
                                                            'rgba(255, 159, 64, 1)'
                                                        ],
                                                        borderWidth: 1
                                                    }]
                                            },
                                            options: {
                                                scales: {
                                                    yAxes: [{
                                                            ticks: {
                                                                beginAtZero: true
                                                            }
                                                        }]
                                                }
                                            }
                                        });
                                        </script>
                                    </div>
                                  </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

</body>
</html>