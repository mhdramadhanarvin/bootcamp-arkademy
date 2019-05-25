<!DOCTYPE html>
<html>
<head>
	<title>BOOTCAMP</title>
	<!-- lokal -->
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="bootstrap.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
	<!-- CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</head>
<body>
<?php 
	include 'connect.php';

	if(isset($_POST['addprogrammer'])){
		$nama_programmer = $_POST['nama_programmer'];

		$add = $conn->prepare("INSERT INTO users VALUES ('','$nama_programmer') ");
		$add->execute();

		echo '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><b>Berhasil </b>menambahkan programmer baru!</div>';
	}elseif(isset($_POST['addskill'])){
		$id = $_POST['id'];
		$skill = $_POST['skill'];

		$add = $conn->prepare("INSERT INTO skills VALUES ('','$skill','$id') ");
		$add->execute();

		echo '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><b>Berhasil </b>menambahkan skill baru!</div>';
	}
?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
		      	<a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a> 
		    </div>
		 </div>
	</nav>
	<div class="container">
		<div class="card mt-3">
			<div class="cart-body">
				<div class="card-title text-center mt-3">
					<h1> Bootcamp Arkademy </h1>
				</div>
				<div class="card mx-5 mr-5 ml-5">
					<div class="cart-body px-3 py-3">
						<div class="card-title">
							Tambah Programmer Baru
						</div>
						<div class="card-text">
							<form method="post" action="">
								<div class="row">
									<div class="col-lg-8">
										<div class="form-group">
											<input type="text" class="form-control" name="nama_programmer" placeholder="Masukkann nama programmer">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<button name="addprogrammer" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-add"></i> TAMBAH</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<h3 class="text-center"> Daftar Programmer</h3>
			<?php 
			$query = $conn->prepare("SELECT * FROM `users` ");
			$query->execute();
			while($data = $query->fetch(PDO::FETCH_ASSOC)):
			?>
			<div class="card mx-5 my-3">
				<div class="cart-body px-3 py-3"> 
					<div class="card-text"> 
						<table class="table">
						  	<tr> 
							    <td><?=$data['name'];?></td>
							    <td rowspan="2">
							    	<form action="" method="post">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<input value="<?=$data['id'];?>" name="id" hidden>
													<input type="text" name="skill" class="form-control" placeholder="Tambah skill ">
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<button type="submit" name="addskill" class="btn btn-primary">TAMBAH</button>
												</div>
											</div>
										</div>
									</form>
							    </td>
						  	</tr>
						  	<tr> 
						  		<?php 
						  		$id = $data['id'];
						  		$querySkill = $conn->prepare("SELECT * FROM `skills` WHERE `user_id`=$id");
						  		$querySkill->execute();
						  		?>
							    <td>
							    	<?php while($dataSkill = $querySkill->fetch(PDO::FETCH_ASSOC)):?>
							    	<?php
							    	if($querySkill->rowcount() > 1){
							    		echo $dataSkill['name'].',';
							    	}else{
							    		echo $dataSkill['name'];
							    	}
							    	?>
							    	<?php endwhile;?>
							    </td>
						  	</tr>
						</table>
					</div>
				</div>
			</div> 
			<?php endwhile;?>
		</div>
	</div>
		<footer class="bg bg-dark mt-5 py-3 text-center"> 
		 	<span class="text-center text-white">&copy; 2019 MHD.RAMADHAN ARVIN</span> 
		</footer>
	</body>
</html>
