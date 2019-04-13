
<?php error_reporting(0);
	include "lib.php"; 
if (isset($_POST['hitung']))
{
	$opt1 = $_POST['opt-1'];
	$opt2 = $_POST['opt-2'];
	$opt3 = $_POST['opt-3'];
	$fx = $_POST['fx'];
	$a = $_POST['a'];
	$b = $_POST['b'];
	$n = $_POST['n'];
	$calc = new calculate($opt1, $opt2, $opt3, $fx, $a, $b, $n);
	$calc->method1();
	if (count(explode(" ", $fx))==3)
	{
		if ($a<$b)
		{
			?><!DOCTYPE html>
			<html>
			<head>
				<title>Hasil Program Riemann</title>
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
						<div class="sign-form">
							<div class="sign-logo">
								<center>Hasil</center>
							</div><br/>
							<?php
							$divider = 1;
							$isifx = explode(" ", $fx);
							$soal = $opt1."(";
							if ($isifx[1]>0 and $isifx[1]<1)
								$soal .= "<sup>".$divider/$isifx[1]."</sup>&radic;x)";
							else if($isifx[1]==1)
								$soal .= "x)";
							else
								$soal .= "x<sup>".$isifx[1]."</sup>)";

							if ($isifx[2] != 0)
								$soal .= " ".$opt3." ".$isifx[2];
							?>
							<div class="sign-content">
								f(x) =  <?= $soal; ?><br/>
								Range [<?= $a.", ".$b; ?>]<br/>
								Jumlah partisi : <?= $n; ?><br/>
								Partisi <?= $a; ?>

								<?php 
								$p = ($b-$a)/$n;
								$h = $p+$a;
								$z = $h;
								for ($i = 0; $i<$calc->n-1; $i++)
								{
									echo " < ".$h;
									$h = 2*$h-1;
								}
								echo " < ".$b."<br/>";
								?>
							
								<?php echo "==============================================<br/>"; ?>
								Proses : <br/>
								<?php
								$sik = $z-$a;
								for ($i=0; $i<=$calc->n-1; $i++)
								{
									echo "X";
									echo $i+1;
									echo " = ";
									$calc->proses("tit", $i);
									echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
									echo "f(X";
									echo $i+1;
									echo ") = ";
									$calc->proses("output", $i);
									echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
									echo "&Delta;X";
									echo $i+1;
									echo " = ".$sik;
									echo "<br/>";
								}

								echo "==============================================<br/>";
								echo "Hasil : <br/>";
								echo "Rp = &Sigma;f(xi).&Delta;xi <br/>";
								echo "Rp = (";
								for ($i=0; $i<=$calc->n-1; $i++)
								{
									$calc->proses("output", $i);
									echo $i!=$calc->n-1 ? " + " : ")"; 
								}
								echo " &times; ";
								echo $sik;
								echo "<br/>";
								echo "Rp = ".$calc->l;
								?>
									<a href="index.php"><button class="sign-submit sign-google">Hitung Ulang</button></a>
									<br/><br/>
									<center>Made with &hearts; by Me</center>
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
		<?php
		}

		else
			header("location:index.php?m=".base64_encode("Nilai awal harus lebih kecil dari nilai akhir"));
	}

	else
		header("location:index.php?m=".base64_encode("Bentuk pada f(x) harus berformat (x angka angka)"));
}

