
  <section class="content-header">
    <h1>
      Data Rekap
      <small> - Data Rekap Detail</small>
    </h1>
  </section>

  <section class="content">
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Data Rekap Detail</h3>
          </div>
          <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="form-group">
                        <label id="nip">Nama</label>
                        <input type="text" value="<?=$row->nama?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor Induk Siswa</label>
                        <input type="text" value="<?=$row->nis?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Presensi</label>
                        <input type="text" value="<?=$row->id_jadwal[0] == 'P' ? 'Pagi - ' : 'Sore - '?> <?=$row->id_jadwal[7].$row->id_jadwal[8]."/".$row->id_jadwal[5].$row->id_jadwal[6]."/".$row->id_jadwal[1].$row->id_jadwal[2].$row->id_jadwal[3].$row->id_jadwal[4]?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label id="nip">Keterangan</label>
                        <input type="text" value="<?=ucfirst($row->keterangan)?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label id="nip">Lampiran</label>
                    </div>
                </div>
                
                    <?php if($row->foto != null){ ?>
                        <div class="col-md-8 col-md-offset-2">
                        <img src="<?=base_url('uploads/absensi/'.$row->foto)?>" width="100%">
                        </div>
                    <?php }?>

                    <?php if($row->foto == null){ ?>
                        <div class="col-md-4 col-md-offset-4">
                        <div class="form-group">
                            <input type="text" value="Tidak Ada Foto" class="form-control" readonly>
                        </div>
                        </div>
                    <?php }?>
                
            </div>
          </div>
      </div>
  </section>
