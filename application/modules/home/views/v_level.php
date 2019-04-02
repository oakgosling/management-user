
	<div class="container"> 
		<div class="row">
			<div class="col col-md-8 offset-2">
				<div class="card">
					<div class="card-header">
						<p>List Level</p>
					</div>
					<div class="card-body">
						<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addLevel">
							<img width="10" src="<?php echo base_url() ?>assets/svg/si-glyph-plus.svg">&nbsp;Add
						</button>
						<table class="table table-hover">
				            <thead>
				                <tr>
				                  <th scope="col">#</th>
				                  <th scope="col">Level</th>
				                  <th scope="col">Aksi</th>
				                </tr>
				            </thead>
				            <tbody>
				            	<?php $i = 1; ?>
				            	<?php foreach($level as $lv): ?>
				                <tr>
				                  <th scope="row"><?= $i++; ?></th>
				                  <td><?= $lv->level ?></td>
				                  <td>
				                      <img style="cursor: pointer;" width="20" src="<?php echo base_url('assets/svg/si-glyph-edit.svg') ?>" data-toggle="modal" data-target="#addLevel"/>
				                    	&nbsp;
				                    <a href="<?= base_url('home/level/delete_level/') . $lv->id_level ?>">
				                      <img width="20" src="<?php echo base_url('assets/svg/si-glyph-trash.svg') ?>"/>
				                    </a>
				                  </td>
				                </tr>
				                <?php endforeach; ?>
				            </tbody>
				        </table>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end container -->

	<!-- Modal add level -->
<div class="modal fade" id="addLevel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Level</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      	<form action="<?= base_url('home/level/add_level') ?>" method="POST">
		      <div class="modal-body">
		      		<input type="hidden" name="id_level" />
		        	<input type="text" name="level" value="" placeholder="Level .." class="form-control" autofocus />
		      </div>
		      <div class="modal-footer">
		        	<button type="submit" class="btn btn-primary">Simpan</button>
		      </div>
		</form>
	</div>
  </div>
</div>