            <div class="content-wrapper" style="width:100%;">
            <div class="container-fluid">
            <div class="card mb-5">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Jabatan</div>

          <div class="card-body">
          <div class="box-tools ">
                <button class="btn btn-primary btn-sm" style="float: right;" type="button" data-toggle="modal" data-target="#modalJabatan">Input data+</button>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>id_jabatan</th>
                    <th>Nama_Jabatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>id_jabatan</th>
                    <th>Nama_Jabatan</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php foreach ($jabatan as $data){?>
                  <tr>
                  <td><?php echo $data['id_jabatan']; ?></td>
                  <td><?php echo $data['nama_jabatan']; ?></td>
                  <td>
                    <button type="button" data-toggle="modal" data-target="#modal-skin" class="btn btn-warning " onclick="">Edit</button>
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

    <div class="modal fade" id="modalJabatan" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Data</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('tambahjabatan')?>" method="post">
			<div class="form-group">
				<label>Id Jabatan</label>
				<input type="text" class="form-control" value="" id="id_jabatan" name="id_jabatan">
			</div>
			<div class="form-group">
				<label>Nama Jabatan</label>
				<input type="text" required class="form-control" value="" id="id_jabatan" name="nama_jabatan">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-info" value="tambah_jabatan" name="">
				<button class="btn btn-warning btn-fill" data-dismiss="modal">Batal</button>
			</div>
    </div>
    </form>
	</div>
</div>