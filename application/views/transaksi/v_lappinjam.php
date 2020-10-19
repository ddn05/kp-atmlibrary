<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-4"><strong>Data Peminjaman</strong></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Tanggal Pinjam</th>
            <th>Max. Tanggal Kembali</th>
            <th>NIS</th>
            <th>Anggota</th>
            <th>Judul</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            foreach($transaksi as $tran) {
        ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $tran->tgl_pinjam?></td>
                <td><?php echo $tran->tgl_kembali?></td>
                <td><?php echo $tran->nis?></td>
                <td><?php echo $tran->nama?></td>
                <td><?php echo $tran->judul?></td>
                <td>Belum dikembalikan</td>
            <?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->