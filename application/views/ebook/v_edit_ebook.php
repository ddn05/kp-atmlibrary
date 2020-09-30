<div class="container-fluid">
    <h3 class="mb-3">EDIT DATA EBOOK</h3>
    <a class="btn btn-success btn-sm mb-2 float-right" href="<?php echo base_url('ebook');?>">Kembali</a>
    <?php foreach ($ebook as $eb) { ?>
        <form action="<?php echo base_url().'ebook/update_ebook'?>" method="post">
        
        <div class="form-row mt-5">
            <div class="form-group col-md-8">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="hidden" class="form-control" id="id" placeholder="" name="id" value="<?php echo $eb->id ?>">
                    <input type="text" class="form-control" id="judul" placeholder="" name="judul" value="<?php echo $eb->judul ?>">
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control" id="penulis" placeholder="" name="penulis" value="<?php echo $eb->penulis ?>" require>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select id="kategori" class="form-control" name="kategori" value="<?php echo $eb->kategori ?>">
                        <option><?php echo $eb->kategori ?></option>
                        <option></option>
                        <option>Umum</option>
                        <option>Pemasaran</option>
                        <option>Pariwisata</option>
                        <option>Peternakan</option>
                        <option>Vokasi</option>
                        <option>Inspirasi</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-md-1"></div>
            <div class="form-group col-md-3">
                <img src="<?php echo base_url('uploads/img/'.$eb->cover);?>" width="200px" height="auto">
                <!-- <div class="form-group">
                    <label for="penulis">Cover</label>
                    <input type="file" class="form-control" id="cover" placeholder="" name="cover" require>
                </div> -->
            </div>
        </div>
            <button class="btn btn-primary btn-danger btn-sm mr-2" type="reset">Reset</button>
            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
        </form>
        
    <?php } ?>
</div>