
  <section class="content-header">
    <h1>
      Absensi
      <small> - Absensi Siswa</small>
    </h1>
  </section>
  <?php
  if($jadwal->num_rows() > 0){ ?>
  <section class="content">
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Tanggal : <?=date('d')."/".date('m')."/".date('Y')?></h3>
          </div>
          <div class="box-body">
              <div class="row">
                  <div class="col-md-4 col-md-offset-4">
                      <?php echo form_open_multipart('siswa/add_absensi') ?>
                          <div class="form-group">
                            <h4><b>Waktu Presensi</b></h4>
                            <div class="radio">
                                <label id="waktupagi">
                                <input type="radio" name="waktu" id="waktupagi" value="pagi" checked="">
                                    Pagi
                                </label>
                            </div>
                            <div class="radio">
                                <label id="waktusiang">
                                <input type="radio" name="waktu" id="waktusiang" value="siang">
                                    Siang
                                </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <h4><b>Keterangan</b></h4>
                            <div class="radio">
                                <label id="hadir">
                                <input type="radio" name="keterangan" id="hadir" value="hadir" checked="">
                                    Hadir
                                </label>
                            </div>
                            <div class="radio">
                                <label id="sakit">
                                <input type="radio" name="keterangan" id="sakit" value="sakit">
                                    Sakit
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" name="keterangan" id="izin" value="izin">
                                    Izin
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" name="keterangan" id="alfa" value="alfa">
                                    Tanpa Keterangan
                                </label>
                            </div>
                          </div>
                          <div class="form-group">
                            <input type="hidden" name="date" value="<?=date('Y').date('m').date('d')?>">
                            <input type="hidden" name="time" value="<?=date('h:i:sa')?>">
                            <input type="hidden" name="id_kelas" value="<?=$row->id_kelas?>">
                            <input type="hidden" name="nis" value="<?=$this->fungsi->user_login()->no_induk?>">
                            <lebel id="foto"><b>Lampirkan Foto</b></lebel> <small>(optional)</small>
                            <input type="file" name="foto" id="foto" class="form-control">
                          </div>
                          <div class="form-group">
                          <br>
                              <button type="submit" name="pagi" class="btn btn-info btn-flat">
                                 <i class="fa fa-paper-plane"> Kirim</i> 
                              </button>
                              <button type="reset" class="btn btn-flat pull-right">
                                  Reset
                              </button>
                          </div>
                      <?php echo form_close(); ?>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <?php }else{?>
    <section class="content">
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Tanggal : <?=date('d')."/".date('m')."/".date('Y')?></h3>
          </div>
          <div class="box-body">
              <div class="row">
                  <div class="col-md-4 col-md-offset-4">
                    <h3 class="box-title text-center text-white" style="background-color:#e74c3c;padding:6px;border-radius:4px;color:#fff">
                        Maaf, Tidak ada Jadwal Absensi.
                    </h3>
                  </div>
              </div>
          </div>
      </div>
    </section>
  <?php } ?>
