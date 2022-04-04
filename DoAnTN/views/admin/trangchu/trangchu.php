<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Trang chủ</h1>
  <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>

<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Số lượng khách hàng</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
              foreach ($countnd as $nguoidung) {
                extract($nguoidung);
                echo '<h4>' . $dem . '</h4>';
              }
              ?>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-users fa-2x text-gray-300"></i>
            <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Số đơn hàng/ Giá trị</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
              foreach ($sumdh as $dh) {
                extract($dh);
                echo $count;
                echo "/";
                echo $sum;
              }
              ?>
           
            </div>đồng
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Món ăn</div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                  <?php
                  foreach ($countdh as $dh) {
                    extract($dh);
                    echo $dem;
                  }
                  ?>
                </div>
              </div>
              <div class="col-auto">
                <i class=" fa-2x text-gray-300"></i>
              </div>
              <!-- <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div> -->
            </div>  
          </div>
          <div class="col-auto">
          <i class="fas fa-hamburger fa-2x text-gray-300"></i>
            <!-- <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Bình luận</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
              foreach ($countbl as $bl) {
                extract($bl);
                echo $dem;
              }
              ?>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-comments fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="row frmcontent">

    Những đơn hàng được đặt gần đây
    <div class="row mb10 frmdsloai">
      <table>
        <tr>

          <th>KHÁCH HÀNG</th>
          <th>SỐ LƯỢNG</th>
          <th>GIÁ TRỊ ĐƠN</th>
          <!-- <th>PTTT</th> -->
          <th>TÌNH TRẠNG</th>
        </tr>
        <?php
        $STT = 1;
        foreach ($dsdh as $donhang) {
          extract($donhang);

          $kh = $donhang["Ten_DH"];
          $ttdh = get_ttdh($donhang['TrangThai']);
          $slsp = loadall_giohang_dem($donhang['ID_DH']);
          echo '<tr>
                                        
                                                                   
                                       
                                        <td>' . $kh . '</td>
                                        <td>' . $slsp . '</td>
                                        <td>' . $donhang['Tong_DH'] . '</td>  
                                        <td>' . $ttdh . '</td> 
                                                                                                              
                                       
                                      
                                    </tr>';
          $STT++;
        }

        ?>


      </table>
    </div>
    <!-- <div class="row mb10">
      Thống kê đơn hàng theo
      <canvas id="myChart1" style="width:100%;max-width:900px"></canvas>

      <script>
        var xyValues = [{
            x: 1,
            y: 2
          },
          {
            x: 2,
            y: 4
          },
          {
            x: 3,
            y: 6
          },
          {
            x: 3,
            y: 8
          },
          {
            x: 4,
            y: 10
          },
          {
            x: 6,
            y: 12
          },
          {
            x: 7,
            y: 14
          },
          {
            x: 8,
            y: 16
          },
          {
            x: 9,
            y: 18
          },
          {
            x: 10,
            y: 20
          },

        ];

        new Chart("myChart", {
          type: "scatter",
          data: {
            datasets: [{
              pointRadius: 4,
              pointBackgroundColor: "rgb(0,0,255)",
              data: xyValues
            }]
          },
          options: {
            legend: {
              display: false
            },
            scales: {
              xAxes: [{
                ticks: {
                  min: 0,
                  max: 12
                }
              }],
              yAxes: [{
                ticks: {
                  min: 0,
                  max: 20
                }
              }],
            }
          }
        });
      </script>

    </div> -->

  </div>
  <div class="row" style="float: left;">

    <div id="myChart" style="width:50%; max-width:600px; height:500px;">
    </div>

    <script>
      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Contry', 'Mhl'],
          <?php
          $tongdm = count($dstk);
          $i = 1;
          foreach ($dstk as $thongke) {
            extract($thongke);
            if ($i == $tongdm) $dauphay = "";
            else $dauphay = ",";
            echo " ['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "]" . $dauphay;
            $i += 1;
          }
          ?>


        ]);

        var options = {
          title: 'Thống kê số lượng món ăn theo từng loại '
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
      }
    </script>
    <!--  -->
    <div id="myChart1" style="width:50%; max-width:600px; height:500px;">
    </div>

    <script>
      google.charts.load('current', {
        'packages': ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Contry', 'Mhl'],
          <?php
          $tongdh = count($dstkdh);
          $i = 1;
          foreach ($tksp as $thongkedh) {
            extract($thongkedh);
            if ($i == $tongdh) $dauphay = "";
            else $dauphay = ",";
            echo " ['" . $thongkedh['Ten_SP'] . "', " . $thongkedh['countsp'] . "]" . $dauphay;
            $i += 1;
          }
          ?>


        ]);

        var options = {
          title: 'Thống kê món ăn theo đơn hàng'
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart1'));
        chart.draw(data, options);
      }
    </script>
    <!--  -->
    <!-- <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>

    <script>
      var xValues = ["a", "France", "Spain", "USA", "Argentina"];
      var yValues = [1, 49, 44, 24, 15];
      var barColors = ["red", "green", "blue", "orange", "brown"];

      new Chart("myChart2", {
        type: "bar",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          legend: {
            display: false
          },
          title: {
            display: true,
            text: "World Wine Production 2018"
          }
        }
      });
    </script> -->
    <!--  -->
 
    <div id="myChart3" style="width:100%; height:500px;"></div>

    <script>
      google.charts.load('current', {
        packages: ['corechart']
      });
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        // Set Data
        var data = google.visualization.arrayToDataTable([
          ['Ngày', 'Doanh thu'],
          <?php
          $tongdh = count($tkdh);
          $i = 1;
          foreach ($tkdh as $thongke3) {
            extract($thongke3);
          
            if ($i == $tongdh) $dauphay = "";
            else $dauphay = ",";
            echo " ['" . $thongke3['a'] . "', " . $thongke3['doanhthu'] . "]" . $dauphay;
            $i += 1;
          
          }
          ?>
          // [50, 7],
          // [60, 8],
          // [70, 8],
          // [80, 9],
          // [90, 9],
          // [100, 9],
          // [110, 10],
          // [120, 11],
          // [130, 14],
          // [140, 14],
          // [150, 15]
        ]);
        // Set Options
        var options = {
          title: 'Doanh thu theo tháng',
          hAxis: {
            title: 'Tháng'
          },
          vAxis: {
            title: 'Doanh thu'
          },
          legend: 'none'
        };
        // Draw
        var chart = new google.visualization.LineChart(document.getElementById('myChart3'));
        chart.draw(data, options);
      }
    </script>
  </div>
</div>