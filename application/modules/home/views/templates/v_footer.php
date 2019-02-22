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
</html>