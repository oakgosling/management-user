<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<div class="span12">
    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">POLIGON</div>
                    <div class="card-body">
                        <select name="" class="form-control">
                            <option>All Kategory</option>
                            <option value="">Dosen</option>
                            <option value="">Mahasiswa</option>
                            <option value="">Tenaga Akademik</option>
                        </select><br />
                        
                        <div>
                            <table>
                                <tr>
                                    <td><span class="badge badge-primary">M</span>&nbsp;&nbsp;Troy Mokoagow</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td><a href="" data-toggle="modal" data-target="#modalform"><img width="20" src="<?php echo base_url() ?>assets/svg/si-glyph-triangle-right.svg"/></a></td>
                                </tr>
                                <tr>
                                    <td><span class="badge badge-info">D</span>&nbsp;&nbsp;Ismail Mohidin</td>
                                </tr>
                                <tr>
                                    <td><span class="badge badge-success">TA</span>&nbsp;&nbsp;Gilang Suleman</td>
                                </tr>
                            </table>
                        </div>


                                <!-- <?php foreach ($usr as $c) { ?>
                                <form action="cek" method="post">
                                <div class="row-fluid">
                                    <div class="span4">
                                        <div class="media">
                                            <a class="media-avatar pull-left" href="#">
                                                <img src="<?= base_url() ?>assets/images/poligon.png">
                                            </a>
                                            <div class="media-body">
                                                <h2 class="media-title">
                                                   <?= $c->user?>
                                                </h2>
                                                <h6>
                                                   <?= $c->level?>
                                                </h6>
                                                <br>
                                                <p>
                                                    <small class="muted"><input type="password" value="<?= $c->password?>" class="span6"></small><br>
                                                    <small>
                                                    <select name="status" id="" class="span6">
                                                    <?php if ($c->status >= 1) {
                                                        echo '<option value="">Aktif</option>';
                                                    }else{
                                                        echo '<option value="">Non Aktif</option>';
                                                        }
                                                    ?>
                                                    <option value="">-</option>
                                                    <option value="1">Aktif</option>
                                                    <option value="0">Non Aktif</option>
                                                    </select>
                                                    </small>
                                                </p>
                                                <div class="media-option btn-group shaded-icon">
                                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">save</button>
                                                    <button class="btn btn-small">
                                                    <a href="<?= base_url('home/dlt/'.$c->kd_user)?>" class="btn btn-danger m-t-15 waves-effect">x</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    <?php } ?> -->
                    </div> <br /> <!-- end card body -->
                </div> <!-- end card -->

        </div> <!-- end col -->

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ALL MEMBERS</div>
                    <div class="card-body">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Level</th>
                              <th scope="col">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Troy Mokoagow</td>
                              <td>Mahasiswa</td>
                              <td><a href=""><img width="20" src="<?php echo base_url() ?>assets/svg/si-glyph-trash.svg"/></a></td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Ismail Mohidin</td>
                              <td>Dosen</td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Gilang Suleman</td>
                              <td>Tenaga Akademik</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end content -->
</div> <!-- end span -->


<!-- Modal -->
<div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="pro-registrasi" method="post">
            <div class="form-group">
              <select name="kd" id="cari_nama" class="form-control">
                <option>Nama Lengkap</option>
                <option>fss</option>
                <option>fsfs</option>
                <option>fsfs</option>
                <option>fsf</option>
                <option>fsfs</option>
                <option>fsf</option>
                <?php foreach($nUsr as $cc) : ?>
                    <option value="<?= $cc->nik?>">
                        <?= $cc->nama_lengkap?> | <?= $cc->tipe?>
                    </option>
                <?php endforeach; ?>
              </select>
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
                <?php foreach ($lvl as $cx) : ?>
                    <option value="<?= $cx->id_level?>">
                      <?= $cx->level?>
                    </option>
                <?php endforeach; ?>
              </select>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url();?>assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
        $(document).ready(function() { 
            $("#cari_nama").select2({
                    placeholder: "pilih nama",
                    allowClear: true
             }); 
        });
</script>
                                   