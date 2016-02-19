<!-- Bradcrumbs -->
<div class="container">
	<div class="row" style="margin-top: 15px;">
		<div class="col s12 breadcrumbs">
			<span>Admin</span>
		</div>
	</div>
</div>
<!-- Fin de bradcrumbs -->

<div class="container">

	<div class="row">
		<div class="col s12 center-align">
			<h1>Dashboard</h1>
		</div>
	</div>

	<div class="row">
		<div class="col l4 m4 s4">
			<div class="card blue-grey">
				<div class="card-content white-text center-align">
					<span class="card-title">Solicitudes asignadas</span>
					<span style="display:block; font-size:100px;">
						3
					</span>
				</div>
				<div class="card-action">
					<a href="#">This is a link</a>
					<a href="#">This is a link</a>
				</div>
			</div>
		</div>

		<div class="col l8 m8 s8">
			<div class="card blue-grey">
				<div class="card-content white-text center-align">
					<span class="card-title">Solicitudes asignadas</span>
				</div>
				<div id="piechart" style="width: 100%; height: 300px;"></div>
			</div>
		</div>

		<div>

		</div>

		    <?php $this->Html->script('https://www.gstatic.com/charts/loader.js',array('inline'=>false)); ?>

		    <?php $this->Html->scriptStart(array('inline'=>false)); ?>

				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				function drawChart() {

					var data = google.visualization.arrayToDataTable([
						['Entidad', 'Número de solicitudes'],
						['DF',     345],
						['Jalisco',      300],
						['Hidalgo',  275],
						['Nuevo León', 250],
						['Puebla',    245]
					]);

					var options = {
						backgroundColor: 'transparent'
					};

					var chart = new google.visualization.PieChart(document.getElementById('piechart'));

					chart.draw(data, options);
				}

		    <?php $this->Html->scriptEnd(); ?>
	</div>

</div>