<div class="card m-2">
	<div class="card-header">
            Produksi
	</div>
	<div class="card-body">
        <a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-plus"></i> Create</a>
		<div class="chart">
          	<canvas id="stackedBarChart" 
          		style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;">
          	</canvas>
        </div>
        <br>
        <table class="table table-sm table-hover">
			<thead class="text-center">
				<tr>
                    <th>#</th>
					<th>Line</th>
                    <th>Plan produksi</th>
                    <th>Actual produksi </th>
                    <th>Target LOR</th>
                    <th>Actual LOR</th>
				</tr>
			</thead>
			<tbody class="text-center">
                <tr>
                	<td>1</td>
                	<td>
                		<a href="<?= site_url() ?>produksi/line">Line 1</a></td>
                	<td>1200</td>
                	<td>1189</td>
                	<td>95%</td>
                	<td>93%</td>
                </tr>
                <tr>
                	<td>2</td>
                	<td>Line 2</td>
                	<td>1200</td>
                	<td>1189</td>
                	<td>95%</td>
                	<td>93%</td>
                </tr>
                <tr>
                	<td>3</td>
                	<td>Line 3</td>
                	<td>1200</td>
                	<td>1189</td>
                	<td>95%</td>
                	<td>93%</td>
                </tr>
                <tr>
                	<td>4</td>
                	<td>Line 4</td>
                	<td>1200</td>
                	<td>1189</td>
                	<td>95%</td>
                	<td>93%</td>
                </tr>
			</tbody>
		</table>

	</div>
</div>

<script type="text/javascript" src="<?= site_url() ?>plugin/chart.js/Chart.min.js"></script>

<script>
	// $(document).ready(function(){

	// 	$('#datatb').DataTable({
	// 		"responsive": true,
	// 		'ajax': '<?= site_url() ?>index.php/api/get_detailprod',
	// 		'columns': [
    //         	{ "data": "line" },
    //         	{ "data": "qty" }
    //         	]
	// 	});
	// });
	 

$(function () {
    var barChartData = {
      	labels  : [ <?php foreach ($line as $row ) { echo "'".$row->line."' ,"; } ?>],
      	datasets: [
	        {
	          label               	: 'LOR',
	          data                	: [92, 90, 86.6, 91],
	          backgroundColor		: '#0026FFFF',
	          barPercentage			: 0.3,
	        },
	        {
	          label               	: 'BM',
	          data                	: [3, 2, 9.4, 1],
	          backgroundColor		: 'red',
	          barPercentage			: 0.3,
	        },
	        {
	          label               	: 'NG',
	          data                	: [2, 5, 1.7, 2],
	          backgroundColor		: 'yellow',
	          barPercentage			: 0.3,
	        },
	        {
	          label               	: 'Others',
	          data                	: [3, 2, 2.3, 6],
	          backgroundColor		: 'purple',
	          barPercentage			: 0.3,
	        },
      	],
    }

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
	var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
	var stackedBarChartData = jQuery.extend(true, {}, barChartData)

	var stackedBarChartOptions = {
	    responsive              : true,
	    maintainAspectRatio     : false,
	    scales: {
	        xAxes: [{
	          	stacked: true,
	        }],
	        yAxes: [{
	          	stacked: true
	        }]
	    },
		legend: {
			position: 'right',
		},
		title: {
            display: true,
            text: 'Line Operation Ration by Line',
        }
	}

	var stackedBarChart = new Chart(stackedBarChartCanvas, {
	  type: 'bar', 
	  data: stackedBarChartData,
	  options: stackedBarChartOptions
	})
});

$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();   
});
</script>