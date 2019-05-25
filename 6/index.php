<?php include("connection.php"); ?>
<!doctype html>
<html lang="en">

<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/animate.css">
	<title>Aplikasi Data Programmer dan Skills</title>
</head>

<body>
	<div class="container" style="padding : 10px">

		<div class="title">
			<h1 class="bounceIn">Aplikasi Data Programmer dan Skills</h1>
		</div>
		<div class="card border-primary">
			<div class="bounceIn">
				<div class="card-body">
					<div class="container">
						<div class="row col">
							<div class="col-md">
								<center>

									<div class="row">
										<div class="col-md-8">
											<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Programmer">
										</div>
										<div class="col-md-4">
											<button class="btn btn-outline-primary" id="aksi" onclick="aksi()">Tambah Programmer Baru</button>
										</div>
									</div>

								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
		$query = mysqli_query($connection, "SELECT * FROM user");
		while ($fetch = mysqli_fetch_array($query)) {
			?>

			<div class="card border-primary">
				<div class="bounceIn">
					<div class="card-body">
						<div class="container">
							<div class="row">
								<div class="col-md sekond">
									<div class="masuk">
										<div class="nama">
											<h5><?php echo $fetch["name"]; ?></h5>
										</div>
										<div class="skill">
											<?php
											$idskill = $fetch["id"];

											$q = mysqli_query($connection, "SELECT * FROM skill WHERE user_id = '" . $idskill . "'");

											while ($f  = mysqli_fetch_array($q)) {
												echo $f["name"] . ', ';
											}
											?>
										</div>
									</div>
								</div>
								<div class="col-md sekond">
									<center>
										<div class="row three">
											<div class="col">
												<input type="text" class="form-control" placeholder="Masukkan Skills" id="skills-<?php echo $fetch["id"] ?>">
											</div>
											<div class="col">
												<button class="btn btn-outline-primary" onclick="tambah(<?php echo $fetch["id"] ?>)">Tambah Skill Baru</button>
											</div>
										</div>
									</center>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php
	}
	?>

	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/test.js"></script>

</body>

</html>