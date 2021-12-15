
  <section class="content-header">
    <h1>
      Kelas
      <small> - Data Kelas Mengajar</small>
    </h1>
  </section>

  <section class="content">
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Edit Data Kelas</h3>
              <div class="pull-right">
                  <a href="<?=site_url('admin/kelas')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                  </a>
              </div>
          </div>
          <div class="box-body">
              <div class="row">
                  <div class="col-md-4 col-md-offset-4">
                      <?php //echo validation_errors(); ?>
                      <form action="" method="post">
                          <div class="form-group <?=form_error('nama_kelas') ? 'has-error' : null?>">
                                <label id="nama_kelas">Nama Kelas </label>
                                <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" value="<?=$row->nama_kelas?>">
                                <input type="hidden" name="id_kelas" value="<?=$row->id_kelas?>">
                                <span class="help-block"><?=form_error('nama_kelas')?></span> 
                          </div>
                          <div class="form-group <?=form_error('nama_kelas') ? 'has-error' : null?>">
                                <label id="nama_kelas">Materi </label>
                                <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" value="<?=set_value('nama_kelas')?>">
                                <span class="help-block"><?=form_error('nama_kelas')?></span> 
                          </div>
                          <div class="form-group <?=form_error('nama_kelas') ? 'has-error' : null?>">
                                <label id="nama_kelas">Awal Sesi </label>
                                <input type="time" name="nama_kelas" id="nama_kelas" class="form-control" value="<?=set_value('nama_kelas')?>">
                                <span class="help-block"><?=form_error('nama_kelas')?></span> 
                          </div>
                          <div class="form-group <?=form_error('nama_kelas') ? 'has-error' : null?>">
                                <label id="nama_kelas">Akhir Sesi </label>
                                <input type="time" name="nama_kelas" id="nama_kelas" class="form-control" value="<?=set_value('nama_kelas')?>">
                                <span class="help-block"><?=form_error('nama_kelas')?></span> 
                          </div>
                          <div class="form-group <?=form_error('nama_kelas') ? 'has-error' : null?>">
                                <label id="nama_kelas">Ruangan </label>
                                <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" value="<?=set_value('nama_kelas')?>">
                                <span class="help-block"><?=form_error('nama_kelas')?></span> 
                          </div>
                          <div class="form-group">
                              <button type="submit" class="btn btn-success btn-flat">
                                 <i class="fa fa-paper-plane"> Save</i> 
                                </button>
                              <button type="reset" class="btn btn-flat">
                                  Reset
                              </button>
                          </div>

                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
