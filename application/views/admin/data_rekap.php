
  <section class="content-header">
    <h1>
      Rekap Absensi
      <small> - Data Rekap Absensi Siswa</small>
    </h1>
  </section>

  <section class="content">
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Data Rekap Absensi</h3>
              <div class="pull-right">
                  <a href="#" class="btn btn-primary btn-flat">
                    Cetak
                  </a>
              </div>
          </div>
          <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="table1">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Id Siswa</th>
                          <th>Id Kelas</th>
                          <th>Jam Absen</th>
                          <th>Tgl Absen</th>
                          <th>Status</th>
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
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
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

  
