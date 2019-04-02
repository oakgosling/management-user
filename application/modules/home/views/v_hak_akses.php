
	<div class="container"> 
		<div class="row">
			<div class="col col-md-8 offset-2">
				<div class="card">
					<div class="card-header">
						<p>Hak Akses</p>
					</div>
					<div class="card-body" class="form-control">
						<select name="lvl">
								<option>Pilih Level</option>
							<?php foreach($list_level as $lv): ?>
								<option value="<?= $lv->id_level ?>"><?= $lv->level ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end container -->