<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-4">Data Petugas</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  
  <?php if($this->session->flashdata('success')) { ?>
    <div class="alert alert-success" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>
        <span style="text-align:left;"><?php echo $this->session->flashdata('success');?></span>
    </div>
  <?php } ?>

  <?php if($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger" role="alert">  
        <button class="close" type="button" data-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>
        <span style="text-align:left;"><?php echo $this->session->flashdata('error');?></span>
    </div>
  <?php } ?>

  <!-- Button trigger modal -->
    <button class="btn btn-sm btn-primary" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      <i class="fas fa-plus mr-2"></i>Tambah Petugas
    </button>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NO.</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            foreach($petugas as $pet) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $pet->nama ?></td>
                <td><?php echo $pet->username ?></td>
                <td><input type="password" class="form-control" id="password" placeholder=""  value="<?php echo $pet->password?>" name="password" readonly></td>
                <td>
                    <!-- <?php echo anchor('petugas/edit_petugas/'.$pet->id,'<div class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-edit"></i></div>')?> -->
                    <a href="javascript:void(0);" class="btn btn-danger btn-sm" onclick="hapusdata(<?php echo $pet->id;?>);"><i class="fas fa-trash mr-2"></i>Hapus</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php echo form_open_multipart('petugas/input_petugas');?>
      <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="" name="nama" require>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="" name="username" require>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="" name="password" require>
        </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
    var url="<?php echo base_url();?>";
    function hapusdata(id){
       var r=confirm("Apakah anda yakin akan menghapus data ini ?")
        if (r==true)
          window.location = url+"petugas/hapus_petugas/"+id;
        else
          return false;
        } 
</script>