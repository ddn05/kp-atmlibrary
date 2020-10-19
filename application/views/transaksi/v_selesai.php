<div class="container-fluid">
    <h3 class="mb-3">TRANSAKSI SELESAI</h3>
    <div class="col-md-6">
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "berhasil"){
                echo "<div class='alert alert-success'>Password berhasil di ganti.</div>";
            }
            if($_GET['pesan'] == "gagal"){
                echo "<div class='alert alert-danger'>Password gagal di ganti.</div>";
            }
        }
    ?>

        <?php foreach($transaksi as $tran) { ?>

        <form action="<?php echo base_url().'transaksi/selesai_act'?>" method="post">

        <input type="hidden" class="id" id="id" placeholder="" name="id" value="<?php echo $tran->id_transaksi?>">
        <input type="hidden" class="kode_buku" id="kode_buku" placeholder="" name="kode_buku" value="<?php echo $tran->kode_buku?>">
        <input type="hidden" class="tgl_kembali" id="tgl_kembali" placeholder="" name="tgl_kembali" value="<?php echo $tran->tgl_kembali?>">
        <input type="hidden" class="denda" id="denda" placeholder="" name="denda" value="<?php echo $tran->denda?>">

        <div class="form-row">
            <div class="form-group col-md-4">
                <label>NIS</label>
                <input type="text" class="form-control" id="nis" placeholder="" name="nis" value="<?php echo $tran->nis?>" readonly>
            </div>
            <div class="form-group col-md-8">
                <label>Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="" name="nama" value="<?php echo $tran->nama?>" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Kode Buku</label>
                <input type="text" class="form-control" id="kode" placeholder="" name="kode" value="<?php echo $tran->kode?>" readonly>
            </div>
            <div class="form-group col-md-8">
                <label>Judul Buku</label>
                <input type="text" class="form-control" id="judul" placeholder="" name="judul" value="<?php echo $tran->judul?>" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Tanggal Pinjam</label>
                <input type="date" class="form-control" id="tgl_pinjam" placeholder="" name="tgl_pinjam" value="<?php echo $tran->tgl_pinjam?>" readonly>
            </div>
            <div class="form-group col-md-6">
                <label>Denda/hari</label>
                <input type="number" class="form-control" id="denda" placeholder="" name="denda" value="<?php echo $tran->denda?>" readonly>
            </div>
        </div>
        <?php
            $date = date("Y-m-d");
        ?>
        <div class="form-group">
            <label>Tgl Kembali</label>
            <input type="date" class="form-control" id="tgl_dikembalikan" placeholder="" name="tgl_dikembalikan" value="<?php echo $date?>">
        </div>
            <a href="<?php echo base_url()?>transaksi/kembali" class="btn btn-danger btn-sm mr-2">Batal</a>
            <input type="submit" value="simpan" class="btn btn-primary btn-sm">
        </form>

        <?php } ?>

    </div>
    
</div>