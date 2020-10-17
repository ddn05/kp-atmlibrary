<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-4">Data Buku</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Tanggal Pinjam</th>
            <th>Anggota</th>
            <th>Judul Buku</th>
            <th>Tanggal Kembali</th>
            <th>Tanggal Pengembalian</th>
            <th>Denda</th>
            <th>Status</th>
            <th>Aksi</th>
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
                <td><?php echo $tran->nama?></td>
                <td><?php echo $tran->judul?></td>
                <td><?php echo $tran->tgl_kembali?></td>

                <td>
                <?php
                    if($tran->tgl_dikembalikan == ""){
                        echo "-";
                    }
                    else{
                        echo $tran->tgl_dikembalikan;
                    }
                ?>
                </td>

                <td>
                <?php
                    if($tran->tgl_dikembalikan == ""){
                        echo "-";
                    }
                    else{
                        echo $tran->denda;
                    }
                ?>
                </td>

                <td>
                <?php
                    if($tran->tgl_dikembalikan == ""){
                        echo "-";
                    }
                    else{
                        echo "Selesai";
                    }
                ?>
                </td>

                <td>
                <?php
                    if($tran->tgl_dikembalikan == ""){
                        echo anchor('transaksi/selesai/'.$tran->id_transaksi,'<div class="btn btn-success btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Transaksi Selesai"><i class="fas fa-check"></i></div>');?>
                        <a href="javascript:void(0);" class="btn btn-danger btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Hapus Transaksi" onclick="hapusdata(<?php echo $tran->id_transaksi;?>);"><i class="fas fa-trash"></i></a>
                        <?php
                    }
                    else{
                        echo "-";
                    }
                ?>
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

<script type="text/javascript">
    var url="<?php echo base_url();?>";
    function hapusdata(id){
       var r=confirm("Apakah anda yakin akan menghapus data ini ?")
        if (r==true)
          window.location = url+"transaksi/batal/"+id;
        else
          return false;
        } 
</script>