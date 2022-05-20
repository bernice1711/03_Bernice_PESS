<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search Patrol Car</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container" style="width: 80%">
		<!-- Links to header image and navigation bar from nav.php -->
		<?php require_once 'nav.php'; ?>
		<!-- Create section container to place web form -->
		<section style="margin-top: 20px">
			<form action="update.php" method="POST">
				<div class="form-group row">
					<label for="patrolCarId" class="col-sm-4 col-form-label">
						Enter Patrol Car's Number
					</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="patrolCarId" id="patrolCarId">
					</div>
					<div class="col-sm-2">
						<input type="submit" class="btn btn-primary" name="btnSearch" value="Search">
					</div>
				</div>
			</form>
		</section>
		<footer class="page-footer font-small blue pt-4 footer-copyright text-center py-3">&copy; 2020 Copyright <a href="ww.ite..edu.sg">ITE</a></footer>
	</div>
	<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
</body>
</html>