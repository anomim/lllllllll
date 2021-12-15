
  <section class="content-header">
    <h1>
      Siswa
      <small> - Data Siswa Belajar</small>
    </h1>
  </section>

  <section class="content">
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Edit Data Siswa</h3>
              <div class="pull-right">
                  <a href="<?=site_url('siswa')?>" class="btn btn-warning btn-flat">
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
                                <label id="nis">NIS *</label>
                                <input type="text" name="nis" id="nis" class="form-control" value="<?=(!empty($this->input->post('nis'))) ? $this->input->post('nis') : $row->nis ?>" readonly>
                                <span class="help-block"><?=form_error('nis')?></span> 
                          </div>
                          <div class="form-group <?=form_error('nama') ? 'has-error' : null?>">
                                <label id="nama">Nama *</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="<?=(!empty($this->input->post('nama'))) ? $this->input->post('nama') : $row->nama ?>">
                                <span class="help-block"><?=form_error('nama')?></span> 
                          </div>
                          <div class="form-group <?=form_error('email') ? 'has-error' : null?>">
                                <label id="email">E-mail *</label>
                                <input type="email" name="email" id="email" class="form-control" value="<?=(!empty($this->input->post('email'))) ? $this->input->post('email') : $row->email ?>">
                                <span class="help-block"><?=form_error('email')?></span> 
                          </div>
                          <div class="form-group <?=form_error('id_kelas') ? 'has-error' : null?>">
                                <label id="id_kelas">Kelas *</label>
                                <select name="id_kelas" id="id_kelas" class="form-control">
                                    <option value="">Pilih Kelas</option>
                                    <?php foreach($kelas->result() as $key=>$kel){ ?>
                                    <option value="<?=$kel->id_kelas?>" <?=$this->input->post('id_kelas') == null && $row->id_kelas == $kel->id_kelas ? 'selected' : null ?> <?=$this->input->post('id_kelas') == $kel->id_kelas ? 'selected' : null ?>>
                                        <?=$kel->nama_kelas?>
                                    </option>
                                    <?php } ?>
                                </select>
                                <span class="help-block"><?=form_error('id_kelas')?></span> 
                          </div>
                          <div class="form-group <?=form_error('tgl_lahir') ? 'has-error' : null?>">
                                <label id="tgl_lahir">Tanggal Lahir *</label>
                                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?=(!empty($this->input->post('tgl_lahir'))) ? $this->input->post('tgl_lahir') : $row->tgl_lahir ?>">
                                <span class="help-block"><?=form_error('tgl_lahir')?></span> 
                          </div>
                          <div class="form-group <?=form_error('kelamin') ? 'has-error' : null?>">
                                <label id="kelamin">Kelamin *</label>
                                <select name="kelamin" id="kelamin" class="form-control">
                                    <option value="">Pilih Kelamin</option>
                                    <option value="L" <?=$row->kelamin == 'L' ? 'selected' : null ?>>Laki - laki</option>
                                    <option value="P" <?=$row->kelamin == 'P' ? 'selected' : null ?>>Perempuan</option>
                                </select>
                                <span class="help-block"><?=form_error('kelamin')?></span> 
                          </div>
                          <div class="form-group <?=form_error('agama') ? 'has-error' : null?>">
                                <label id="agama">Agama *</label>
                                <input type="text" name="agama" id="agama" class="form-control" value="<?=(!empty($this->input->post('agama'))) ? $this->input->post('agama') : $row->agama ?>">
                                <span class="help-block"><?=form_error('agama')?></span> 
                          </div>
                          <div class="form-group <?=form_error('alamat') ? 'has-error' : null?>">
                                <label id="alamat">Alamat *</label>
                                <textarea name="alamat" id="alamat" class="form-control"><?=(!empty($this->input->post('alamat'))) ? $this->input->post('alamat') : $row->alamat ?></textarea>
                                <span class="help-block"><?=form_error('alamat')?></span> 
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
