<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-4">Data Ebook | Inspirasi</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
</div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NO.</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Cover</th>
            <!-- <th>Aksi</th> -->
          </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            foreach($ebook as $eb) {
        ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $eb->judul?></td>
                <td><?php echo $eb->penulis?></td>
                <td><?php echo $eb->kategori?></td>
                <td>
                    <img src="<?php echo base_url('uploads/img/'.$eb->cover);?>" width="100px" height="100px">
                </td>
            </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
</div>