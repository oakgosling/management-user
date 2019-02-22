<br>
<div>
    <button type="button" onclick="hideForm();" class="btn btn-danger m-t-15 waves-effect">users</button>
</div>
<br>
<div class="container">
    <div class="row">
		<?php echo $this->load->view('v_hak_akses');?>
    </div>
</div>
<div class="content">
    <div class="btn-controls">
		<?php echo $this->load->view('v_level');?>
    </div>
</div>
