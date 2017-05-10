<?php
require_once('dompdf/autoload.inc.php');
use Dompdf\Dompdf;
$html = '
	<!DOCTYPE HTML>
	<html>
		<head>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link href="unj.png" rel="shortcut icon"/>
			<title>Daftar Ulang 2017 UNJ</title>
			<style>
				@font-face {
				  font-family: "Open Sans";
				  font-style: normal;
				  font-weight: normal;
				}
			</style>
		</head>
		<body>
			<img src="head.jpg" width="700 px"/>
			<br><br>
			<center><h3>
				BUKTI SELESAI DAFTAR ULANG<br>
				SNMPTN UNJ
			</h3></center>
			<br><br>
			<table class="table">
				<tr>
					<td>Nama Mahasiswa</td>
					<td> :</td>
					<td>Hanifa Fissalma</td>
				</tr>
				<tr>
					<td>Fakultas</td>
					<td> :</td>
					<td>Teknik</td>
				</tr>
				<tr>
					<td>Program Studi</td>
					<td> :</td>
					<td>Pend. Teknik Informatika dan Komputer</td>
				</tr>
				<tr>
					<td>Noreg</td>
					<td> :</td>
					<td><b>5235122734</b></td>
				</tr>
				<tr>
					<td>Password</td>
					<td> :</td>
					<td><b>123456</b></td>
				</tr>
			</table>
			<br><br>
			<div class="alert alert-danger">
				<h4>PERHATIAN!</h4>
				Silakan masuk ke sistem Siakad UNJ yang beralamat di http://siakad.unj.ac.id/ untuk pengisian data Akademik mahasiswa dengan menggunakan
				Noreg dan Password yang sudah tertera
			</div>
		</body>
	</html>';
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'potrait');
$dompdf->render();
$dompdf->stream();
?>
