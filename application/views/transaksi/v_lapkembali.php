<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-4"><strong>Laporan Data Pengembalian</strong></h1>

<form action="<?php echo base_url().'transaksi/lapkembali'?>" method="post">
  <div class="form-group col-md-6">
    <label>Dari Tanggal</label>
    <input type="date" class="form-control" id="dari" placeholder="" name="dari" value="<?php echo set_value('dari');?>">
    <?php echo form_error('dari')?>
  </div>
  <div class="form-group col-md-6">
    <label>Sampai Tanggal</label>
    <input type="date" class="form-control" id="sampai" placeholder="" name="sampai" value="<?php echo set_value('sampai');?>">
    <?php echo form_error('sampai')?>
  </div>
    <button class="btn btn-primary btn-sm ml-3" type="submit">Cari</button>
</form>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-2">
  <div class="card-body">
  <a href="<?php echo base_url();?>lap_anggota" class="btn btn-success btn-sm mb-2" target="_blank"><i class="fas fa-print mr-2"></i>Cetak</a>

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