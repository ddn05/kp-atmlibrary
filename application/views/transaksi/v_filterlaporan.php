<div class="container-fluid">
    <h3 class="mb-3">LAPORAN</h3>
    <div class="col-md-6">

        <form action="<?php echo base_url().'transaksi/lapkembali'?>" method="post">
        
        <div class="form-group">
            <label>Dari Tanggal</label>
            <input type="date" class="form-control" id="dari" placeholder="" name="dari">
            <?php echo form_error('dari')?>
        </div>
        <div class="form-group">
            <label>Sampai Tanggal</label>
            <input type="date" class="form-control" id="sampai" placeholder="" name="sampai">
            <?php echo form_error('sampai')?>
        </div>
            <button class="btn btn-primary btn-sm" type="submit">Cari</button>
        </form>
    </div>
    
</div>