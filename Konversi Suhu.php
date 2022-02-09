<!DOCTYPE html>
<html>
<head>
	<title>Konvenrsi Suhu</title>
	<style type="text/css">
		body {
			background-color: brown;
		}
		table {
			background-color: white;
			margin-top: 15%;
			padding: 2em;
			border: thin;
		}
		input[type="number"] {
			width: 95%;
		}
		input[type="submit"] {
			width: 95%;
		}
		tr {
			padding: 1em;
		}
	</style>
</head>
<body>
	<form method="post">
		<table align="center" border="1">
			<tr style="margin-bottom: 10em;">
				<td colspan="2" style="text-align: center;">Konversi Suhu</td>
			</tr>
			<tr>
				<td colspan="2" style="align"><input type="number" name="bs1" required></td>
			</tr>
			<tr>
				<td>From : <br><select name="jenis1">
					<option value="celsius">Celcius</option>
					<option value="reamur">Reamur</option>
					<option value="fahreiheit">Fahreinheit</option>
				</select></td>
				<td>To : <br><select name="jenis2">
					<option value="reamur">Reamur</option>
					<option value="celsius">Celcius</option>
					<option value="fahreiheit">Fahreinheit</option>
				</select></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="cek" value="Konvenrsi"></td>
			</tr>
			<tr>
				<td colspan="2"><?php 
	if (isset($_POST['cek'])) {
		@$jenis1 = $_POST['jenis1'];
		$jenis2 = $_POST['jenis2'];
		$hasil;
//celsius
		if ($jenis1 == 'celsius' && $jenis2 == 'reamur') {
			$hasil = @$_POST['bs1'] * 0.8;
		}elseif ($jenis1 == "celsius" && $jenis2 == "fahreiheit") {
			$hasil = (@$_POST['bs1'] * 1.8) + 32;
		}elseif ($jenis1 == "celsius" && $jenis2 == "celsius") {
			$hasil = @$_POST['bs1'];
		}
//reamur
		elseif ($jenis1 == "reamur" && $jenis2 == "celsius") {
			$hasil = @$_POST['bs1'] * 1.25;
		}elseif ($jenis1 == "reamur" && $jenis2 == "fahreiheit") {
			$hasil = (@$_POST['bs1'] * 2.25) +32;
		}elseif ($jenis1 == "reamur" && $jenis2 == "reamur") {
			$hasil = @$_POST['bs1'];
		}
//fahreiheit
		elseif ($jenis1 == "fahreiheit" && $jenis2 == "celsius") {
			$hasil = (@$_POST['bs1'] - 32) * 0.555;
		}elseif ($jenis1 == "fahreiheit" && $jenis2 == "reamur") {
			$hasil = (@$_POST['bs1'] - 32) * 0.444;
		}elseif ($jenis1 == "fahreiheit" && $jenis2 == "fahreinheit") {
			$hasil = @$_POST['bs1'];
		}
		}
	?>
	<div align="center" >
	<?php
	if (empty($_POST['bs1'])) {
		echo "Silahkan Isi";
	}else {
		echo $_POST['bs1'] . " " . $jenis1 . " = " . $hasil . " Derajat " . $jenis2;
		}
	 ?>
	</div></td>
			</tr>
		</table>
	</form>
	
</body>
</html>