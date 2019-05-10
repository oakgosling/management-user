	<div class="container">
		<div class="row">
			<div class="col col-lg-8 offset-2">
				<?= $this->session->flashdata('alert') ?>
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4 offset-2">
				<div class="card">
					<div class="card-header">
						<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalform">Add Url</button>
					</div>
					<div class="card-body">
						<form action="<?= base_url('home/url/update') ?>" method="POST">
							<input type="hidden" name="id" value="0" id="id">
							<table class="table table-hover">
								<?php 
									$i = 1;
									foreach($url as $u) { 
								?>
								<tr>
									<td><?= $i++; ?></td>
									<td><?= ucfirst($u->url) ?></td>
									<td>
										<button name="id_url" type="submit" class="btn btn-link" value="<?= $u->id_url ?>">
											<img width="15" src="<?php echo base_url('assets/svg/si-glyph-plus.svg') ?>" alt="add_to_head">
										</button>
									</td>
								</tr>
								<?php } ?>
							</table>
						</form>
					</div>
				</div> <!-- end card -->
			</div> <!-- end col -->

			<div class="col col-md-4">
				<div class="card">
					<div class="card-header">
						<p>Head Menu</p>
					</div>
					<div class="card-body">
						<div id="accordion">
							<?php 
							$i = 1;
							foreach($head_menu as $hm) { ?>
							  <div class="card">
							    <div class="card-header" id="headingOne">
							      <h5 class="mb-0">

							        <a href="<?= base_url('url/tes/') . $hm->id_head_menu ?>" onclick="get_id('<?= $hm->id_head_menu ?>')" data-toggle="collapse" data-target="#<?= $hm->id_head_menu ?>" aria-expanded="false" aria-controls="collapseOne">
							          <?= $hm->caption ?>
							        </a>

							      </h5>
							    </div>

							    <div id="<?= $hm->id_head_menu ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
							    
							    	<?php foreach($url_head[$i] as $uh) { ?>
								      <div class="card-body">
								        <?= ucfirst($uh->url) ?>
								      </div>
								  	<?php }
								  		$i++;
								  	 ?>
							    </div>
							  </div> <!-- end card -->
							  <?php } ?>
							</div> <!-- end acordion -->
					</div>
				</div> <!-- end card -->
			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->


	<!-- Modal form create Url -->
<div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 style="color: #fff" class="modal-title" id="exampleModalLabel">Add New Url</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?= base_url('home/url/insert') ?>" method="POST">
          	<div class="form-group">
          		<input type="hidden" name="id">
          		<input type="text" name="url" placeholder="Url" class="form-control" required autofocus />
          	</div>
          	<div class="form-group">
          		<textarea name="deskripsi_url" cols="40" rows="5">Deskripsi ..</textarea>
          	</div>
          	<div class="form-group">
          		<input type="text" name="nama_view" placeholder="Caption" class="form-control" required />
          	</div>
          	<div class="form-group">
          		<p>Level short sekarang: <?= $level_short->ls ?></p>
          		<input type="text" name="level_short" size="10" placeholder="Level Sort" class="form-control" required />
          	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      		</form>
    </div>
  </div>
</div>