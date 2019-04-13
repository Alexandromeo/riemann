<?php error_reporting(0);?>
<!DOCTYPE html>
<html>
<head>
	<title>Program Riemann</title>
	<link rel="stylesheet" type="text/css" href="lib.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body class="body">
<div class="container-fluid">
	<div class="row">
		<br/><br/>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-4">
			<?php 
			if ($_GET['m'])
			{?>
				<div class="alert">
					<?= base64_decode($_GET['m']); ?>
				</div><?php
			}?>
			<div class="sign-form">
				<div class="sign-logo">
					<center>Program Riemann</center>
				</div><br/>
				<div class="sign-content">
					<form class="has-feedback" method="post" action="hasil.php">
						<span class="form-control-feedback" id="sign-fx-pindah">Masukkan f(x)</span>
						<select id="selek-1" name="opt-1">
							<option value="">Pilih</option>
							<option value="sin">sin()</option>
							<option value="cos">cos()</option>
							<option value="tan">tan()</option>
						</select>
						<select id="selek-2" name="opt-2">
							<option value="pow">pow()</option>
						</select>
						<select id="selek-3" name="opt-3">
							<option value="">Pilih</option>
							<option value="+">+</option>
							<option value="-">-</option>
							<option value="*">*</option>
							<option value="/">/</option>							
						</select>
						<input type="text" class="sign-input" name="fx" id="sign-fx">

						<br/><br/><br/><br/>
						<span class="form-control-feedback" id="sign-a-pindah">Nilai Awal</span>
						<input type="text" class="sign-input" name="a" id="sign-a">

						<br/><br/><br/><br/>
						<span class="form-control-feedback" id="sign-b-pindah">Nilai Akhir</span>
						<input type="text" class="sign-input" name="b" id="sign-b">						
						

						<br/><br/><br/><br/>
						<span class="form-control-feedback" id="sign-n-pindah">Jumlah Partisi</span>
						<input type="text" class="sign-input" name="n" id="sign-n">
						<input type="submit" class="sign-submit" id="teratur" name="hitung" value="Hitung Dengan Xi Teratur">
					</form>
					<div class="sign-or">
						<hr noshade class="sign-garis">
							<center>ATAU</center>
						<hr noshade class="sign-garis-2">
						<button type="button" class="sign-submit sign-google">Hitung Dengan Xi Sembarang</button>
						<br/><br/>
						<center><h5><b>Made with &hearts; by Me</b></h5></center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="lib.js"></script>