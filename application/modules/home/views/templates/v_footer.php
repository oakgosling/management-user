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

        <script>
            function btnLevel() {
                $("#btn-users").slideDown("slow");
                $("#btn-level").hide("slow");
            }
            function btnUsers() {
                $("#btn-users").slideUp("slow");
                $("#btn-level").show("slow");
            }
            function get_nama($nik, $nama_lengkap) {
                $("#nik").val($nik);
                $("#nama_lengkap").val($nama_lengkap);
            }
            function get_id($id){
                var id = document.getElementById('id').value;
                if($id == id){
                    $id = 0;
                }
                $("#id").val($id);
            }

        </script>

</body>
</html>