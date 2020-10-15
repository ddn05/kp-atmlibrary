<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 mb-4">Data Ebook</h1>

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
      <i class="fas fa-plus mr-2"></i>Tambah Ebook
    </button>
    <a href="<?php echo base_url();?>lap_ebook" class="btn btn-success btn-sm ml-2" target="_blank"><i class="fas fa-print mr-2"></i>Cetak</a>
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
            <th>Aksi</th>
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
                <td>
                  <?php echo anchor('ebook/edit_ebook/'.$eb->id,'<div class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Data"><i class="fas fa-edit"></i></div>')?>
                  <a href="javascript:void(0);" class="btn btn-danger btn-sm" onclick="hapusdata(<?php echo $eb->id;?>);"><i class="fas fa-trash"></i></a>
                  <!-- <?php echo anchor('ebook/hapus_ebook/'.$eb->id,'<button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fas fa-trash"></i></button>'); ?> -->
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ebook</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo form_open_multipart('ebook/input_data');?>
      <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="" name="judul">
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <input type="text" class="form-control" id="penulis" placeholder="" name="penulis" require>
        </div>
        <div class="form-group">
                <label for="kategori">Kategori</label>
                <select id="kategori" class="form-control" name="kategori">
                    <option>Umum</option>
                    <option>Pemasaran</option>
                    <option>Pariwisata</option>
                    <option>Peternakan</option>
                    <option>Vokasi</option>
                    <option>Inspirasi</option>
                </select>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="penulis">Cover</label>
                <input type="file" class="form-control" id="cover" placeholder="" name="cover" require>
            </div>
            <div class="form-group col-md-6">
                <label for="penulis">Ebook</label>
                <input type="file" class="form-control" id="ebook" placeholder="" name="ebook" require>
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
</div>

<script type="text/javascript">
    var url="<?php echo base_url();?>";
    function hapusdata(id){
       var r=confirm("Apakah anda yakin akan menghapus data ini ?")
        if (r==true)
          window.location = url+"ebook/hapus_ebook/"+id;
        else
          return false;
        } 
</script>