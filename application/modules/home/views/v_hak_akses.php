<div class="container"> 
	<div class="row">
		<div class="col col-md-8 offset-2">
			<?= $this->session->flashdata('sukses') ?>
			<div class="card">
				<div class="card-header">
					<p>Hak Akses</p>
				</div>
				<div class="card-body">
					<form action="<?= base_url('home/hak_akses/insert') ?>" method="post">
					<div class="row">
						<div class="col col-md-10 offset-1">
							<div class="form-group">
								<select name="level" class="form-control">
									<option>Pilih Level</option>
									<?php foreach($list_level as $lv): ?>
									<option value="<?= $lv->id_level ?>"><?= $lv->level ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col col-md-10 offset-1">
							<div class="form-group">
								<select name="url" class="form-control">
									<option>Pilih Url</option>
									<?php foreach($list_url as $u): ?>
									<option value="<?= $u->id_url ?>"><?= $u->url ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col col-md-10 offset-1">
							<div class="form-group">
								<select name="privilege" class="form-control">
									<option>Pilih Privilege</option>
									<?php foreach($list_privilege as $p): ?>
									<option value="<?= $p->id_privilege ?>"><?= $p->privilege ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div> <!-- end container -->