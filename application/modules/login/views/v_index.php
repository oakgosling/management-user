<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<meta name="viewport" content="width=device-width" initial-scale="1.0" />
	<title>ADMIN SIAKAD POLIGON</title>
	<link type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url();?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

	<style type="text/css">
		.wrapper{
			margin-top: 100px;
			margin-left: -30px;
		}
		.card-header{
			background-color: #B714B7;
			color: #fff;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<div class="card">
					<form class="form-vertical" action="pro-login" method="post">
						<div class="card-header">
							<h3>Login</h3>
						</div>
						<div class="card-body">
							<div class="form-group">
								<input class="form-control" type="text" name="username" id="inputEmail" placeholder="Username" autofocus autocomplete="off">
							</div>
							<div class="form-group">
									<input class="form-control" type="password" name="password" id="inputPassword" placeholder="Password" autocomplete="off">
							</div>
						</div>
						<div class="card-footer">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
					</form>
					</div> <!-- end card -->
				</div> <!-- end module -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div><!--/.wrapper-->

	<script src="<?php echo base_url();?>assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
