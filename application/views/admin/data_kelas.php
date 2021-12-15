
  <section class="content-header">
    <h1>
      Kelas
      <small> - Data Kelas Mengajar</small>
    </h1>
  </section>

  <section class="content">
      <div class="box">
          <div class="box-header">
              <h3 class="box-title">Data Kelas</h3>
              <div class="pull-right">
                  <a href="<?=site_url('admin/add_kelas')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Create
                  </a>
              </div>
          </div>
          <div class="box-body table-responsive">
              <table class="table table-bordered table-striped" id="table1">
                  <thead>
                      <tr>
                          <th width="40px">No</th>
                          <th>Kelas</th>
                          <th>Materi</th>
                          <th>Awal Sesi</th>
                          <th>Akhir Sesi</th>
                          <th>Ruangan</th>
                          <th class="text-center">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1; 
                      foreach($row->result() as $key => $data){ ?>
                      <tr>
                          <td><?=$no++;?></td>
                          <td><?=$data->nama_kelas?></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td class="text-center" width="200px">
                              <form action="<?=site_url('admin/del_kelas')?>" method="post">
                                <a href="<?=site_url('admin/edit_kelas/'.$data->id_kelas)?>" class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i> Update
                                </a>
                                <input type="hidden" name="id_kelas" value="<?=$data->id_kelas?>">
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
