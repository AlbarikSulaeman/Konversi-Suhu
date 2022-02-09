<!DOCTYPE html>
<html>
<head>
	<title>Konvenrsi Suhu</title>
	<style type="text/css">
		 {
			
		}
	</style>
</head>
<body>
	<form method="post">
		<table align="center">
			<tr>
				<td colspan="2">Konversi Suhu</td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2"><input type="number" name="bs1"  fillable ></td>
				<td></td>
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
				<td><input type="submit" name="cek" value="Konvenrsi"></td>
				<td></td>
			</tr>
		</table>
	</form>
	<?php 
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
	<div align="center">
	<?php
	if (empty($_POST['bs1'])) {
		echo "Silahkan Isi";
	}else {
		echo $hasil . " Derajat " . $jenis2;
		}
	 ?>
	</div>
</body>
</html>