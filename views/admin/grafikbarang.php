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
 
 
		<h2 class="center">Grafik Kategori Barang</h2>
 
 
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
				<th>No</th>
				<th>Nama Barang</th>
				<th>Kategori</th>
				<th>Jumlah</th>
			</tr>
		</thead>
		<tbody>
			<?php 
    $no = 1;
    $data = mysqli_query($koneksi, "select * from tbl_barang");
    while ($d = mysqli_fetch_array($data)) {
        ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama_barang']; ?></td>
					<td><?php echo $d['kategori']; ?></td>
					<td><?php echo $d['jumlah_barang']; ?></td>
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
				labels: ["ATK", "Alat Elektronik", "Alat Sekolah", "Peralatan Olahraga"],
				datasets: [{
					label: '',
					data: [
					<?php 
    $jumlah_atk = mysqli_query($koneksi, "select * from tbl_barang where kategori='ATK'");
    echo mysqli_num_rows($jumlah_atk);
    ?>, 
					<?php 
    $jumlah_elek = mysqli_query($koneksi, "select * from tbl_barang where kategori='Alat Elektronik'");
    echo mysqli_num_rows($jumlah_elek);
    ?>, 
					<?php 
    $jumlah_sekolah = mysqli_query($koneksi, "select * from tbl_barang where kategori='Alat Sekolah'");
    echo mysqli_num_rows($jumlah_sekolah);
    ?>, 
					<?php 
    $jumlah_olah = mysqli_query($koneksi, "select * from tbl_barang where kategori='Peralatan Olahraga'");
    echo mysqli_num_rows($jumlah_olah);
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