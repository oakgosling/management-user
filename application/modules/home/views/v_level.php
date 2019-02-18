<div class="col-md-4 offset-1">
	<div class="card">
		<div class="card-header">
			<h3>Daftar Level</h3>
		</div>
		<div class="card-body">
			<?php foreach ($lvl as $cl) { ?>
				<div class="alert alert-info" role="alert">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong><?= $cl->level?></strong>
				</div>
			<?php }?> 
		</div>
	</div>
</div>					

								

