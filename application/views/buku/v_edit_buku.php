<div class="container-fluid">
    <h3 class="mb-3">EDIT DATA BUKU</h3>
    <a class="btn btn-success btn-sm mb-2 float-right" href="<?php echo base_url('buku');?>">Kembali</a>
    <?php foreach ($buku as $buk) { ?>
        <form action="<?php echo base_url().'buku/update_buku'?>" method="post">
        
        <div class="col-md-7 mt-5">
            
            <div class="form-group">
                <label for="kode">Kode Buku</label>
                <input type="text" class="form-control" id="kode" placeholder="" name="kode" value="<?php echo $buk->kode?>" readonly>
            </div>
            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" class="form-control" id="judul" placeholder="" name="judul" value="<?php echo $buk->judul?>" require>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" id="penulis" placeholder="" name="penulis" value="<?php echo $buk->penulis?>" require>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" placeholder="" name="penerbit" value="<?php echo $buk->penerbit?>" require>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tahun">Tahun</label>
                    <input type="number" class="form-control" id="tahun" placeholder="" name="tahun" value="<?php echo $buk->tahun?>"require>
                </div>
                <div class="form-group col-md-6">
                    <label for="penerbit">Stok</label>
                    <input type="number" class="form-control" id="stok" placeholder="" name="stok" value="<?php echo $buk->stok?>" require>
                </div>
            </div>

        </div>
            <button class="btn btn-primary btn-danger btn-sm mr-2" type="reset">Reset</button>
            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
        </form>
        
    <?php } ?>
</div>