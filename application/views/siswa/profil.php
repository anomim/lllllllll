
  <section class="content-header">
    <h1>
      Siswa
      <small> - Profil Siswa</small>
    </h1>
  </section>

  <section class="content">
      
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" href="#profil" role="tab" data-toggle="tab">Profil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#menu1" role="tab" data-toggle="tab">Menu 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#menu2" role="tab" data-toggle="tab">Menu 2</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="profil">
      
      <div class="box">
          <div class="box-header">
              
            
              <h3 class="box-title">Data Siswa</h3>
              <div class="pull-right">
                  <!-- <a href="<?=site_url('admin/siswa')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                  </a> -->
              </div>
          </div>
          <div class="box-body">
              <div class="row">
                  <div class="col-md-4 col-md-offset-4">
                    
                    <div class="form-group ">
                        <label id="nis">NIS *</label>
                        <input type="text" name="nis" id="nis" class="form-control" value="<?=$row->nis ?>" readonly>

                    </div>
                    <div class="form-group">
                        <label id="nama">Nama *</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?=$row->nama ?>" readonly>

                    </div>
                    <div class="form-group">
                        <label id="email">E-mail *</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?=$row->email ?>" readonly>

                    </div>
                    <div class="form-group">
                        <label id="kelas">Kelas *</label>
                        <input type="text" name="kelas" id="kelas" class="form-control" value="<?=$row->nama_kelas ?>" readonly>

                    <div class="form-group">
                        <label id="tgl_lahir">Tanggal Lahir *</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?=$row->tgl_lahir ?>" readonly>

                    </div>
                    <div class="form-group ">
                        <label id="kelamin">L/P *</label>
                        <input type="text" name="kelas" id="kelas" class="form-control" value="<?=$row->kelamin == 'L' ? 'Laki-laki' : 'Perempuan' ?>" readonly>

                    </div>
                    
                    
                    <div class="form-group">
                    <a href="<?=site_url('siswa/edit/'.$row->nis)?>">
                        <button type="submit" class="btn btn-success btn-flat col-md-12">
                            <i class="fa fa-pencil"> Edit</i> 
                        </button>
                    </a>
                    </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
      
  </div>
  <div role="tabpanel" class="tab-pane fade" id="menu1">Menu 1 Kosong</div>
  <div role="tabpanel" class="tab-pane fade" id="menu2">Menu 2 Kosong</div>
</div>


  </section>
  
