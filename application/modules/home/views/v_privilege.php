
	<div class="container"> 
		<div class="row">
			<div class="col col-md-8 offset-2">
				<?= $this->session->flashdata('sukses'); ?>
				<div class="card">
					<div class="card-header">
						<p>List Privilege</p>
					</div>
					<div class="card-body">
						<button onclick="privilege();" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addLevel">
							<img width="10" src="<?php echo base_url() ?>assets/svg/si-glyph-plus.svg">&nbsp;Add
						</button>
						<table class="table table-hover">
				            <thead>
				                <tr>
				                  <th scope="col">#</th>
				                  <th scope="col">Privilege</th>
				                  <th scope="col">Edit</th>
				                  <th scope="col">Delete</th>
				                  <th scope="col">View</th>
				                  <th scope="col">Insert</th>
				                  <th scope="col">Aksi</th>
				                </tr>
				            </thead>
				            <tbody>
				            	<?php $i = 1; ?>
				            	<?php foreach($privilege as $p): ?>
				                <tr>
				                  <th scope="row"><?= $i++; ?></th>
				                  <td><?= $p->privilege ?></td>
				                  <td><?= $p->edit ?></td>
				                  <td><?= $p->delete ?></td>
				                  <td><?= $p->view ?></td>
				                  <td><?= $p->insert ?></td>
				                  <td>
				                    <a style="cursor: pointer;" data-toggle="modal" data-target="#addLevel" onclick="privilege(
				                    	'<?= $p->id_privilege ?>',
				                    	'<?= $p->privilege ?>',
				                    	'<?= $p->edit ?>',
				                    	'<?= $p->delete ?>',
				                    	'<?= $p->view ?>',
				                    	'<?= $p->insert ?>'
				                    );">
				                      <img width="20" src="<?php echo base_url() ?>assets/svg/si-glyph-edit.svg"/>
				                    </a>
				                    &nbsp;
				                    <a onclick="return confirm('Hapus?');" href="<?= base_url('home/privilege/delete/') . $p->id_privilege ?>">
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
        <h5 class="modal-title" id="exampleModalLabel">Privilege</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('home/privilege/insert') ?>" method="post">
        	<input type="hidden" name="id" id="id" />
        	<div class="form-group">
        		<input type="text" name="privilege" id="privilege" placeholder="Privilege" class="form-control" />
        	</div>
        	<div class="row">
        		<div class="col col-lg-2 offset-2">
        			<div class="form-group">
			    		<label>edit</label>
			    		<select name="edit" id="edit" class="form-control">
			    			<option value="0">0</option>
			    			<option value="1">1</option>
			    		</select>
		    		</div>
        		</div>

        		<div class="col col-lg-2">
        			<div class="form-group">
			    		<label>delete</label>
			    		<select name="delete" id="delete" class="form-control">
			    			<option value="0">0</option>
			    			<option value="1">1</option>
			    		</select>
		    		</div>
        		</div>

        		<div class="col col-lg-2">
        			<div class="form-group">
			    		<label>view</label>
			    		<select name="view" id="view" class="form-control">
			    			<option value="0">0</option>
			    			<option value="1">1</option>
			    		</select>
		    		</div>
        		</div>

        		<div class="col col-lg-2">
        			<div class="form-group">
			    		<label>insert</label>
			    		<select name="insert" id="insert" class="form-control">
			    			<option value="0">0</option>
			    			<option value="1">1</option>
			    		</select>
		    		</div>
        		</div>
		    </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>