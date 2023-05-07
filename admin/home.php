<div class="row1">
    <div class="row1 frmtitle">
        <h1>THỐNG KÊ SẢN PHẨM THEO DANH MỤC</h1>
    </div>
    <div class="row1 frmcontent">
        <div class="row1 mb10 frmdsloai">
            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
                <?php 
                    foreach($listthongke as $thongke){
                        extract($thongke);
                        echo'<tr>
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$minprice.'</td>
                                <td>'.$avgprice.'</td>
                            </tr>';
                    }
                ?>
              
            </table>
        </div>
        <div class="row1 mb10">
        <div class="row1">
    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);
        
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng sản phẩm'],
                <?php
                $tongdm = count($listthongke);
                $i = 1;
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    if ($i == $tongdm) $dauphay = "";
                    else $dauphay = ",";
                    echo "['" . $thongke['tendm']. "'," . $thongke['countsp']. "]" . $dauphay;
                    $i += 1;
                }
                ?>
            ]);
            var options = {
                'title': 'Thống kê sản phẩm theo danh mục',
                'width': 1100,
                'height': 800
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</div>
        </div>
    </div>
</div>