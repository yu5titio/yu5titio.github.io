<!DOCTYPE html>
<html>
<head>
	<title>Grafik Penjualan</title>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
	<style type="text/css">
		body {
			font-family: Roboto;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
		}
		h2 {
			margin-bottom: 20px;
		}
		#chart-container {
			width: 500px;
			height: 500px;
		}
	</style>
</head>
<body>
	<h2>Grafik Penjualan SIWEB Life Balanced</h2>
	<div id="chart-container">
		<canvas id="myChart"></canvas>
	</div>

	<?php
		// Koneksi ke database
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_toko";

		$conn = new mysqli($servername, $username, $password, $dbname);

		// Cek koneksi
		if ($conn->connect_error) {
			die("Koneksi gagal: " . $conn->connect_error);
		}

		// Query untuk mengambil data
		$sql = "SELECT tanggal_input, total FROM nota";
		$result = $conn->query($sql);

		$labels = [];
		$values = [];

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$labels[] = $row["tanggal_input"];
				$values[] = $row["total"];
			}
		} else {
			echo "0 results";
		}
		$conn->close();
	?>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($labels); ?>,
				datasets: [{
					label: 'Total Penjualan',
					data: <?php echo json_encode($values); ?>,
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
</body>
</html>
