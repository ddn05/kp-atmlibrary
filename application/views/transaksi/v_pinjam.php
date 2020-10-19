<div class="container-fluid">
    <h3 class="mb-3">PEMINJAMAN BUKU</h3>
    <div class="row">
    <div class="col-md-5">
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "berhasil"){
                echo "<div class='alert alert-success'>Transaksi Sukses.</div>";
            }
            if($_GET['pesan'] == "gagal"){
                echo "<div class='alert alert-danger'>Transaksi Gagal.</div>";
            }
        }
    ?>

        <form action="<?php echo base_url().'transaksi/act'?>" method="post">
        
        <div class="form-group">
            <label>NIS Peminjam</label>
            <select name="nis_anggota" id="" class="form-control">
                <option value="">- pilih NIS Siswa -</option>
                <?php foreach($anggota as $ang){ ?>
                    <option value="<?php echo $ang->nis;?>"><?php echo $ang->nis;?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Kode Buku</label>
            <select name="kode_buku" id="" class="form-control">
                <option value="">- pilih Kode buku -</option>
                <?php foreach($buku as $buk){ ?>
                    <option value="<?php echo $buk->kode;?>"><?php echo $buk->kode;?></option>
                <?php } ?>
            </select>
        </div>
        <?php
            $date = date("Y-m-d");
            
            $kembali = date("Y-m-d",strtotime($date.'+7 day'));
        ?>
        <div class="form-group">
            <label>Tanggal Pinjam</label>
            <input type="date" class="form-control" id="ulang_pass" placeholder="" name="tgl_pinjam" value="<?php echo $date;?>" readonly>
            <?php echo form_error('tgl_pinjam')?>
        </div>
        <?php?>
        <div class="form-group">
            <label>Tanggal Kembali</label>
            <input type="date" class="form-control" id="ulang_pass" placeholder="" name="tgl_kembali" value=<?php echo $kembali?> readonly>
            <?php echo form_error('tgl_kembali')?>
        </div>
        <div class="form-group">
            <label>Denda/hari</label>
            <input type="number" class="form-control" id="ulang_pass" placeholder="" name="denda">
        </div>
        <!-- <div class="form-group">
            <label>Harga Denda/hari</label>
            <select name="denda" id="" class="form-control">
                <option value="">500</option>
                <option value="">1000</option>
                <option value="">1500</option>
                <option value="">2000</option>
            </select>
        </div> -->

            <button class="btn btn-primary btn-danger btn-sm mr-2" type="reset">Reset</button>
            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
        </form>
    </div>

    <div class="col-md-1"></div>

    <div class="col-md-6 pl-4">
    <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>NO.</th>
            <th>NIS</th>
            <th>Nama</th>
            <!-- <th>Jenis Kelamin</th> -->
            <th>Kelas</th>
            <th>Jurusan</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            foreach($anggota as $ang) {
        ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $ang->nis?></td>
                <td><?php echo $ang->nama?></td>
                <!-- <td><?php echo $ang->jk?></td> -->
                <td><?php echo $ang->kelas?></td>
                <td><?php echo $ang->jurusan?></td>
            </tr>
        <?php }?>
        </tbody>
      </table>
    </div>
  </div>
    </div>
    </div>
    
    
</div>