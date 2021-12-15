
  <section class="content-header">
    <h1>
      Siswa
      <small> - Data Siswa Belajar</small>
    </h1>
  </section>

  <section class="content">
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Data Siswa</h3>
              <div class="pull-right">
                  <a href="<?=site_url('admin/add_siswa')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Create
                  </a>
              </div>
          </div>
          <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="table1">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Id Absen</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>Email</th>
                          <th>No Hp</th>
                          <th class="text-center">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1; 
                      foreach($row->result() as $key => $data){ ?>
                      <tr>
                          <td><?=$no++;?></td>
                          <td></td>
                          <td><?=$data->nama?></td>
                          <td><?=$data->kelamin?></td>
                          <td><?=$data->alamat?></td>
                          <td><?=$data->email?></td>
                          <td></td>
                          <td class="text-center" width="150px">
                              <form action="<?=site_url('admin/del_siswa')?>" method="post">
                                <a href="<?=site_url('admin/edit_siswa/'.$data->nis)?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i> Update
                                </a>
                                <input type="hidden" name="nis" value="<?=$data->nis?>">
                                <button onclick="return confirm('Apakah anda yakin, menghapus data ?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Hapus
                                </button>
                            </form>
                          </td>
                      </tr>
                      <?php } ?>
                  </tbody>
              </table>
          </div>
      </div>
  </section>
