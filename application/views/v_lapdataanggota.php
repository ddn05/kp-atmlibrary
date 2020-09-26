<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-4">Laporan Data Anggota</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <!-- Button trigger modal -->
    <button class="btn btn-sm btn-success" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-print mr-2"></i>Cetak
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
            </tr>
        <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->