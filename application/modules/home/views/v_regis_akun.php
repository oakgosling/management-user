<style type="text/css">
	.form-ak{
		padding: 30px;
	}
</style>
                    <div class="span4">
								<form action="pro-registrasi" method="post" class="form-ak">
										<div class="form-group">
											<select name="kd" class="form-control">
												<option value="">Nama Lengkap</option>
												<?php foreach ($nUsr as $cc) { ?>
												<option value="<?= $cc->nik?>"><?= $cc->nama_lengkap?> | <?= $cc->tipe?></option>
												<?php } ?>
											</select>
										</div>
										<div class="form-group">
											<input type="email" name="email" id="basicinput" placeholder="E-mail" class="form-control">
										</div>
										<div class="form-group">
											<input type="password" name="password" id="basicinput" placeholder="Password" class="form-control">
										</div>
										<div class="form-group">
											<select name="lv" class="form-control">
												<option value="">Level</option>
												<?php foreach ($lvl as $cx) { ?>
												<option value="<?= $cx->id_level?>"><?= $cx->level?></option>
												<?php } ?>
											</select>
										</div>
										<button type="submit" class="pull-right btn btn-primary m-t-15 waves-effect">Simpan</button>
									</form>
