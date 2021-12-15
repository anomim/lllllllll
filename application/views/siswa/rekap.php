
  <section class="content-header">
    <h1>
      Rekap Absensi
      <small> - Data Rekap Absensi Siswa</small>
    </h1>
  </section>

  <section class="content">
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Data Rekap Absensi - <?=$siswa->nama?> - <?=$siswa->nama_kelas?></h3>
          </div>
          <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="table1">
                  <thead>
                      <tr>
                          <th width="50px">#</th>
                          <th width="50px">Presensi</th>
                          <th class="text-center">Tanggal</th>
                          <th class="text-center">Waktu Presensi</th>
                          <th class="text-center">Keterangan</th>
                          <th width="50px">Foto</th>
                          <th class="text-center" width="80px">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1; 
                      foreach($row->result() as $key => $data){ 
                            $dt = explode(' ', $data->waktu);
                            $date = explode('-', $dt[0]);
                            $time = explode(':', $dt[1]);
                        ?>
                      <tr>
                          <td><?=$no++;?></td>
                          <td><?=$data->id_jadwal[0] == 'P' ? 'Pagi' : 'Siang' ?></td>
                          <td class="text-center"><?=$date[2]."/".$date[1]."/".$date[0]?></td>
                          <td class="text-center"><?=$time[0].":".$time[1]?> WIB</td>
                          <td class="text-center"><?=$data->keterangan?></td>
                          <?php //$data->foto == null ? "Tidak ada" : "Ada" ?>
                          <td class="text-center" ><img src="<?=base_url('uploads/absensi/'.$data->foto)?>" alt="" width="80px"></td>
                          <td class="text-center">
                            <?php if($data->foto !=null ){ ?>
                            <a href="<?=site_url('siswa/rekapdetail/'.$data->id_absensi)?>" target="blank">
                                <button class="btn btn-info btn-xs">
                                    <i class="fa fa-info-circle"></i>&nbsp; Detail
                                </button>
                            </a>
                            <?php } ?>
                            <?php if($data->foto ==null ){ ?>
                            <a onclick="func()">
                                <button class="btn btn-info btn-xs">
                                    <i class="fa fa-info-circle"></i>&nbsp; Detail
                                </button>
                            </a>
                            <?php } ?>
                          </td>
                      </tr>
                      <?php } ?>
                  </tbody>
              </table>
          </div>
      </div>
  </section>

  <script>
    function func(){
        alert('Tidak ada foto yang terlampir');
    }
  </script>

  
