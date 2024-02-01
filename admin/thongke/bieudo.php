<div class="row">
            <div class="row formtitle">
                <h3>BIỂU ĐỒ</h3>
            </div>
            <div class="row formcontent">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        // var data = google.visualization.arrayToDataTable([
        //   ['Task', 'Hours per Day'],
        //   ['Work',     11],
        //   ['Eat',      2],
        //   ['Commute',  2],
        //   ['Watch TV', 2],
        //   ['Sleep',    7]
        // ]);
        var data = google.visualization.arrayToDataTable([
          ['Danh mục', 'Số lượng'],
            <?php
            foreach ($dsthongke as $thongke) {
                extract($thongke);
                echo"['$tendanhmuc',$soluong],";
            }
            ?>
        ]);

        var options = {
          title: 'BIỂU ĐỒ SỐ LƯỢNG SẢN PHẨM TRONG DANH MỤC',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    <div id="piechart_3d" style="width: 600px; height: 400px;"></div>
    </div>
    </div>
