
  <section class="content-header">
    <h1>
      Absensi
      <small> - Absensi Siswa</small>
    </h1>
  </section>
  <section class="content">
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Absensi hari ini <?=date('d')."/".date('m')."/".date('Y')?></h3>
          </div>
          <div class="box-body">
              <div class="row">
                  <div class="col-md-4 col-md-offset-4"> 
                    <h3 class="box-title text-center text-white" style="background-color:#e74c3c;padding:6px;border-radius:4px;color:#fff">
                        <i class="fa fa-close"></i> 
                        <?php $time = explode(':', $row->open);?>
                        Maaf Presensi Belum Dibuka, Akan dibuka pukul <?=$time[0].":".$time[1]?> WIB
                    </h3>
                    <br>  
                  </div>
              </div>
          </div>
      </div>
  </section>

