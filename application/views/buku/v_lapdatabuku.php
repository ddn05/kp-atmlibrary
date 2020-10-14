<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-4">Laporan Data Buku</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <a href="<?php echo base_url();?>lap_buku" class="btn btn-success btn-sm" target="_blank"><i class="fas fa-print mr-2"></i>Cetak</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Kode</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Stok</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            foreach($buku as $buk) {
        ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $buk->kode?></td>
                <td><?php echo $buk->judul?></td>
                <td><?php echo $buk->penulis?></td>
                <td><?php echo $buk->penerbit?></td>
                <td><?php echo $buk->tahun?></td>
                <td><?php echo $buk->stok?></td>
            </tr>
        <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->