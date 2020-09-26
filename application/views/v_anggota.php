<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-4">Data Anggota</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <!-- Button trigger modal -->
    <button class="btn btn-sm btn-primary" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-plus mr-2"></i>Tambah Anggota
    </button>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NO.</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            foreach($anggota as $ang) {
        ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $ang->nis?></td>
                <td><?php echo $ang->nama?></td>
                <td><?php echo $ang->jk?></td>
                <td><?php echo $ang->kelas?></td>
                <td><?php echo $ang->jurusan?></td>
                <td>
                <?php echo anchor('anggota/edit_anggota/'.$ang->nis,'<div class="btn btn-success btn-sm"><i class="fas fa-edit"></i></div>')?>
                <button class="btn btn-sm btn-danger" type="button" class="btn btn-primary" data-toggle="modal" data-target="#hapusModal"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
        <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open_multipart('anggota/input_data');?>
      <div class="form-group">
            <label for="inputNIS">NIS</label>
            <input type="text" class="form-control" id="nis" placeholder="" name="nis">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="" name="nama" require>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="jk">Jenis Kelamin</label>
                <select id="jk" class="form-control" name="jk">
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="kelas">Kelas</label>
                <select id="kelas" class="form-control" name="kelas">
                    <option>X</option>
                    <option>XI</option>
                    <option>XII</option>
                </select>
            </div>
            <div class="form-group col-md-5">
                <label for="jurusan">Jurusan</label>
                <select id="jurusan" class="form-control" name="jurusan">
                    <option>Pemasaran</option>
                    <option>Pariwisata</option>
                    <option>Peternakan</option>
                </select>
            </div>
          </div>
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>


<!-- Modal Delete Data-->
<div class="modal fade " id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Apakah anda yakin akan menghapus ?</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        note : data yang sudah dihapus tidak bisa dikembalikan kembali
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
        <!-- <button type="button" class="btn btn-primary">Iya</button> -->
        <?php echo anchor('anggota/hapus_anggota/'.$ang->nis,'<button type="button" class="btn btn-primary">Iya</button>'); ?>
      </div>
    </div>
  </div>
</div>

</div>