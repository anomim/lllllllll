
  <section class="content-header">
    <h1>
      Siswa
      <small> - Data Siswa Belajar</small>
    </h1>
  </section>

  <section class="content">
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Tambah Data Siswa</h3>
              <div class="pull-right">
                  <a href="<?=site_url('admin/siswa')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                  </a>
              </div>
          </div>
          <div class="box-body">
              <div class="row">
                  <div class="col-md-4 col-md-offset-4">
                      <?php //echo validation_errors(); ?>
                      <form action="" method="post">
                          <div class="form-group <?=form_error('nis') ? 'has-error' : null?>">
                                <label id="nis">Id Absen </label>
                                <input type="text" name="nis" id="nis" class="form-control" value="<?=set_value('nis')?>">
                                <span class="help-block"><?=form_error('nis')?></span> 
                          </div>
                          <div class="form-group <?=form_error('nama') ? 'has-error' : null?>">
                                <label id="nama">Nama </label>
                                <input type="text" name="nama" id="nama" class="form-control" value="<?=set_value('nama')?>">
                                <span class="help-block"><?=form_error('nama')?></span> 
                          </div>
                          <div class="form-group <?=form_error('kelamin') ? 'has-error' : null?>">
                                <label id="kelamin">Jenis Kelamin </label>
                                <select name="kelamin" id="kelamin" class="form-control">
                                    <option value="">Pilih Kelamin</option>
                                    <option value="L" <?=set_value('kelamin') == 'L' ? 'selected' : null ?>>Laki - laki</option>
                                    <option value="P" <?=set_value('kelamin') == 'P' ? 'selected' : null ?>>Perempuan</option>
                                </select>
                                <span class="help-block"><?=form_error('kelamin')?></span> 
                          </div>
                          <div class="form-group <?=form_error('alamat') ? 'has-error' : null?>">
                                <label id="alamat">Alamat </label>
                                <textarea name="alamat" id="alamat" class="form-control"><?=set_value('alamat')?></textarea>
                                <span class="help-block"><?=form_error('alamat')?></span> 
                          </div>
                          <div class="form-group <?=form_error('email') ? 'has-error' : null?>">
                                <label id="email">E-mail </label>
                                <input type="email" name="email" id="email" class="form-control" value="<?=set_value('email')?>">
                                <span class="help-block"><?=form_error('email')?></span> 
                          </div>
                          <div class="form-group <?=form_error('nama') ? 'has-error' : null?>">
                                <label id="nama">No Hp </label>
                                <input type="text" name="" id="" class="form-control" value="<?=set_value('')?>">
                                <span class="help-block"><?=form_error('')?></span> 
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
