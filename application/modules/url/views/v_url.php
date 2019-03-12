
	<div class="container"> 
		<div class="row">
			<div class="col col-md-8 offset-2">
				<div class="card">
					<div class="card-header">
						<p>List Url</p>
					</div>
					<div class="card-body">
						<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addLevel">
							<img width="10" src="<?php echo base_url() ?>assets/svg/si-glyph-plus.svg">&nbsp;Add
						</button>
						<table class="table table-hover">
				            <thead>
				                <tr>
				                  <th scope="col">#</th>
				                  <th scope="col">Url</th>
				                  <th scope="col">Deskripsi</th>
				                  <th scope="col">Nama View</th>
				                  <th scope="col">Aksi</th>
				                </tr>
				            </thead>
				            <tbody>
				            	<?php $i = 1; ?>
				            	<?php foreach($url as $list_url): ?>
				                <tr>
				                  <th scope="row"><?= $i++; ?></th>
				                  <td><?= $list_url->url ?></td>
				                  <td><?= $list_url->deskripsi_url ?></td>
				                  <td><?= $list_url->nama_view ?></td>
				                  <td>
				                    <a href="" data-toggle="modal" data-target="#addLevel">
				                      <img width="20" src="<?php echo base_url() ?>assets/svg/si-glyph-edit.svg"/>
				                    </a>
				                    &nbsp;
				                    <a href="">
				                      <img width="20" src="<?php echo base_url() ?>assets/svg/si-glyph-trash.svg"/>
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
        <h5 class="modal-title" id="exampleModalLabel">Add Url</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>