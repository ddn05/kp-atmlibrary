<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-4"><strong>Data Pengembalian</strong></h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-body">
  <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "berhasil"){
                echo "<div class='alert alert-success'>Pengembalian Buku Berhasil.</div>";
            }
            if($_GET['pesan'] == "gagal"){
                echo "<div class='alert alert-danger'>Pengembalian Buku Tidak Berhasil.</div>";
            }
        }
    ?>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Tanggal Pinjam</th>
            <th>NIS</th>
            <th>Anggota</th>
            <th>Judul Buku</th>
            <th>Tanggal Pengembalian</th>
            <th>Denda</th>
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
                <td><?php echo date('d/m/Y',strtotime($tran->tgl_pinjam)); ?></td>
                <td><?php echo $tran->nis?></td>
                <td><?php echo $tran->nama?></td>
                <td><?php echo $tran->judul?></td>
                <td>
                  <?php
                    if($tran->status == ""){
                      echo "-";
                    }
                    else{
                      echo date('d/m/Y',strtotime($tran->tgl_dikembalikan));
                    }
                  ?>
                </td>
                <td><?php echo "Rp. ".number_format($tran->total_denda).",-"?></td>
                
                <td><?php echo $tran->status?></td>

            </tr>
        <?php }?>
        </tbody>
      </table>
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