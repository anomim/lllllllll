
  <section class="content-header">
    <h1>
      Dashboard
      <small>- Halaman Depan</small>
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?=$kelas->num_rows()?></h3>
            <p>Kelas</p>
          </div>
          <div class="icon">
            <i class="fa fa-building-o"></i>
          </div>
          <a href="<?=site_url('admin/kelas')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?=$guru->num_rows()?><sup style="font-size: 20px"></sup></h3>
            <p>Guru</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="<?=site_url('admin/guru')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3><?=$siswa->num_rows()?></h3>
            <p>Siswa</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="<?=site_url('admin/siswa')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3><?=$absensi->num_rows()?></h3>
            <p>Absensi hari ini</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="<?=site_url('admin/rekap')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>

    <div class="row">
    </div>
  </section>
  

