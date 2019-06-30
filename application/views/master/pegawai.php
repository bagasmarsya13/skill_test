<div class="content-wrapper" style="width:100%;">
  <div class="container-fluid">
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Data Pegawai
      </div>
            
      <div class="card-body">
        <div class="box-tools ">
          <button class="btn btn-primary btn-sm" style="float: right;" type="button" data-toggle="modal" data-target="#modalPegawai">Input data+</button>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Id Pegawai</th>
                <th>Nama Pegawai</th>
                <th>NIP</th>
                <th>Alamat</th>
                <th>Jabatan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Id Pegawai</th>
                <th>Nama Pegawai</th>
                <th>NIP</th>
                <th>Alamat</th>
                <th>Jabatan</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach ($pegawai as $data){?>
              <tr>
                <td><?php echo $data['id_pegawai']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['NIP']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['jabatan']; ?></td>
                <td>
                  <button type="button" data-toggle="modal" data-target="#modalEditPegawai<?php echo $data['id_pegawai']; ?>" class="btn btn-warning " onclick="">Edit</button>
			 		        <!-- <button class="btn btn-danger" onclick="hapus_bandara('<?php echo $data->id_bandara ?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button> -->
			 		        <a href="" class="btn btn-danger" onclick="return confirm('Anda Yakin Menghapus Data Ini ?')">Hapus</a>
                  </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
</div>

<?php foreach ($pegawai as $data){ ?>
<div class="modal fade" role="dialog" id="modalEditPegawai<?php echo $data['id_pegawai']; ?>" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data</h4>
      </div>
    <div class="modal-body">
      <form action="<?php echo base_url('')?>" method="post">
        <div class="form-group">
          <label>Id Pegawai</label>
          <input type="text" class="form-control" value="<?= $data['id_pegawai'];?>" id="id_pegawai" name="id_pegawai">
        </div>
        <div class="form-group">
          <label>Nama Pegawai</label>
          <input type="text" required class="form-control" value="<?= $data['nama'];?>" id="nama" name="nama">
        </div>
        <div class="form-group">
          <label>NIP</label>
          <input type="text" required class="form-control" value="<?= $data['alamat'];?>" id="NIP" name="NIP">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" required class="form-control" value="" id="alamat" name="alamat">
        </div>
        <div class="form-group">
          <label>Jabatan</label>
          <input type="text" required class="form-control" value="" id="jabatan" name="jabatan">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-info" value="tambah_pegawai" name="">
          <button class="btn btn-warning btn-fill" data-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php } ?>

<div class="modal fade" role="dialog" id="modalPegawai" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Data</h4>
      </div>
    <div class="modal-body">
      <form action="<?php echo base_url('tambahpegawai')?>" method="post">
        <div class="form-group">
          <label>Id Pegawai</label>
          <input type="text" class="form-control" value="" id="id_pegawai" name="id_pegawai">
        </div>
        <div class="form-group">
          <label>Nama Pegawai</label>
          <input type="text" required class="form-control" value="" id="nama" name="nama">
        </div>
        <div class="form-group">
          <label>NIP</label>
          <input type="text" required class="form-control" value="" id="NIP" name="NIP">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" required class="form-control" value="" id="alamat" name="alamat">
        </div>
        <div class="form-group">
          <label>Jabatan</label>
          <input type="text" required class="form-control" value="" id="jabatan" name="jabatan">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-info" value="tambah_pegawai" name="">
          <button class="btn btn-warning btn-fill" data-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>