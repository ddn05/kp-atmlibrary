<div class="container-fluid">
    <h3 class="mb-3">EDIT DATA ANGGOTA</h3>
    <a class="btn btn-success btn-sm float-right mb-2" href="<?php echo base_url('anggota');?>">Kembali</a>
    <?php foreach ($anggota as $ang) { ?>
        <form action="<?php echo base_url().'anggota/update_anggota'?>" method="post">
        
        <div class="form-group">
            <label for="inputNIS">NIS</label>
            <input type="text" class="form-control" id="nis" placeholder="" name="nis" value="<?php echo $ang->nis ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="" name="nama" value="<?php echo $ang->nama ?>">
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="jk">Jenis Kelamin</label>
                <select id="jk" class="form-control" name="jk">
                    <option><?php echo $ang->jk ?></option>
                    <option></option>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="kelas">Kelas</label>
                <select id="kelas" class="form-control" name="kelas">
                    <option><?php echo $ang->kelas ?></option>
                    <option></option>
                    <option>X</option>
                    <option>XI</option>
                    <option>XII</option>
                </select>
            </div>
            <div class="form-group col-md-5">
                <label for="jurusan">Jurusan</label>
                <select id="jurusan" class="form-control" name="jurusan">
                    <option><?php echo $ang->jurusan ?></option>
                    <option><hr class="bg-primary"></option>
                    <option>Pemasaran</option>
                    <option>Pariwisata</option>
                    <option>Peternakan</option>
                </select>
            </div>

            <button class="btn btn-primary btn-danger btn-sm mr-2" type="reset">Reset</button>
            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
        </form>
        
    <?php } ?>
</div>