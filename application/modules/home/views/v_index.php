<div id="btn-users">
    <button type="button" onclick="btnUsers();" class="btn btn-danger btn-sm">users</button>
    <?php $this->load->view('v_index1'); ?>
</div> 

<div id="btn-level">
    <button type="button" onclick="btnLevel();" class="btn btn-danger btn-sm">level</button>
</div>        
<div class="wrapper">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">POLIGON</div>
        <div class="card-body">
          <form action="<?= base_url('home/kategori') ?>" method="post">
              <select name="kategori" class="form-control">
                <option value="0">All Kategory</option>
                <option value="1">Dosen</option>
                <option value="2">Mahasiswa</option>
                <option value="3">Tenaga Akademik</option>
              </select>
              <button type="submit">pilih</button>
          </form> <br />
          
          <input type="search" name="search" class="form-control" placeholder="Search .." autofocus>
          <br />
                            
          <table class="table table-hover">
          <?php if(!empty($list_biodata)) { ?>
          <?php foreach($list_biodata as $list_bio) : ?>
            <tr>
              <td>                                       
                <?php if ($list_bio->tipe == 'mahasiswa'): ?>
                  <span class="badge badge-primary">M</span>
                <?php endif ?>
                <?php if ($list_bio->tipe == 'dosen'): ?>
                  <span class="badge badge-secondary">D</span>
                <?php endif ?>
                <?php if ($list_bio->tipe == 'karyawan'): ?>
                  <span class="badge badge-success">TA</span>
                <?php endif ?>
              </td>
              <td>
                <?= $list_bio->nama_lengkap ?>
              </td>
              <td>
                <a style="cursor: pointer;" onclick="get_nama(
                    '<?= $list_bio->nik ?>',
                    '<?= $list_bio->nama_lengkap ?>')"
                  data-toggle="modal" data-target="#modalform">
                      <img width="20" src="<?php echo base_url() ?>assets/svg/si-glyph-triangle-right.svg"/>
                </a>
              </td>
            </tr>
            <?php endforeach; ?>
          <?php } else { ?>
              <tr><td><i>tidak ada data!</i></td></tr>
          <?php } ?>
          </table>
        </div> <br /> <!-- end card body -->

        <div class="card-footer">
            <?= $paging ?>
        </div> <!-- end card footer -->
      </div> <!-- end card -->
    </div> <!-- end col -->

    <div class="col-md-8">
      <?= $this->session->flashdata('alert') ?>
      <div class="card">
        <div class="card-header">ALL MEMBERS</div>
          <div class="card-body">
            <div class="col col-md-4">
              <input type="search" name="search" class="form-control" placeholder="Search ..">
            </div> <br />
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                  <th scope="col">Level</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php if(!empty($user)) { ?>
              <?php $i = 1; ?>
              <?php foreach($user as $u): ?>
                <tr>
                  <td scope="row"><?= $i++; ?></td>
                  <td><?= $u->user ?></td>
                  <td><input class="members" type="password" value="<?= $u->password ?>"></td>
                  <td><?= $u->level ?></td>
                  <td class="<?=$u->sts?>"><?= $u->sts ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  <td>
                    <?php if($u->status == '0'): ?>
                    <a class="members" href="<?= base_url() ?>home/aktif_user/<?= $u->kd_user ?>">
                      <img width="18" src="<?php echo base_url() ?>assets/svg/si-glyph-checked.svg"/>
                    </a>
                  <?php endif; ?>
                  <?php if($u->status == '1'): ?>
                    <a class="members" href="<?= base_url() ?>home/nonaktif_user/<?= $u->kd_user ?>">
                      <img width="18" src="<?php echo base_url() ?>assets/svg/si-glyph-delete.svg"/>
                    </a>
                  <?php endif; ?>
                    <a class="members" href="#">
                      <img width="18" src="<?php echo base_url() ?>assets/svg/si-glyph-arrow-circle-rycycle.svg"/>
                    </a>
                    <a class="members" href="<?= base_url() ?>home/delete_user/<?= $u->kd_user ?>" onclick="return confirm('Apakah Data Akan Dihapus?');">
                      <img width="18" src="<?php echo base_url() ?>assets/svg/si-glyph-trash.svg"/>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php } else { ?>
                <tr><td colspan="6" align="center"><i>tidak ada data!</i></td></tr>
            <?php } ?>
              </tbody>
            </table>
          </div>
          </div> <!-- end card body -->

          <div class="card-footer">
            
          </div> <!-- end card footer -->
        </div> <!-- end card -->
    </div> <!-- end col -->
  </div> <!-- end row -->

<!-- Modal form create user -->
<div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 style="color: #fff" class="modal-title" id="exampleModalLabel">Buat User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?= base_url('pro-registrasi')?>" method="post">
            <div class="form-group">
              <input type="hidden" name="nik" id="nik">
              <input type="text" class="form-control" id="nama_lengkap" disabled>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off" required>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="form-group">
              <select name="lv" class="form-control">
                <option>Level</option>
                <?php foreach ($level as $lv) : ?>
                    <option value="<?= $lv->id_level?>">
                      <?= $lv->level?>
                    </option>
                <?php endforeach; ?>
              </select>
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

</div> <!-- end wrapper -->  
                                   