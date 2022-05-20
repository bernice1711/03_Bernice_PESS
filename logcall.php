<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log Call</title>
	<link rel="css/bootstrap.css" type="stylesheet" href="text/css">
</head>
<body>
	<div class="container" style="width: 80%">
		<!-- Use php require once expression to include header image and navigation bar from nav.php -->
		<?php require_once 'nav.php' ?>
		<!-- Create section container to place web form -->
		<section style="margin-top: 20px">
			<!-- Create web form with Caller Name, Contact Number, Location of Incident, Type of Incident, Description of Incident input fields -->
			<form action="dispatch.php" method="post">
				<!-- Row for Caller Name label and textbox input -->
				<div class="form-group row">
					<label for="callerName" class="col-sm-4 col-form-label">Caller's Name</label>
					<div class="col-sm-8">
						<input type="text" name="form-control" id="callerName" name="callerName">
					</div>
				</div>

				<!--  Row for Contact No label and text input -->
				<div class="form-group row">
					<label for="contactNo" class="col-sm-4 col-form-label">Contact Number (Required)</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="contactNo" name="contactNo">
					</div>
				</div>

				<!-- Row for Location of Incident label and drop down input -->
				<div class="form-group row">
					<label for="locationofIncident" class="col-sm-4 col-form-label">Location of Incident (Required)</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="locationofIncident" name="locationofIncident">
					</div>
				</div>
				<!-- Row for Type of Incident label and drop down input -->
				<div class="form-group row">
					<label for="typeofIncident" class="col-sm-4 col-form-label">Type of Incident (Required)</label>
					<div class="col-sm-8">
						<select id="typeofIncident" class="form-control" name="typeofIncident"></select>
					</div>
				</div>
				
				<!-- Row for Description of incident and large textbox input -->
				<div class="form-group row">
					<label for="descriptionofIncident" class="col-sm-4 col-form-label">Description of Incident (Required)</label>
					<div class="col-sm-8">
						<textarea class="form-control" rows="5" id="descriptionofIncident" name="descriptionofIncident"></textarea>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-4"></div>
					<div class="col-sm-8" style="text-align: center">
						<input type="btn btn-primary" name="btnProcessCall" type="
						submit" value="Process Call">
						<input type="btn btn-primary" name="btnReset" type="reset" value="Reset">
					</div>
				</div>
				<!-- End of web form -->
			</form>
			<!-- End of section -->
		</section>
		<footer class="page-footer font-small blue pt-4  footer-copyright text-center py-3">&copy; 2021 Copyright</footer>
	</div>
	<script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
</body>
</html>