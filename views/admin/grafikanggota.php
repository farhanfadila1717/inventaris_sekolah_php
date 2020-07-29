<?php
include 'header.php';
?>
	<style type="text/css">
	body{
		font-family: roboto;
	}
 
	table{
		margin: 0px auto;
	}
	</style>
 
 
		<h2 class="center">Grafik Jurusan Anggota</h2>
 
 
	<?php 
include '../../koneksi.php';
?>
 
	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<br/>
	<div class="container">
	<table border="1">
		<thead>
			<tr>
				<th style="text-align:center;">No</th>
				<th style="text-align:center;">NIS</th>
				<th>Nama Anggota</th>
				<th style="text-align:center;">Kelamin</th>
				<th style="text-align:center;">Tempat Lahir</th>
				<th style="text-align:center;">Jurusan</th>
				<th style="text-align:center;">Tahun Masuk</th>
			</tr>
		</thead>
		<tbody>
			<?php 
		$no = 1;
		$data = mysqli_query($koneksi, "select * from tbl_anggota");
		while ($d = mysqli_fetch_array($data)) {
			?>
				<tr>
					<td style="text-align:center;"><?php echo $no++; ?></td>
					<td style="text-align:center;"><?php echo $d['nis']; ?></td>
					<td><?php echo $d['nama_anggota']; ?></td>
					<td style="text-align:center;"><?php echo $d['jk']; ?></td>
					<td><?php echo $d['tempat_lahir']; ?></td>
					<td style="text-align:center;"><?php echo $d['prodi']; ?></td>
					<td style="text-align:center;"><?php echo $d['thn_masuk']; ?></td>
				</tr>
				<?php 
		}
		?>
		</tbody>
	</table>
	</div>
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["AP", "MM", "PM", "RPL"],
				datasets: [{
					label: '',
					data: [
					<?php 
				$jumlah_ap = mysqli_query($koneksi, "select * from tbl_anggota where prodi='AP'");
				echo mysqli_num_rows($jumlah_ap);
				?>, 
					<?php 
				$jumlah_mm = mysqli_query($koneksi, "select * from tbl_anggota where prodi='MM'");
				echo mysqli_num_rows($jumlah_mm);
				?>, 
					<?php 
				$jumlah_pm = mysqli_query($koneksi, "select * from tbl_anggota where prodi='PM'");
				echo mysqli_num_rows($jumlah_pm);
				?>, 
					<?php 
				$jumlah_rpl = mysqli_query($koneksi, "select * from tbl_anggota where prodi='RPL'");
				echo mysqli_num_rows($jumlah_rpl);
				?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
<?php
include 'footer.php';
?>