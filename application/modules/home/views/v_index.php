<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMIN POLITEKNIK GORONTALO</title>
        <link type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url();?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <style>
              #panel{
                display: none
              }
              .footer{
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #eee;
                padding: 5px;               
              }
            </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand" href="#">ADMIN SIAKAD</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li> -->
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li> -->
                  <li class="nav-item"><a href="#" class="nav-link">
                        <?php foreach ($l as $clv) {
                            echo $clv->lv_nama;
                        }?></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Add Karyawan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><?php echo $this->load->view('v_regis_akun');?></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('pro-logout');?>">Logout</a>
                  </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
              </div>
         </nav>

		<div id="panel">
		  <?php echo $this->load->view('v_headmenu');?>
		</div> 
			
		</div id="btn-tmb">
			<?php echo $this->load->view('v_home');?>
		</div>

        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <p class="copyright">&copy; <?php echo date("Y"); ?> ADMIN - SIAKAD POLIGON </p>
            </div>
        </div>
        <script src="<?php echo base_url();?>assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/scripts/common.js" type="text/javascript"></script>
      	<script src="<?php echo base_url();?>assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.table-message tbody tr').click(
				function() 
				{
					$(this).toggleClass('resolved');
				}
			);
		} );
	</script>

<script>
    function showForm() {
        $("#panel").slideDown("slow");
        $("#btn-tmb").hide("slow");
    }
    function hideForm() {
        $("#panel").slideUp("slow");
        $("#btn-tmb").show("slow");
    }

</script>
</body>
